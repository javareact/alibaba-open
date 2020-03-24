<?php

/**
 * @author admin
 * @Version 1.0
 * @Describe:  自动加载类
 */
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $file  = $class . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});
