<?php
    class Admin extends Controller{
        function index(){
            $login = $this->view("admin/homeAdmin");
        }
        function product(){
            require_once "mvc/models/getProduct.php";
            $this->product = new getProduct();
            $data = $this->product->getProduct();
            return $this->view("admin/productAdmin", $data);
        }
        function addProduct(){
            require_once "mvc/models/getCata.php";
            $this->cata = new getCata();
            $data = $this->cata->cata();
            return $this->view("admin/addProductAdmin", $data);
        }
        function addProductHandle(){
            require_once "mvc/models/addProduct.php";
            $this->addProduct = new addProduct();
            $cata = $_POST['loai'];
            $id_cata = explode(" ", $cata)[0];
            $name_cata = explode(" ", $cata)[1];
            $product_name = $_POST["product_name"];
            $product_img = $_POST["img"];
            $product_price = $_POST["price"];
            $mota = $_POST["mota"];
            if($this->addProduct->addProduct($id_cata, $name_cata, $product_name, $product_price, $product_img, $mota)){
                header("Location: http://localhost/duanmau/admin/product");
            }
        }
        public function deleteProductHandle($id){
            require_once "mvc/models/deleteProduct.php";
            $this->deleteProduct = new deleteProduct();
            if($this->deleteProduct->deleteProduct($id)){
                header("Location: http://localhost/duanmau/admin/product");
            }
        }
        public function edit($id){
            require_once "mvc/models/getProduct.php";
            $this->product = new getProduct();
            $data = $this->product->getOneProduct($id);
            $this->view('admin/edit', $data);
        }
        public function editProductHandle($id){
            require_once "mvc/models/changeProduct.php";
            $this->changeProduct = new changeProduct();
            $cata = $_POST['loai'];
            $id_cata = explode(" ", $cata)[0];
            $name_cata = explode(" ", $cata)[1];
            $product_name = $_POST["product_name"];
            $product_img = $_POST["img"];
            $product_price = $_POST["price"];
            $mota = $_POST["mota"];
            if($this->changeProduct->changeProduct($id, $id_cata, $name_cata, $product_name, $product_img, $product_price, $mota)){
                header("Location: http://localhost/duanmau/admin/product");
            }
        }
        public function customer(){
            require_once "mvc/models/getUsers.php";
            $this->users = new getUsers();
            $data = $this->users->getUsers();
            return $this->view("admin/customerAdmin", $data);
        }
        public function changeType($id){
            require_once "mvc/models/changeUsers.php";
            $this->changeType = new changeUsers();
            if($this->changeType->changeUsers($id)){
                header("Location: http://localhost/duanmau/admin/customer");
            }
        }
        public function deleteUserHandle($id){
            require_once "mvc/models/deleteUser.php";
            $this->deleteUser = new deleteUser();
            if($this->deleteUser->deleteUser($id)){
                header("Location: http://localhost/duanmau/admin/customer");
            }
        }
    }
?>