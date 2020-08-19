<?php
session_start();
require_once "config.php";
require_once "autoload.php";
$url =  isset($_GET['url']) ? $_GET['url'] : "";
$url = explode('/', $url);
if ($url[0] == "") {
    $controller = '/';
} else {
    $controller = $url[0];
}

switch ($controller) {
    case '/':
    case 'home':
        $c = new HomeController;
        $c->index();
        break;
    case 'danhmuc':
        $c = new CategoryController;
        if (isset($url[1])) {
            $c->category($url[1]);
        }
        break;
    case 'list-category':
        $c = new CategoryController;
        $c->list();
        if (isset($url[1])) {
            $c->delete($url[1]);
        }
        break;
    case 'add-category':
        $c = new CategoryController;
        $c->add();
        break;
    case 'edit-category':
        $c = new CategoryController;
        if (isset($url[1])) {
            $c->edit($url[1]);
        }
    case 'list-product':
        $c = new ProductController;
        $c->index();
        break;
    case 'add-product':
        $c = new ProductController;
        $c->add();
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
