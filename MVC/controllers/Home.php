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
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:8;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->mangaModel->GetManga());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("master", [
            "Page" => "Home",
            "Manga" => $this->mangaModel->ToplistHome(),
            "toplist"=>$this->mangaModel->Toplist(),
            "linkPagination"=>"Home/Master",
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

    function PrivacyPolicy(){
        $this->view("master", [
            "Page" => "Policy"
        ]);
    }

    public function Search(){
        $keyword = "";
        
        if( isset($_POST["btnSearch"])){
            $keyword = $_POST["search"];
            
        }
            $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
            $current_page=!empty($_POST["page"])?$_POST["page"]:1;
            $offset=($current_page-1)*$item_per_page;
            $totalManga=mysqli_num_rows($this->mangaModel->SearchManga($keyword));
            $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"=>"Search-page",
            "Manga"=>$this->mangaModel->SearchMangaToPage($keyword,$item_per_page,$offset),
            "linkPagination"=>"Home/Search",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    public function Error(){
        $this->view("master",[
            "Page" => "404"
        ]);
    }

}
