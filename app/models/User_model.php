<?php

class User_model{
    private $table = "user";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllUser(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultAll();
    }

    public function getUserByUsername($data){
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->rowCount();
    }
    public function getUserDataByUsername($data){
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }
}