<?php

spl_autoload_register(function ($class) {
    $classPath = 'classes/' . $class . '.php';
    if (file_exists($classPath)) {
        require_once($classPath);
    }
});