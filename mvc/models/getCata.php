<?php
    require_once "Model.php";
    class getCata extends DB{
        public function Cata(){
            return mysqli_query($this->con, "SELECT * FROM `category`");
        }
    }
?>