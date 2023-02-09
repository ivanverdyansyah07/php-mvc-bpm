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

    // public function getComplaintsByID($id)
    // {
    //     $query = "SELECT * FROM $this->table WHERE user_id=$id";
    //     $this->db->query($query);
    //     return $this->db->resultAll();
    // }

    public function getComplaint($id)
    {
        $query = "SELECT * FROM $this->table WHERE id=$id";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function createComplaint($data)
    {
        $query = "INSERT INTO $this->table(id_level,name,email,phone,area,complaint) VALUES(:id_level,:name,:email,:phone,:area,:complaint)";
        $this->db->query($query);
        $this->db->bind('id_level', $data['id_level']);
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
        $query = "UPDATE $this->table SET `id`=:id,`name`=:name,`email`=:email,`phone`=:phone,`area`=:area,`complaint`=:complaint,`solution`=:solution WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('complaint', $data['complaint']);
        $this->db->bind('solution', $data['solution']);

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
}
