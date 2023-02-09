<?php

class Logout extends Controller
{
    public function index()
    {
        session_start();
        unset($_SESSION['userLogin']);
        unset($_SESSION['login']);
        session_destroy();
        header("Location:" . BASEURL . "/login");
    }
}
