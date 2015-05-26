<?php

require_once(dirname(__FILE__) . '/vendor/autoload.php');

$controller = isset($_GET['controller'])?$_GET['controller']:'';
$action     = isset($_GET['action'])?$_GET['action']:'';

$controllerName = '\\Controller\\' . $controller . 'Controller';
$actionName     = $action . 'Action';

try {

    $notFoundPage = new \Controller\NotController();

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            $notFoundPage->notAction();
        }

    } else {
        $notFoundPage->notAction();
    }

} catch (Exception $e) {
    throw new Exception($e->getMessage());
}