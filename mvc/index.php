<?php
//http://localhost/q=controller/admin
// user/new
// user/drop
//article/new

define('VIEW_DIR', __DIR__. DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('CONTROLLER_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);
include_once(CONTROLLER_DIR . 'authAction.phtml');
include_once(CONTROLLER_DIR . 'TestController.php');


if (isset($_GET['q'])) {

    $request = $_GET['q'];
   // var_dump($request);
    $request = explode('/', $_GET['q']);
    $controller = ucfirst($request[0]) . 'Controller';
    $action = $request[1] . 'Action';
} else {
    $controller = 'index' . 'Controller';
    $action = 'index' . 'Action';
    //var_dump($request,$action,$controller);


}

if ($_GET['q'])
    if (!class_exists($controller)) {
        die('404');
    } else {
        $controller = new $controller;
        //var_dump($controller);

    }

if (!method_exists($controller, $action)) {
    die('404');
} else {
    $controller->$action();
}