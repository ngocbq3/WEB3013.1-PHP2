<?php
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
        break;
    case 'add-category':
        $c = new CategoryController;
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
