<?php
    class Home extends Controller{
        public function __construct(){
            require_once "mvc/models/getProduct.php";
            $this->product = new getProduct();
            $this->productData = $this->product->getProduct();
        }
        function index(){
            $login = $this->view("home", $this->productData);
        }
        function userHome(){
            return $this->view("users/userHome");
        }
        
    }
?>