<?php

namespace Deployer;

define('BASE_DIR', empty($_SERVER['BASE_DIR']) ? __DIR__ : $_SERVER['BASE_DIR']);
define('WORKSPACE', empty($_SERVER['WORKSPACE']) ? BASE_DIR . '/workspace' : $_SERVER['WORKSPACE']);

require 'recipe/common.php';
require BASE_DIR . '/vendor/deployer/recipes/recipe/rsync.php';

// Configuration

set('git_cache', true);
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

inventory(WORKSPACE . '/hosts.yml');

host('prepare')
    ->stage('prepare')
    ->set('deploy_path', WORKSPACE);

set('rsync', [
    'include' => [],
    'exclude-file' => WORKSPACE . '/current/deployignore',
    'exclude' => ['.git'],
    'include-file' => false,
    'filter' => [],
    'filter-file' => false,
    'filter-perdir' => false,
    'flags' => 'auzv',
    'options' => [
        'delete',
        'rsync-path="sudo -u {{http_user}} rsync"',
    ],
    'timeout' => null,
    'tty' => true,
]);

set('rsync_src', WORKSPACE . '/current');
set('rsync_dest', '{{deploy_path}}');

// Tasks

task('deploy:rsync', function () {
    invoke('rsync');

    $dst = get('rsync_dest');
    while (is_callable($dst)) {
        $dst = $dst();
    }
    cd($dst);
    run('sudo -Hu {{http_user}} bin/dump-autoload', ['tty' => true]);
    run('sudo -Hu {{http_user}} bin/cli migrate:up', ['tty' => true]);
    run('sudo -Hu {{http_user}} bin/dump-autoload', ['tty' => true]);
});

task('local:prepare_done', function () {
    writeln('<info>Local preparation Ok</info>');
});

task('git:changes', function () {
    if (!is_dir(get('rsync_src'))) {
        return;
    }
    cd('{{rsync_src}}');
    $lastRef = false;
    if (has('previous_release')) {
        cd('{{previous_release}}');
        $lastRef = trim(run('git rev-parse HEAD')->getOutput());
        cd('{{rsync_src}}');
        run('rsync -a --delete {{previous_release}}/ {{release_path}}/');
        run("git pull origin {{branch}} --rebase", ['tty' => true]);
    }
    if ($lastRef) {
        run($gitLog = "git log --pretty=format:'%C(green)%h%C(reset) [%C(yellow)%ci%C(reset)] - " .
            "%an <%ae>%n%C(bold blue)%s%C(reset)%n%w(0,2,2)%b%n' {$lastRef}..HEAD", ['tty' => true]);
        $changes = run($gitLog)->getOutput();
        if (!trim($changes)) {
            run('git branch -vv', ['tty' => true]);
            writeln('  <comment>No Changes</comment>');
        }
    } else {
        run('git branch -vv', ['tty' => true]);
    }
});

desc('Prepare source code locally');
task('local:prepare', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'git:changes',
    'local:prepare_done',
])->onStage('prepare');

desc('Deploy your project');
task('deploy', [
    'deploy:rsync',
    'success',
]);
