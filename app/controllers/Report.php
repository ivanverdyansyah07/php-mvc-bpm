<?php

class Report extends Controller
{
    public function index()
    {
        $data['page'] = 'Report';
        $data['complaints'] = $this->model('Complaint_model')->getAllComplaints();

        $this->view('templates/header', $data);
        $this->view('report/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['page'] = 'Report';
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('report/detail', $data);
        $this->view('templates/footer');
    }

    public function approved($id)
    {
        $data['page'] = 'Report';
        $data['complaints'] = $this->model('Complaint_model')->getAllComplaints();
        $data['complaint'] = $this->model('Complaint_model')->getComplaint($id);
        $this->view('templates/header', $data);
        $this->view('report/approved', $data);
        $this->view('templates/footer');
    }

    public function complaintApproved()
    {
        if ($this->model('Complaint_model')->approvedComplaint($_POST) > 0) {
            Flasher::setFlash('success', 'Report Data', 'Successfully Approved!');
            header("Location:" . BASEURL . "/report");
        } else {
            Flasher::setFlash('danger', 'Report Data', 'Failed to Approve!');
            header("Location:" . BASEURL . "/report");
        }
    }

    public function complaintDelete($id)
    {
        if ($this->model('Complaint_model')->deleteComplaint($id) > 0) {
            Flasher::setFlash('success', 'Report Data', 'Successfully Deleted!');
            header('Location: ' . BASEURL . '/report');
        } else {
            Flasher::setFlash('danger', 'Report Data', 'Failed to Delete!');
            header('Location: ' . BASEURL . '/report');
        }
    }
}
