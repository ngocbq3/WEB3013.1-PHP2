<?php

class UserController extends Controller
{
    public function login()
    {
        $error = ['user' => '', 'pass' => ''];
        if (isset($_SESSION['user'])) {
            header("location:" . ROOT . 'admin');
            die;
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_REQUEST);
            $u = new User;
            $user = $u->check_user($username);
            //Validate username
            if ($user) {
                //Validate password
                if (password_verify($password, $user->password)) {
                    $_SESSION['user'] = $user->name;
                    header("Location: " . ROOT . 'admin');
                    die;
                } else {
                    $error['pass'] = "Mật khẩu không đúng";
                }
            } else {
                $error['user'] = "Username không đúng";
            }
        }
        //Load view
        $this->render('view/login', ['error' => $error]);
    }
}
