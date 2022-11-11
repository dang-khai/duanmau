<?php
    class deleteProduct extends DB{
        public function deleteProduct($id){
            $delete = "DELETE FROM `product` WHERE `id` = '$id'";
            return mysqli_query($this->con, $delete);
        }
    }
?>