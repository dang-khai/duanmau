<?php
    require_once "Model.php";
    class addUser extends DB{
        public function addUser($name, $username, $email, $password, $type){
            $add = "INSERT INTO `user`(`name`, `username`, `email`, `password`, `type`) VALUES ('$name','$username', '$email','$password', '$type')";
            return mysqli_query($this->con, $add);
        }
    }
?>