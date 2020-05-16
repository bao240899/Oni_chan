<?php
class Home extends Controller
{
    public $mangaModel;
    public $commentModel;
    public $UserModel;
    public $chapterModel;

    function __construct()
    {
        if(!isset($_SESSION["userID"])){
            $_SESSION["userID"] = "somebody";
        }
        $this->mangaModel = $this->model("MangaModel");
        $this->commentModel = $this->model("CommentModel");
        $this->UserModel = $this->model("UserModel");
        $this->chapterModel = $this->model("ChapterModel");
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
}
