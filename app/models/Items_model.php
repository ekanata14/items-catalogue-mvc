<?php

class Items_model{
    private $categories = "categories";
    private $items = "items";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllItems(){
        $this->db->query("SELECT * FROM $this->items");
        return $this->db->resultAll();
    }

    public function getAllCategories(){
        $this->db->query("SELECT * FROM $this->categories");
        return $this->db->resultAll();
    }

    public function getCategory(){
        $this->db->query("SELECT * FROM $this->categories INNER JOIN $this->items ON $this->categories.id = $this->items.category_id");
        return $this->db->resultAll();
    }
}