<?php
    class Users extends Controller{
        public $UserModel;

        public function __construct(){
            //Model
            $this->UserModel = $this->model("UserModel");
        }

        function Register(){
            // Call Models
            $reguser = $this->model("UserModel");
            //Call Views
            $this->view("master",[
                "Page"=>"Register"
            ]);
        }

        function processRegister(){
            //Get Data from Form
                if(isset($_POST["btnRegister"])){
                    $name = $_POST["username"];
                    $email = $_POST["email"];
                    $pwd = $_POST["password"];
                    $gender = $_POST["gender"];
                    //Insert Data to DB
                    $result = $this->UserModel->AddUser($name, $email, $pwd,$gender);
                    //Show notification
                    $this->view("master",[
                        "Page"=>"Register",
                        "Result"=> $result
                    ]);
                }

        }

        public function Login(){
            $this->view("master",[
                "Page"=>"Login"
            ]);
        }
        public function LoginProcess(){
            if(isset($_POST["btnSignIn"])){
                $email=$_POST["email"];
                $password=$_POST["password"];
            }
            $true=$this->UserModel->checkUser($email,$password);
            if(mysqli_num_rows($true)>0){
                $_SESSION["userID"]=$email;
                header("location:../home");
            }
            else{
                header("location:./login");
            }
        }

        public function DetailUser(){
                // Call Models
                $user = $this->model("UserModel");
                //Call Views
                $this->view("DetailUser", [
                    "Page" => "GetUser",
                    "User" => $user->GetUser()
                ]);
        }

        public function EditUser(){
            //Get Data from Form
            if(isset($_POST["btnUpdate"])){
                $userID = $_POST["userID"];
                $password = $_POST["password"];
                $username = $_POST["UserName"];
                $gender = $_POST["gender"];
                //Insert Data to DB
                $result = $this->UserModel->EditUserprocess($userID,$password,$username,$gender);
            }
        }

}
?>