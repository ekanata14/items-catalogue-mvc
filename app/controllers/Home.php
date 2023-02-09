<?php

class Home extends Controller{
    public function index(){
        $data = [
            'user' => $this->model("User_model")->getAllUser(),
        ];
        $this->view("templates/header");
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}