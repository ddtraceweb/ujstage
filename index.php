<?php

require_once(dirname(__FILE__) . '/vendor/autoload.php');

$controller = $_GET['controller'];
$action     = $_GET['action'];

$controllerName = '\\Controller\\' . $controller . 'Controller';
$actionName     = $action . 'Action';
try {

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            echo 'connait pas la methode !';
        }

    } else {
        echo 'connait pas la class !';
    }

} catch (Exception $e) {
    throw new Exception($e->getMessage());
}