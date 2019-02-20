<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
var_dump($class_name); 
spl_autoload_register(function($class_name) {
var_dump($class_name); 
    include dirname(__FILE__) . '/' . $class_name . '.php';
});
