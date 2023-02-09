<?php

class Home_model extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTotalUser()
    {
        $query = "SELECT COUNT(*) as total_user FROM user";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getTotalAdmin()
    {
        $query = "SELECT COUNT(*) as total_admin FROM admin";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getTotalComplaint()
    {
        $query = "SELECT COUNT(*) as total_complaint FROM complaint";
        $this->db->query($query);
        return $this->db->resultAll();
    }
}
