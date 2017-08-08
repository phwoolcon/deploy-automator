<?php

namespace Deployer;

require 'recipe/common.php';
require 'vendor/deployer/recipes/recipe/rsync.php';

// Configuration

set('git_tty', true);
set('git_cache', true);
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

inventory('hosts.yml');

host('prepare')
    ->stage('prepare')
    ->set('deploy_path', __DIR__ . '/working_dir');

set('rsync', [
    'include' => [],
    'exclude-file' => __DIR__ . '/working_dir/current/deployignore',
    'exclude' => ['.git'],
    'include-file' => false,
    'filter' => [],
    'filter-file' => false,
    'filter-perdir' => false,
    'flags' => 'auz',
    'options' => [
        'delete',
        'rsync-path="sudo -u www-data rsync"',
    ],
    'timeout' => null,
    'tty' => true,
]);

set('rsync_src', __DIR__ . '/working_dir/current');
set('rsync_dest', '{{deploy_path}}');

// Tasks

task('deploy:rsync', function () {
    invoke('rsync');

    $dst = get('rsync_dest');
    while (is_callable($dst)) {
        $dst = $dst();
    }
    cd($dst);
    run('bin/dump-autoload');
    run('bin/cli migrate:up');
    run('bin/dump-autoload');
});

task('local:prepare_done', function () {
    writeln('<info>Local preparation Ok</info>');
});

task('git:last_ref', function () {
    if (!is_dir(__DIR__ . '/working_dir/current')) {
        return;
    }
    cd('working_dir/current');
    set('last_ref', trim(run('git rev-parse HEAD')->getOutput()));
});

task('git:ref', function () {
    if (!is_dir(__DIR__ . '/working_dir/current')) {
        return;
    }
    cd('working_dir/current');
    $branch = get('branch');
    run("git reset --hard origin/{$branch}");
    if ($lastRef = get('last_ref')) {
        run($gitLog = "git log --pretty=format:'%C(green)%h%C(reset) [%C(yellow)%ci%C(reset)] - " .
            "%an <%ae>%n%C(bold blue)%s%C(reset)%n%w(0,2,2)%b%n' {$lastRef}..HEAD", ['tty' => true]);
        $changes = run($gitLog)->getOutput();
        if (!trim($changes)) {
            run('git branch -vv', ['tty' => true]);
            writeln('  <comment>No Changes</comment>');
        } else {
            writeln('Changed files:');
            run("git diff --name-status {$lastRef} HEAD", ['tty' => true]);
        }
    } else {
        run('git branch -vv', ['tty' => true]);
    }
});

desc('Prepare source code locally');
task('local:prepare', [
    'deploy:prepare',
    'deploy:lock',
    'git:last_ref',
    'deploy:release',
    'deploy:update_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'git:ref',
    'local:prepare_done',
])->onStage('prepare');

desc('Deploy your project');
task('deploy', [
    'deploy:rsync',
    'success',
]);
