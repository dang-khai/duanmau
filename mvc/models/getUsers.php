<?php
    require_once "Model.php";
    class getUsers extends DB{
        public function getUsers(){
            return mysqli_query($this->con, "SELECT * FROM `user`");
        }
    }
?>