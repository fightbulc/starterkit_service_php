<?php

define('ENV', $_SERVER['ENV']);

// set autoloader
if (ENV === 'DEVELOPMENT')
{
    $classmap = require __DIR__ . '/../vendor/composer/autoload_classmap.php';

    spl_autoload_register(function ($class) use ($classmap)
    {
        require $classmap[$class];
    });
}
else
{
    require __DIR__ . '/../vendor/autoload.php';
}

// ----------------------------------------------

// load config
$config = require __DIR__ . '/../src/config.php';

// start server
\Simplon\Service\Service::start($config, __DIR__);