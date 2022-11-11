<?php
    require_once "Model.php";
    class checkLogin extends DB{
        public function checkUser($username, $password){
            $check = "SELECT * FROM `user` WHERE (`username`, `password`) = ('$username', '$password');";
            return mysqli_query($this->con, $check);
        }
    }
?>