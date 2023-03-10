<?php

class Complaint_model extends Database
{
    private $table = 'complaint';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllComplaints()
    {
        $query = "SELECT * FROM $this->table ORDER BY id DESC";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getComplaintsByID($id)
    {
        $query = "SELECT * FROM complaint WHERE complaint.user_id=$id";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getComplaint($id)
    {
        $query = "SELECT * FROM $this->table WHERE id=$id";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getTotalComplaint($id)
    {
        $query = "SELECT COUNT(*) as total_complaint FROM complaint WHERE complaint.user_id=$id";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function createComplaint($data)
    {
        $query = "INSERT INTO $this->table(user_id,name,email,phone,area,complaint) VALUES(:user_id,:name,:email,:phone,:area,:complaint)";
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('complaint', $data['complaint']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editComplaint($data)
    {
        $query = "UPDATE $this->table SET `id`=:id,`name`=:name,`email`=:email,`phone`=:phone,`area`=:area,`complaint`=:complaint WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('complaint', $data['complaint']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteComplaint($id)
    {
        $query = "DELETE FROM $this->table WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function approvedComplaint($data)
    {
        $query = "UPDATE $this->table SET `id`=:id,`name`=:name,`email`=:email,`phone`=:phone,`area`=:area,`complaint`=:complaint,`reply`=:reply WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('complaint', $data['complaint']);
        $this->db->bind('reply', $data['reply']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
