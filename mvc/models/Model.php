<?php
    class Model extends DB{
        public function GetUser(){
            $getUser = "SELECT * FROM user";
            return mysqli_query($this->con, $getUser);
        }
        
    }
?>