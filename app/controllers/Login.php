<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/index');
    }

    public function loginAction()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['user'] = $this->model('Login_model')->getUserLogin($username, $password);

        session_start();
        if ($data['user'] == NULL) {
            header("Location:" . BASEURL . "/login");
        } else {
            $_SESSION['login'] = $data['user']['role'];
            header("Location:" . BASEURL . "/home");
        }


        // if ($this->model('Login_model')->getLogin($_POST) > 0) {
        //     $data['user'] = $this->model('Login_model')->getLogin($_POST);
        //     // $_SESSION['login'] = $data['user'];
        //     header('Location: ' . BASEURL . '/home');
        // } else {
        //     header('Location: ' . BASEURL . '/login');
        // };
    }
}
