<?php
class User extends Controller
{
    public $UserModel;
    public $followModel;
    public function __construct()
    {
        if(!isset($_SESSION["userID"])){
            $_SESSION["userID"] = "somebody";
        }
        $this->UserModel = $this->model("UserModel");
        $this->followModel = $this->model("followModel");
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
            header("location:http://localhost:8080/Oni_chan/");
        } else {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
    }
    public function Logout(){
        if(isset($_SESSION['userID'])){
            session_destroy();
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        
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

    function account($userID){
        
    }
    
    function Follow($userID)
    {
        $this->view("DetailUser", [
            "Page" => "Follow",
            "Manga" => $this->UserModel->follow($userID)
        ]);
    }
    function addFollowProcess($userID,$mangaID)
    {
        $this->followModel->addFollow($userID,$mangaID);
        header("location:http://localhost:8080/Oni_chan/manga/detailmanga/$mangaID");
    }
    function unFollowProcess($userID,$mangaID)
    {
        $this->followModel->unFollow($userID,$mangaID);
        header("location:http://localhost:8080/Oni_chan/manga/detailmanga/$mangaID");
    }
}
