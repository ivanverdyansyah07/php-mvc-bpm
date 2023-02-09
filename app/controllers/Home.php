<?php

class Home extends Controller
{
    public function index()
    {
        $data['page'] = 'Home';
        $data['users'] = $this->model('Home_model')->getTotalUser();
        $data['admins'] = $this->model('Home_model')->getTotalAdmin();
        $data['complaints'] = $this->model('Home_model')->getTotalComplaint();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
