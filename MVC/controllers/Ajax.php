<?php 
    class Ajax extends Controller{
        public $userModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
        }

        public function checkUsername(){
            $email= $_POST['email'];

            echo $this->userModel->checkUserName($email);
        }
    }
?>