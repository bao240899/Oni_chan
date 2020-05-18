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

    function Allcategory(){
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->Allcategory(),
            "Name"  => ""
        ]);
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

    function Adult(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Adult(),
            "Name"  => "Adult"
        ]);
    }

    function Comedy(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Comedy(),
            "Name"  => "Comedy"
        ]);
    }

    function Drama(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Drama(),
            "Name"  => "Drama"
        ]);
    }

    function Ecchi(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Ecchi(),
            "Name"  => "Ecchi"
        ]);
    }

    function Horrow(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Horrow(),
            "Name"  => "Horrow"
        ]);
    }

    function Sci_fi(){
        $this->view("Categorymanga",[
            "Page"=>"MangaCategory",
            "Manga"=>$this->categoryModel->Sci_fi(),
            "Name"  => "Sci-fi"
        ]);
    }

 }
?>