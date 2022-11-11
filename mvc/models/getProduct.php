<?php
    require_once "Model.php";
    class getProduct extends DB{
        public function getProduct(){
            return mysqli_query($this->con, "SELECT * FROM `product`");
        }
        public function getOneProduct($id){
            $data = "SELECT * FROM `product` WHERE `id` = '$id'";
            return mysqli_query($this->con, $data);
        }
    }
?>