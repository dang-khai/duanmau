<?php
    require_once "Model.php";
    class changeUsers extends DB{
        public function changeUsers($id){
            return mysqli_query($this->con, "UPDATE `user` SET `type`='ADM' WHERE `id` = '$id'");
        }
    }
?>