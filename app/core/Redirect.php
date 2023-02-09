<?php

class Redirect{
    public static function to($route){
        header("Location: " . BURL . "/$route");
    }
}