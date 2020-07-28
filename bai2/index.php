<?php
require_once "model/BaseModel.php";
require_once "model/Categories.php";
require_once "model/Product.php";
require_once "controller/Controller.php";
require_once "controller/HomeController.php";
$controller =  isset($_GET['url']) ? $_GET['url'] : "/";
switch ($controller) {
    case '/':
    case 'home':
        $c = new HomeController;
        $c->index();
        break;
    case 'about':
        $c = new Controller;
        //$c->about();
        break;
    case 'contact':
        $c = new Controller;
        //$c->contact();
        break;
    default:
        echo "404 not found!!!";
}
