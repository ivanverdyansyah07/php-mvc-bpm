<?php

class Complaint extends Controller
{
    public function index()
    {
        $data['page'] = 'Complaint';
        // $data['user'] = $this->model('Complaint_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('complaint/index', $data);
        $this->view('templates/footer');
    }

    public function complaintCreate()
    {
        if ($this->model('Complaint_model')->createComplaint($_POST) > 0) {
            header('Location: ' . BASEURL);
        } else {
            header('Location: ' . BASEURL . '/complaint');
        }
    }
}
