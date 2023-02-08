<?php

class Login_model extends Database
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLogin($data)
    {
        $query = "SELECT * FROM $this->table WHERE username=:username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);

        return $this->db->single();
    }
}
