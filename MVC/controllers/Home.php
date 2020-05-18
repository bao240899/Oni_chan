<?php
class Home extends Controller
{
    public $mangaModel;
    public $commentModel;
    public $UserModel;
    public $chapterModel;
    public $categoryModel;

    function __construct()
    {
        if(!isset($_SESSION["userID"])){
            $_SESSION["userID"] = "somebody";
        }
        $this->mangaModel = $this->model("MangaModel");
        $this->commentModel = $this->model("CommentModel");
        $this->UserModel = $this->model("UserModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->categoryModel = $this->model("categoryModel");
    }
    function Master()
    {
        $this->view("master", [
            "Page" => "Home",
            "Manga" => $this->mangaModel->ToplistHome(),
            "toplist"=>$this->mangaModel->Toplist()
        ]);
    }
    function ContactUs()
    {
        $this->view("master", [
            "Page" => "Contact"
        ]);
    }

    public function Search(){
        if( isset($_POST["btnSearch"])){
            $keyword = $_POST["search"];
        }
        
        $this->view("Categorymanga",[
            "Page"=>"Search-page",
            "Manga"=>$this->mangaModel->SearchManga($keyword),
        ]);
    }
}
