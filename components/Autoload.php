<?php

spl_autoload_register('autoloader');

function autoloader($className) {
    # list all the class directories in the array
    $array_paths = array(
        '/models',
        '/components',
    );

    foreach($array_paths as $path) {
        $path = ROOT . $path . $className . '.php';
        if (is_file($path)) {
            include_once($path);
        }
    }
}
