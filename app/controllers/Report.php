<?php

class Report extends Controller
{
    public function index()
    {
        $data['page'] = 'Report';
        $data['complaints'] = $this->model('Complaint_model')->getAllComplaints();
        $this->view('templates/header', $data);
        $this->view('report/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['page'] = 'Report';
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('report/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['page'] = 'Report';
        $data['complaints'] = $this->model('Complaint_model')->getAllComplaints();
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('report/edit', $data);
        $this->view('templates/footer');
    }

    public function complaintEdit()
    {
        if ($this->model('Complaint_model')->editComplaint($_POST) > 0) {
            header('Location: ' . BASEURL . '/report');
        }
    }

    public function complaintDelete($id)
    {
        if ($this->model('Complaint_model')->deleteComplaint($id) > 0) {
            header('Location: ' . BASEURL . '/report');
        }
    }
}
