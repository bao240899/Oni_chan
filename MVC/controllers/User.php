<?php
class User extends Controller
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    function Register()
    {
        $this->view("master", [
            "Page" => "Register"
        ]);
    }

    function processRegister()
    {
        if (isset($_POST["btnRegister"])) {
            $name = $_POST["username"];
            $email = $_POST["email"];
            $pwd = $_POST["password"];
            $gender = $_POST["gender"];
            //Insert Data to DB
            $result = $this->UserModel->AddUser($name, $email, $pwd, $gender);
            //Show notification
            $this->view("master", [
                "Page" => "Register",
                "Result" => $result
            ]);
        }
    }

    public function Login()
    {
        $this->view("master", [
            "Page" => "Login"
        ]);
    }
    public function LoginProcess()
    {
        if (isset($_POST["btnSignIn"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
        }
        $check = $this->UserModel->checkUser($email, $password);
        if (mysqli_num_rows($check) > 0) {
            $_SESSION["userID"] = $email;
            header("location:./Oni_chan");
        } else {
            $_SESSION["userID"] = "null";
            header("location:./Oni_chan/User/login");
        }
    }
    public function Logout(){

    }
    public function DetailUser()
    {
        $user = $this->model("UserModel");
        $this->view("DetailUser", [
            "Page" => "GetUser",
            "User" => $user->GetUser()
        ]);
    }

    public function EditUser()
    {
        if (isset($_POST["btnUpdate"])) {
            $userID = $_POST["userID"];
            $password = $_POST["password"];
            $username = $_POST["UserName"];
            $gender = $_POST["gender"];
            $result = $this->UserModel->EditUserprocess($userID, $password, $username, $gender);
        }
    }
    function Follow($userID)
    {
        $this->view("master", [
            "Page" => "Follow",
            "Manga" => $this->UserModel->follow($userID)
        ]);
    }
}
