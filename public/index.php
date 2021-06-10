<?php

require dirname(__DIR__) . '/Core/Routing.php';

require Routing::getPathByParent('Core/Date.php');
require Routing::getPathByParent('Core/Format.php');

require Routing::getPathByParent('.env.php');
require Routing::getPathByParent('Service/Connection.php');
require Routing::getPathByParent('Model/Entity.php');
require Routing::getPathByParent('Controller/Controller.php');
require Routing::getPathByParent('Controller/ViewController.php');
require Routing::getPathByParent('Controller/ErrorController.php');
require Routing::getPathByParent('Controller/PostController.php');
require Routing::getPathByParent('Controller/UserController.php');


$page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

try {
    if ($page === 'post.home') {
        $inc = new PostController();
        $inc->home();
    } elseif ($page === 'post.show') {
        $inc = new PostController();
        $inc->show($_GET['id']);
    } elseif ($page === 'connexion') {
        $inc = new UserController();
        $inc->home();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    $inc = new ErrorController();
    $inc->show($e);
}
