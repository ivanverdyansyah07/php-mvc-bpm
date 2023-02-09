<?php

class Register_model extends Database
{
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function createAccount($data)
    {
        $query = "INSERT INTO $this->table(fullname, username, password, id_level) VALUES(:fullname, :username, :password, :id_level)";
        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id_level', $data['id_level']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
