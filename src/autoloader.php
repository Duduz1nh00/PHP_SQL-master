<?php

spl_autoload_register(function ($className) {
    $classPath = __DIR__ . '/' . $className . '.php';
    if (file_exists($classPath)) {
        require_once($classPath);
    }
});