<?php

class History extends Controller
{
    public function index($id)
    {
        $data['page'] = 'History';
        $data['complaints'] = $this->model('Complaint_model')->getComplaintsByID($id);
        $this->view('templates/header', $data);
        $this->view('history/index', $data);
        var_dump($data['complaints']);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['page'] = 'History';
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('history/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['page'] = 'History';
        $data['complaints'] = $this->model('Complaint_model')->getAllComplaints();
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('history/edit', $data);
        $this->view('templates/footer');
    }

    public function complaintEdit()
    {
        if ($this->model('Complaint_model')->editComplaint($_POST) > 0) {
            header('Location: ' . BASEURL . '/history');
        }
    }

    public function complaintDelete($id)
    {
        if ($this->model('Complaint_model')->deleteComplaint($id) > 0) {
            header('Location: ' . BASEURL . '/history');
        }
    }
}
