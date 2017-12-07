<?php

spl_autoload_register(function ($class) {

    if (file_exists('app/controllers/' . $class . '.php'))
        require_once('app/controllers/' . $class . '.php');

    if (file_exists('app/models/' . $class . '.php'))
        require_once('app/models/' . $class . '.php');

    if (file_exists('app/views/' . $class . '.php')) {
        require_once('app/views/' . $class . '.php');
    }
    if (file_exists('libs/' . $class . '.php')) {
        require_once('libs/' . $class . '.php');
    }
});


$app = new Route;


