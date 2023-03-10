<?php

$baseConfig['templateManager'] = 'Plates';

$baseConfig['templates'] = [
    'templateDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'plates_bootstrap' . DIRECTORY_SEPARATOR,
    'compileDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'templates_c' . DIRECTORY_SEPARATOR,
    'configDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR,
    'cacheDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR,
];

$baseConfig['view'] = [
    'urlbaseaddr' => $baseConfig['URLBASEADDR'],
    'logo' => $baseConfig['URLBASEADDR'] . 'img/logo.svg',
    'lightmvc_logo' => $baseConfig['URLBASEADDR'] . 'img/lightmvc_logo.png',
    'lightmvc_logo_large' => $baseConfig['URLBASEADDR'] . 'img/lightmvc_logo_large.png',
    'favicon' => $baseConfig['URLBASEADDR'] . 'favicon.ico',
    'appname' => $baseConfig['appName'],
    'title' => 'MoodleORM',
    'author' => 'Andrew Caya',
    'email' => 'admin@moodleorm.org',
    'description' => 'A simple ORM, with a Unit of Work, to easily save cascading data from Moodle Forms, using Moodle Entities, via single database transactions.',
    'css' =>
        [
            //$baseConfig['URLBASEADDR'] . 'css/tailwind.min.css',
            //$baseConfig['URLBASEADDR'] . 'css/bootstrap.min.css',
            //$baseConfig['URLBASEADDR'] . 'css/bootstrap.custom.css',
            //$baseConfig['URLBASEADDR'] . 'css/dashboard.css',

        ],
    'js' =>
        [
            //$baseConfig['URLBASEADDR'] . 'js/jquery-3.3.1.min.js',
            //$baseConfig['URLBASEADDR'] . 'js/bootstrap.min.js',

        ],
    'jsscripts' =>
        [
            //"<script>\n\t\tfunction getPage(page) {\n\n\t\t\tvar url = page;\n\n\t\t\tjq( \"#pageBody\" ).load( url );\n\n\t\t}\n\t</script>\n",

        ],
    'bodyjs' => 0,
    'links' =>
        [
            //'Home' => $baseConfig['URLBASEADDR'] . 'index',
            //'API Doc' => 'http://apidocs.moodleorm.org/',

        ],
    'links-left' =>
        [
            //'Home' => $baseConfig['URLBASEADDR'] . 'index',
            //'Products' => $baseConfig['URLBASEADDR'] . 'products/index',

        ],
    'links-right' =>
        [
            //'Documentation' => 'https://lightmvc-framework.readthedocs.io/en/latest/?badge=latest',
            //'API Doc' => 'http://apidocs.lightmvcframework.net/',

        ],
    'navMenu' =>
        [
            //'Home' => $baseConfig['URLBASEADDR'] . 'index',

        ],

];
