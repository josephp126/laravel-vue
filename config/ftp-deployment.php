<?php

return [

    /**
     * command to run before starting the deployment
     */
    'before'         => [
    ],

    /**
     * run following commands and remote system after deployment
     *
     * remember to use the command line command for php if it is not standard!
     */
    'remote'         => [
        'yarn install --prod',
        'yarn production',
    ],

    /**
     * don't delete when purging
     *
     * only in the /public folder
     */
    'purge_excludes' => [
        'artisan',
        //        'composer.json',
    ],

    /**
     * include paths to deployment
     */
    'includes'       => [
        'artisan',
        'composer.json',
        'server.php',
        'app',
        'bootstrap',
        'config',
        'public',
        'database',
        'resources/views',
        'resources/lang',
        'routes',
        'vendor',
        'yarn.lock',
        'composer.lock',
        'package.json',
    ],

    // exclude paths from deploying
    'excludes'       => [
        'storage/',
        'storage/app',
        'storage/logs',
        'storage/framework/cache',
        'storage/framework/sessions',
        'storage/framework/views',
    ],

    // endpoints
    'servers'        => [

        'pottorff-dev' => [
            'config'     => 'pottorff-dev',
            'disk'       => 'pottorff-dev',
            'php-cli'    => 'php',
            'deploy-url' => 'http://dev.pottorff.com/',
            'uploads'    => [
                // path_src => path_dst
            ],
        ],

    ],

];
