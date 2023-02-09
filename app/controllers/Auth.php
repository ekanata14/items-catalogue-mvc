<?php

class Auth extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("auth/login");
        $this->view("templates/footer");
    }

    public function login(){
        $user = $this->model("User_model")->getUserDataByUsername($_POST);
        if($this->model("User_model")->getUserByUsername($_POST) > 0){
            if(password_verify($_POST['password'], $user['password'])){
                Redirect::to("admin");
                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'level' => $user['level'],
                    'login' => true
                ];
            }
        }
    }
}