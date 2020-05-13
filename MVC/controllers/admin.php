<?php
class admin extends Controller
{
    public $mangaModel;
    public $chapterModel;
    public $commentModel;
    public $userModel;
    function __construct()
    {
        $this->commentModel=$this->model("commentModel");
        $this->mangaModel = $this->model("MangaModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->userModel = $this->model("userModel");
    }
    ///////////////////////////////////
    public function index(){
        
    }

    function getmanga()
    {
        // Call Models
        $manga = $this->model("MangaModel");
        //Call Views
        $this->view("adminpage", [
            "Page" => "GetManga",
            "Manga" => $manga->GetManga()
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
        // GET Data
        if (isset($_POST["bntAddManga"])) {
            $mangaID = $_POST["bookid"];
            $mangaName = $_POST["bookname"];
            $Author = $_POST["author"];
            $Artists = $_POST["artists"];
            $CategoryID = $_POST["category"];
            $Description = $_POST["description"];
            $Cover = $_POST["cover"];
        }

        //Call Views

        $this->mangaModel->addManga($mangaID, $mangaName, $Author, $Artists, $CategoryID, $Description, $Cover);
        header("location:./getmanga");
    }
    function editmanga($mangaID)
    {
        $this->view("adminpage", [
            "Page" => "editmanga",
            "manga" => $this->mangaModel->showManga($mangaID)
        ]);
    }
    function editMangaProcess(){
        // GET Data
        if(isset($_POST["bntEditManga"])){
            $mangaID=$_POST["bookid"];
            $mangaName=$_POST["bookname"];
            $Author=$_POST["author"];
            $Artists=$_POST["artists"];
            $CategoryID=$_POST["category"];    
            $Description=$_POST["description"];
            $Cover=$_POST["cover"];
        }
        $this->mangaModel->editManga($mangaID,$mangaName,$Author,$Artists,$CategoryID,$Description,$Cover);
        header("location:./getmanga");
    }
    function deleteManga($mangaID){
        $this->mangaModel->DeleteManga($mangaID);
        header("location:../getmanga");
    }
    ////////////////////////////////////////////////////
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
            "MangaID"=>$mangaID
        ]);
    }
    function addChapterProcess(){
        if(isset($_POST["bntAddChapter"])){
            $chapterID=$_POST["chapterid"];
            $chapterName=$_POST["chaptername"];
            $mangaID=$_POST["bookid"];
            $content=$_POST["content"];
            $view=$_POST["view"];
            $lastUpdate=$_POST["lastUpdate"];
            $lastChapter=$_POST["lastChapter"];
        }
        $this->chapterModel->addchapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter);
        header("location:./GetChapter/$mangaID");
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
        $this->chapterModel->editchapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter);
        header("location:./GetChapter/$mangaID");
    }
    function deleteChapter($mangaID,$chapterID){
        $this->chapterModel->deleteChapter($chapterID);
        header("location:http://localhost:8080/Oni_chan_project/Source_Code/admin/GetChapter/$mangaID");
    }
    ///////////////////////////////////////////////////////
    function getcomment()
    {
        //Call Views
        $this->view("adminpage", [
            "Page" => "GetComment",
            "comment" => $this->commentModel->getComment()
        ]);
    }
    function deleteComment($commentID){
        $this->commentModel->deleteComment($commentID);
        header("location:http://localhost:8080/Oni_chan_project/Source_Code/admin/getcomment");
    }
    ////////////////////////////////////////////////////////
    function getuser()
    {
        // Call Models
        $this->model("UserModel")->GetUser();
        //Call Views
        $this->view("adminpage", [
            "Page" => "GetUser",
            "User" => $this->model("UserModel")->GetUser()
        ]);
    }

    

    function edituser($userID)
    {
        // Call Models
        $this->model("UserModel")->EditUser($userID);
        //Call Views
        $this->view("adminpage", [
            "Page" => "EditUser",
            "User" => $this->model("UserModel")->EditUser($userID)
        ]);
    }

    function edituserprocess()
    {
        //Get Data from Form
        if(isset($_POST["btnUpdate"])){
            $userID = $_POST["UserID"];
            $password = $_POST["Password"];
            $username = $_POST["UserName"];
            $gender = $_POST["gender"];
            //Insert Data to DB
            $result = $this->userModel->EditUserprocess($userID,$password,$username,$gender);
            //Show notification
            $this->view("admin",[
                "Page"=>"EditUser",
                "Result"=> $result
            ]);            
        }
    }

    function deleteuser($userID)
    {
        // Call Models
        $this->userModel->DeleteUser($userID);
        header("location:../getuser");
    }
}
