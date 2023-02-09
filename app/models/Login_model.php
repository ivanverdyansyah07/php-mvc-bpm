<?php

class Login_model extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserLogin($username, $password)
    {
        $query = "SELECT * FROM user WHERE username=:username && password=:password";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }

    public function getAdminLogin($username, $password)
    {
        $query = "SELECT * FROM admin WHERE username=:username && password=:password";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }

    public function getRole($id)
    {
        $query = "SELECT * FROM level WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
