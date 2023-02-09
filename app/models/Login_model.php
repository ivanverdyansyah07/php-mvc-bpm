<?php

class Login_model extends Database
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserLogin($username, $password)
    {
        $query = "SELECT * FROM $this->table WHERE username=:username && password=:password";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}
