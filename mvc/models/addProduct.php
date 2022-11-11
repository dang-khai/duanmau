<?php
    class addProduct extends DB{
        public function addProduct($id_cata, $name_cata, $product_name, $product_price, $product_img, $mota){
            $add = "INSERT INTO `product`(`id_catagory`,`name_catagory`, `product_name`, `product_img`, `product_price`, `mota`) VALUES ('$id_cata','$name_cata','$product_name','$product_img','$product_price','$mota')";
            return mysqli_query($this->con, $add); 
        }
    }
?>