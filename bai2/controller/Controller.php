<?php
class Controller
{
    public function render($view, $data = [])
    {
        include_once "$view.php";
    }
}
