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

task('deploy:composer_update', function () {
    run('cd {{deploy_path}}/current && composer update');
})->desc('Set Symlink');


desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:composer_update',
    'cleanup',
    'success'
]);

after('deploy', 'success');

