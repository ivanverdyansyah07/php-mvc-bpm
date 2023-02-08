<?php

class HomeAdmin extends Controller
{
    public function index()
    {
        $data['page'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('homeadmin/index');
        $this->view('templates/footer');
    }
}
