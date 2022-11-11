<?php
    class Register extends Controller{
        public function index(){
            $login = $this->view("Register");
        }
        function addNewUser(){
            $name = $_POST["name"];
            $userName = $_POST["userName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $type = $_POST["type"];
            require_once 'mvc/models/addUser.php';
            $this->addUser = new addUser();
            if($this->addUser->addUser($name, $userName, $email, $password, $type)){
                header("Refresh: 0; url=http://localhost/duanmau/");
            }
        }
    }
?>