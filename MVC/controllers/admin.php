<?php
class admin extends Controller
{
    public $mangaModel;
    public $chapterModel;
    public $commentModel;
    public $userModel;
    public $adminModel;
    public $categoryModel;
    function __construct()
    {
        if(!isset($_SESSION["adminID"])){
            header("location:http://localhost:8080/Oni_chan/adminlogin/login");
        }
        $this->commentModel=$this->model("commentModel");
        $this->mangaModel = $this->model("MangaModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->userModel = $this->model("userModel");
        $this->adminModel = $this->model("adminModel");
        $this->categoryModel = $this->model("categoryModel");
    }
    
    ///////////////////////////////////
    public function index(){
        $this->view("adminpage", [
            "Page" => "Index-admin"
        ]); 
    }
    ///////////////// admin Manga /////////////////
    function getmanga()
    {
        $this->view("adminpage", [
            "Page" => "GetManga",
            "Manga" => $this->mangaModel->GetManga()
        ]);
    }
    function addmanga()
    {
        $this->view("adminpage", [
            "Page" => "Addmanga",
        ]);
    }
    function addMangaProcess()
    {
        if (isset($_POST["bntAddManga"])) {
            $mangaName = $_POST["bookname"];
            $Author = $_POST["author"];
            $Artists = $_POST["artists"];
            $CategoryID = $_POST["category"];
            $Description = $_POST["description"];
            $Cover = $_POST["cover"];
        }
        $result=$this->mangaModel->addManga($mangaName, $Author, $Artists, $CategoryID, $Description, $Cover);
        if($result=="true"){
            $_SESSION["notification_AddManga"]="success";
            header("location:http://localhost:8080/Oni_chan/admin/getmanga");
        }
        else{
            $_SESSION["notification_AddManga"]="fail";
            header("location:http://localhost:8080/Oni_chan/admin/getmanga");
        }
        
    }
    function editmanga($mangaID)
    {
        $this->view("adminpage", [
            "Page" => "editmanga",
            "manga" => $this->mangaModel->showManga($mangaID),
            "category"=>$this->categoryModel->getCategory()
        ]);
    }
    function editMangaProcess(){
        if(isset($_POST["bntEditManga"])){
            $mangaID=$_POST["bookid"];
            $mangaName=$_POST["bookname"];
            $Author=$_POST["author"];
            $Artists=$_POST["artists"];
            $CategoryID=$_POST["category"];    
            $Description=$_POST["description"];
            $Cover=$_POST["cover"];
        }
        $result=$this->mangaModel->editManga($mangaID,$mangaName,$Author,$Artists,$CategoryID,$Description,$Cover);
        if($result=="true"){
            $_SESSION["notification_EditManga"]="success";
            header("location:http://localhost:8080/Oni_chan/admin/editmanga/$mangaID");
        }
        else{
            $_SESSION["notification_EditManga"]="fail";
            header("location:http://localhost:8080/Oni_chan/admin/editmanga/$mangaID");
        }
    }
    function deleteManga($mangaID){
        $result=$this->mangaModel->DeleteManga($mangaID);
        if($result=="true"){
            $_SESSION["notification_DeleteManga"]="success";
            header("location:http://localhost:8080/Oni_chan/admin/getmanga");
        }
        else{
            $_SESSION["notification_DeleteManga"]="fail";
            header("location:http://localhost:8080/Oni_chan/admin/getmanga");
        }
    }
    /////////////////////// admin chapter/////////////////////////////
    function getchapter($mangaID)
    {
        $this->view("adminpage", [
            "Page" => "GetChapter",
            "Chapter" => $this->chapterModel->getChapterByMangaID($mangaID)
        ]);
    }
    function addchapter($mangaID)
    {
        if(!isset($mangaID)){
            header("location:./getmanga");
        }
        $this->view("adminpage", [
            "Page" => "Addchapter",
            "MangaID"=>$mangaID,
            "NumberOfNewChapter"=>$this->chapterModel->getLastChapter($mangaID)
        ]);
    }
    function addChapterProcess(){
        if(isset($_POST["bntAddChapter"])){
            $chapterName=$_POST["chaptername"];
            $mangaID=$_POST["bookid"];
            $content=$_POST["content"];
            $view=$_POST["view"];
            $lastUpdate=$_POST["lastUpdate"];
            $lastChapter=$_POST["lastChapter"];
        }
        $checkChapterName = $this->chapterModel->checkChapterName($mangaID,$chapterName);
        $checkLastChapter = $this->chapterModel->checkLastChapter($mangaID,$lastChapter);
        if (mysqli_num_rows($checkChapterName) > 0) {
            //Show notification
            $this->view("adminpage", [
                "Page" => "Addchapter",
                "MangaID"=>$mangaID,
                "chaptername_error" => "Sorry... Chapter Name already taken",
                "NumberOfNewChapter"=>$this->chapterModel->getLastChapter($mangaID)
            ]);
        }
        elseif (mysqli_num_rows($checkLastChapter) > 0) {
            //Show notification
            $this->view("adminpage", [
                "Page" => "Addchapter",
                "MangaID"=>$mangaID,
                "chapterNumber_error" => "Sorry... Chapter number already taken",
                "NumberOfNewChapter"=>$this->chapterModel->getLastChapter($mangaID)
            ]);
        } else {
            $result=$this->chapterModel->addchapter($chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter);
            if($result=="true"){
                $_SESSION["notification_AddChapter"]="success";
                header("location:http://localhost:8080/Oni_chan/admin/GetChapter/$mangaID");
            }
            else{
                $_SESSION["notification_AddChapter"]="fail";
                header("location:http://localhost:8080/Oni_chan/admin/GetChapter/$mangaID");
            }
        }   
    }
    function editchapter($chapterID)
    {
        if(!isset($chapterID)){
            header("location:./getmanga");
        }
        $this->view("adminpage", [
            "Page" => "Editchapter",
            "chapter"=>$this->chapterModel->getChapterByChapterID($chapterID)
        ]);
    }
    function editChapterProcess(){
        if(isset($_POST["bntEditChapter"])){
            $chapterID=$_POST["chapterid"];
            $chapterName=$_POST["chaptername"];
            $mangaID=$_POST["bookid"];
            $content=$_POST["content"];
            $view=$_POST["view"];
            $lastUpdate=$_POST["lastUpdate"];
            $lastChapter=$_POST["lastChapter"];
        }
        $result=$this->chapterModel->editchapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter);
        if($result=="true"){
            $_SESSION["notification_EditChapter"]="success";
            header("location:http://localhost:8080/Oni_chan/admin/EditChapter/$chapterID");
        }
        else{
            $_SESSION["notification_EditChapter"]="fail";
            header("location:http://localhost:8080/Oni_chan/admin/EditChapter/$chapterID");
        }
    }
    function deleteChapter($mangaID,$chapterID){
        $this->chapterModel->deleteChapter($chapterID);
        header("location:http://localhost:8080/Oni_chan/admin/GetChapter/$mangaID");
    }
    //////////////////////////admin comment///////////////////////////
    function getcomment()
    {
        $this->view("adminpage", [
            "Page" => "GetComment",
            "comment" => $this->commentModel->getComment()
        ]);
    }
    function deleteComment($commentID){
        $this->commentModel->deleteComment($commentID);
        header("location:http://localhost:8080/Oni_chan/admin/getcomment");
    }
    /////////////////////////// admin user/////////////////////////////
    function getuser()
    {
        $this->view("adminpage", [
            "Page" => "GetUser",
            "User" => $this->model("UserModel")->GetUser()
        ]);
    }
    function edituser($userID)
    {
        $this->view("adminpage", [
            "Page" => "EditUser",
            "User" => $this->userModel->getUserByUserID($userID)
        ]);
    }
    function editUserProcess()
    {
        //Get Data from Form
        if(isset($_POST["btnUpdateUser"])){
            $userID = $_POST["userID"];
            $password = $_POST["password"];
            $username = $_POST["userName"];
            $gender = $_POST["gender"];
            $avatar=$_POST["avatar"];
            $result=$this->userModel->edituser($userID,$password,$username,$avatar,$gender);
            $this->view("adminpage", [
                "Page" => "EditUser",
                "User" => $this->userModel->getUserByUserID($userID),
                "Result"=>$result
            ]);            
        }
    }

    function deleteUser($userID)
    {
        $this->userModel->DeleteUser($userID);
        header("location:../getuser");
    }
}
