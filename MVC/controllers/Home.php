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
        $item_per_page=!empty($_GET["per_page"])?$_GET["per_page"]:8;
        $current_page=!empty($_GET["page"])?$_GET["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->mangaModel->GetManga());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("master", [
            "Page" => "Home",
            "Manga" => $this->mangaModel->ToplistHome(),
            "toplist"=>$this->mangaModel->Toplist(),
            "MangaPage" => $this->mangaModel->getMangaToPage($item_per_page,$offset),
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
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
