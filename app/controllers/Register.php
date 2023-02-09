<?php

class Register extends Controller
{
    public function index()
    {
        $this->view('register/index');
    }

    public function registerAction()
    {
        if ($this->model('Register_model')->createAccount($_POST) > 0) {
            header("Location:" . BASEURL . "/login");
        } else {
            header("Location:" . BASEURL . "/register");
        }
    }
}
