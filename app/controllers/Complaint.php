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
            Flasher::setFlash('success', 'Data Complaint', 'Successfully Added!');
            header('Location: ' . BASEURL);
        } else {
            Flasher::setFlash('danger', 'Data Complaint', 'Failed to Add!');
            header('Location: ' . BASEURL);
        }
    }
}
