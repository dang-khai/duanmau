<?php
    class Login extends Controller{
        public function __construct(){
            require_once "mvc/models/getProduct.php";
            $this->product = new getProduct();
            $this->productData = $this->product->getProduct();
        }
        public function index(){
            $login = $this->view("login");
        }
        public function checkType($type) {
            if($type == 'ADM'){
                return 0;
            }
            elseif($type == 'URS'){
                return 1;
            }
        }
        function checkLogin() {
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            require_once 'mvc/models/checkLogin.php';
            
            $this->checkLogin = new checkLogin();
            

            $data = $this->checkLogin->checkUser($userName, $password);
            while($row = mysqli_fetch_assoc($data)){
                $name = $row['name'];
                $username = $row['username'];
                $email = $row['email'];
                $type = $row['type'];
            };
            if($this->checkType($type) == 1){
                return $this->view("users/userHome", [  "username" => $username,
                                                        "email" => $email,
                                                        "name" => $name,
                                                        $this->productData
                                                    ]);
            }else{
                return $this->view("admin/homeAdmin", [  "username" => $username,
                                                         "email" => $email,
                                                         "name" => $name
                                                    ]);
            }
        }
        public function home(){
            header("refresh: 0; url = 'http://localhost/duanmau'");
        }
        public function product(){
            header("refresh: 0; url = 'http://localhost/duanmau/Admin/Product'");
        }
    }
?>