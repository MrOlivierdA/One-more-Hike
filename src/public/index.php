<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../core/router.php');
require_once('../core/request.php');

//Router home-made
if(isset($_GET["url"])){
    $router = new Router($_GET["url"]);

    $router->get('/home', function(){ 
        require_once '../view/homepage.php';
    });
    $router->get('/contact', function(){ 
        require_once '../view/contact.php';
    });
    $router->get('/register', function(){ 
        require_once '../view/user/register.php';
    });
    $router->get('/login', function(){ 
        require_once '../view/user/login.php';
    });
    $router->get('/profile', function(){ 
        require_once '../view/user/profile.php';
    });

    $router->get('/profile/:id', function($id){
        echo "Hola $id"; 
    });

    $router->run();
}else{
        require_once '../view/homepage.php';
}