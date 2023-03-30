<?php

//const BD = new PDO('mysql:dbname=w11420n46jolinfo_tp1;host=localhost',
 //   'w11420n46jolinfo', '4zpCX;M_EmkR');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    if(file_exists(__DIR__ .'/../' .  $className . '.php'))
    include_once __DIR__ . '/../' .  $className . '.php';
});

session_start();

$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri, 1);
$parts = explode('/', $uri);
$nom_controller = $parts[0] ?? 'Home';

if (class_exists('\controller\\' . $nom_controller . '_controller')){
    $nom_controller = '\controller\\' . $nom_controller . '_controller';
    $controller = new $nom_controller();

    $action = $parts[1] ?? 'index';

    if (method_exists($controller, $action)){
        $controller->$action();
    }
    else{
        $controller = new \controller\Home_controller();
        $controller->index();
    }
}
else{
    $controller = new \controller\Home_controller();
    $controller->index();
}
