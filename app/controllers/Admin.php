<?php

class Admin extends Controller{
    public function index(){
        $data = [
            'title' => "Dashboard"
        ];
        $this->view("templates/header");
        $this->view("admin/index", $data);
        $this->view("templates/footer");
    }

    public function user(){
        $data = [
            'title' => "Dashboard | Users",
            'users' => $this->model("User_model")->getAllUser(),
        ];
        $this->view("templates/header");
        $this->view("admin/user", $data);
        $this->view("templates/footer");
    }

    public function categories(){
        $data = [
            'title' => "Dashboard | Categories",
            'categories' => $this->model("Items_model")->getAllCategories()
        ];
        $this->view("templates/header");
        $this->view("admin/categories", $data);
        $this->view("templates/footer");
    }

    public function items(){
        $data = [
            'title' => "Dashboard | Items",
            'items' => $this->model("Items_model")->getAllItems(),
            'categoryId' => $this->model("Items_model")->getCategory()
        ];
        $this->view("templates/header");
        $this->view("admin/items", $data);
        $this->view("templates/footer");
    }
}