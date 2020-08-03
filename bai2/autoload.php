<?php
function __autoload($class)
{
    if (file_exists("./controller/" . $class . ".php")) {
        require_once "./controller/" . $class . ".php";
    } elseif (file_exists("./model/" . $class . ".php")) {
        require_once "./model/" . $class . ".php";
    }
}
