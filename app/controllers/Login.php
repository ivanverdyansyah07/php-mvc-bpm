<?php

class Login extends Controller
{
    public function index()
    {
        // $_SESSION['login'] = 'guest';
        $this->view('login/index');
    }

    public function loginAction()
    {
        if ($this->model('Login_model')->getLogin($_POST) > 0) {
            $data['user'] = $this->model('Login_model')->getLogin($_POST);
            // $_SESSION['login'] = $data['user'];
            header('Location: ' . BASEURL . '/home');
        } else {
            header('Location: ' . BASEURL . '/login');
        };
    }
}
