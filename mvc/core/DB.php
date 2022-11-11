<?php
    class DB{
        public $con;
        function __construct(){
            $this->con = mysqli_connect("localhost","root","","mvc");
            mysqli_select_db($this->con, "mvc");
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }  
    }
?>