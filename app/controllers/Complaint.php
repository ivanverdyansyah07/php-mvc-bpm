<?php

class Complaint extends Controller
{
    public function index()
    {
        $data['page'] = 'Complaint';
        $this->view('templates/header', $data);
        $this->view('complaint/index');
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
