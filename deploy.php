<?php
namespace Deployer;

require 'recipe/common.php';
require __DIR__ . '/vendor/deployer/recipes/rsync.php';

// Configuration

set('git_tty', true);
set('git_cache', true);
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

inventory('hosts.yml');

host('prepare')->set('deploy_path', __DIR__ . '/working_dir');

// Tasks

task('deploy:rsync', function () {
//    run('sudo systemctl restart php-fpm.service');
});

task('local:prepare_done', function () {
    writeln('<info>Local preparation Ok</info>');
});

task('git:ref', function () {
    cd('working_dir/current');
    run('git branch -vv', ['tty' => true]);
});

desc('Prepare source code locally');
task('local:prepare', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'git:ref',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'local:prepare_done',
])->onStage('prepare');

desc('Deploy your project');
task('deploy', [
    'deploy:rsync',
    'success',
]);
