<?php
namespace Deployer;
require 'recipe/common.php';

// Configuration
set('repository', 'https://oauth2:'.getenv('ACCESS_TOKEN').'@gitlab.com/hadronmegantara/wincattoken.git');
set('ssh_type', 'native');
set('ssh_multiplexing', false);

# production
host('production')
    ->hostname(getenv('IP_PROD'))
    ->port('22')
    ->user('dev')
    ->configFile('~/.ssh/config')
    ->set('branch','master')
    ->set('deploy_path','/data/project/wincattoken')
    ->set('keep_releases', 5)
    ->stage('production');

task('deploy:composer', function () {
    run('cd {{deploy_path}}/current && composer update');
    run('cd {{deploy_path}}/current && /usr/bin/php artisan key:generate');
})->desc('Composer Update');

task('deploy:symlink_env', function () {
    run('ln -sfv {{deploy_path}}/shared/.env && {{deploy_path}}/current/.env');
})->desc('Symlink .env');


desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:composer',
    'deploy:symlink_env',
    'cleanup',
    'success'
]);

after('deploy', 'success');

