<?php
    class Users extends Controller{
        public function __construct(){
            require_once "mvc/models/getProduct.php";
            $this->product = new getProduct();
            $this->productData = $this->product->getProduct();
        }
        function index($userName, $password){
            require_once 'mvc/models/checkLogin.php';
            $this->checkLogin = new checkLogin();
            $data = $this->checkLogin->checkUser($userName, $password);
            while($row = mysqli_fetch_assoc($data)){
                $name = $row['name'];
                $username = $row['username'];
                $email = $row['email'];
                $type = $row['type'];
            };
            $login = $this->view("users/userHome", [  "username" => $username,
                                                        "email" => $email,
                                                        "name" => $name,
                                                        $this->productData
                                                    ]);
        }
    }
?>