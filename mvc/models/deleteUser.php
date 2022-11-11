<?php
    class deleteUser extends DB{
        public function deleteUser($id){
            $delete = "DELETE FROM `user` WHERE `id` = '$id'";
            return mysqli_query($this->con, $delete);
        }
    }
?>