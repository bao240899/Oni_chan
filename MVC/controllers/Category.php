<?php
 class Category extends Controller{
    public $mangaModel;
    public $commentModel;
    public $UserModel;
    public $chapterModel;

    function __construct()
    {
        $this->mangaModel = $this->model("MangaModel");
        $this->commentModel = $this->model("CommentModel");
        $this->UserModel = $this->model("UserModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->categoryModel = $this->model("categoryModel");

    }

    function Action(){
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->Action(),
            "Name"  => "Action"
        ]);
    }

    function Adventure(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Adventure(),
            "Name"  => "Adventure"
        ]);
    }
 }
?>