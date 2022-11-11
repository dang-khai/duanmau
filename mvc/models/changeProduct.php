<?php
    require_once "Model.php";
    class changeProduct extends DB{
        public function changeProduct($id, $id_cata, $name_cata, $product_name, $product_img, $product_price, $mota){
            $change = "UPDATE `product` SET `name_catagory`='$name_cata', `id_catagory`='$id_cata', `product_name`='$product_name',`product_img`='$product_img',`product_price`='$product_price',`mota`='$mota' WHERE `id` = '$id'";
            return mysqli_query($this->con, $change);
        }
        
    }
?>