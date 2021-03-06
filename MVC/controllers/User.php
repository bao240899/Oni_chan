<?php
class User extends Controller
{
    public $UserModel;
    public $followModel;
    public $commentModel;
    public function __construct()
    {
        if (!isset($_SESSION["userID"])) {
            $_SESSION["userID"] = "somebody";
        }
        $this->UserModel = $this->model("UserModel");
        $this->followModel = $this->model("followModel");
        $this->commentModel = $this->model("commentModel");
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
        }
        $check = $this->UserModel->checkUserName($email);
        if (mysqli_num_rows($check) > 0) {
            //Show notification
            $this->view("master", [
                "Page" => "Register",
                "email_error" => "Sorry... email already taken"
            ]);
        } else {
            $this->UserModel->AddUser($name, $email, $pwd, $gender);
            //Show notification
            $this->view("master", [
                "Page" => "Register",
                "Result" => "Register Successful"
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
            $_SESSION["notification_Login"] = "success";
            header("location:http://localhost:8080/Oni_chan/");
        } else {
            $_SESSION["notification_Login"] = "fail";
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
    }
    public function Logout()
    {
        if (isset($_SESSION['userID'])) {
            session_destroy();
            header("location:http://localhost:8080/Oni_chan/");
        }
    }
    // public function DetailUser()
    // {
    //     if($_SESSION["userID"]=="somebody"||!isset($_SESSION["userID"])){
    //         header("location:http://localhost:8080/Oni_chan/user/login");
    //     }
    //     $user = $this->model("UserModel");
    //     $this->view("DetailUser", [
    //         "Page" => "GetUser",
    //         "User" => $user->GetUser()
    //     ]);
    // }
    public function editUserByUser($userID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->view("DetailUser", [
            "Page" => "EditUserByUser",
            "user" => $this->UserModel->getUserByUserID($userID)
        ]);
    }

    public function EditUser()
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"])) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        if (isset($_POST["btnUpdate"])) {
            $userID = $_POST["userID"];
            $password = $_POST["password"];
            $username = $_POST["UserName"];
            $gender = $_POST["gender"];
            $avatar = $_POST["avatar"];
            $result = $this->UserModel->EditUser($userID, $password, $username, $avatar, $gender);
            if ($result == "true") {
                $_SESSION["notification_EditUser"] = "success";
                header("location:http://localhost:8080/Oni_chan/user/editUserByUser/$userID");
            } else {
                $_SESSION["notification_EditUser"] = "fail";
                header("location:http://localhost:8080/Oni_chan/user/editUserByUser/$userID");
            }
        }
    }

    function Account($userID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->view("DetailUser", [
            "Page"  => "General",
            "Manga" => $this->UserModel->follow($userID),
            "Info"  => $this->UserModel->getUserByUserID($userID)
        ]);
    }
    function comment($userID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->view("DetailUser", [
            "Page"  => "userComment",
            "comment" => $this->commentModel->getCommentByUserID($userID)
        ]);
    }
    function deleteComment($commentID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"])) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->commentModel->deleteComment($commentID);
        header("location:http://localhost:8080/Oni_chan/user/comment/" . $_SESSION['userID']);
    }
    function Follow($userID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->view("DetailUser", [
            "Page"  => "Follow",
            "Manga" => $this->UserModel->follow($userID)
        ]);
    }
    function addFollowProcess($userID, $mangaID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->followModel->addFollow($userID, $mangaID);
        header("location:http://localhost:8080/Oni_chan/manga/detailmanga/$mangaID");
    }
    function unFollowProcess($userID, $mangaID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->followModel->unFollow($userID, $mangaID);
        header("location:http://localhost:8080/Oni_chan/manga/detailmanga/$mangaID");
    }
    function password($userID)
    {
        if ($_SESSION["userID"] == "somebody" || !isset($_SESSION["userID"]) || $_SESSION["userID"] != $userID) {
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        $this->view("DetailUser", [
            "Page" => "userPassword",
            "user" => $this->UserModel->getUserByUserID($userID)
        ]);
    }
    function change_password_process()
    {
        if (isset($_POST["btnUpdate"])) {
            $newpassword = $_POST["passwordNew"];
            $userID = $_SESSION["userID"];
        }
        $result=$this->UserModel->change_password($userID, $newpassword);
        if($result=="true"){
            $_SESSION["notification_ChangePassword"] = "success";
            header("location:http://localhost:8080/Oni_chan/user/Account/$userID");
        }
        else{
            $_SESSION["notification_ChangePassword"] = "fail";
            header("location:http://localhost:8080/Oni_chan/user/Account/$userID");
        }
        
    }
}
