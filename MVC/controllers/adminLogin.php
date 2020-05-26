
    <?php
class adminLogin extends Controller
{
    public $mangaModel;
    public $chapterModel;
    public $commentModel;
    public $userModel;
    public $adminModel;
    function __construct()
    {
        $this->commentModel=$this->model("commentModel");
        $this->mangaModel = $this->model("MangaModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->userModel = $this->model("userModel");
        $this->adminModel = $this->model("adminModel");
        
    }
    public function login(){
        $this->view("master", [
            "Page" => "adminLogin"
        ]);
    }
    public function processLogin(){
        if(isset($_POST["btnLoginAdmin"])){
        $adminID=$_POST["adminID"];
        $password=$_POST["password"];
        }
        $check=$this->adminModel->checkLoginAdmin($adminID,$password);
        if(mysqli_num_rows($check)>0){
            $_SESSION["adminID"]= $adminID;
            $_SESSION["notification_AdminLogin"]="success";
            header("location:http://localhost:8080/Oni_chan/admin/index");
        }
        else {
            $_SESSION["notification_AdminLogin"]="fail";
            header("location:http://localhost:8080/Oni_chan/adminlogin/login");
        }
    }
    ///////////////////////////////////
    public function logout(){
        session_destroy();
        header("location:http://localhost:8080/Oni_chan/adminlogin/login");

    }
}
