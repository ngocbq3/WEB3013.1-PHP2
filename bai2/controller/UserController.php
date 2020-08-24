<?php

class UserController extends Controller
{
    public function login()
    {
        $error = ['user' => '', 'pass' => ''];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_REQUEST);
            $u = new User;
            $user = $u->check_user($username);
            if ($user) {
                if (password_verify($password, $user->password)) {
                    $_SESSION['user'] = $user->name;
                    header("Location: " . ROOT . 'admin');
                    //var_dump($user);
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
