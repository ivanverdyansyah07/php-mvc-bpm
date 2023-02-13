<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/index');
    }

    public function loginAction()
    {
        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['user'] = $this->model('Login_model')->getAdminLogin($username, $password);

        if ($data['user'] == NULL) {
            $data['user'] = $this->model('Login_model')->getUserLogin($username, $password);
        }

        $id_level = $data['user']['id_level'];
        $data['role'] = $this->model('Login_model')->getRole($id_level);

        if ($data['user'] == NULL) {
            // Flasher::setflash('danger', 'Login', 'Gagal!');
            header("Location:" . BASEURL . "/login");
        } else {
            // Flasher::setflash('success', 'Login', 'Berhasil!');
            $_SESSION['userLogin'] = $data['user'];
            $_SESSION['login'] = $data['role']['role'];
            header("Location:" . BASEURL . "/home");
        }
    }
}
