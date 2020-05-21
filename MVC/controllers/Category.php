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
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Allcategory());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->getMangaToPageCategory($item_per_page,$offset),
            "Name"  => "",
            "linkPagination"=>"Category/Allcategory",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Action(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Action());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->ActionToPageCategory($item_per_page,$offset),
            "Name"  => "Action",
            "linkPagination"=>"Category/action",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function adventure(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->adventure());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->adventureToPageCategory($item_per_page,$offset),
            "Name"  => "adventure",
            "linkPagination"=>"Category/adventure",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Adult(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Adult());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->AdultToPageCategory($item_per_page,$offset),
            "Name"  => "Adult",
            "linkPagination"=>"Category/Adult",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Comedy(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Comedy());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->ComedyToPageCategory($item_per_page,$offset),
            "Name"  => "Comedy",
            "linkPagination"=>"Category/Comedy",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Drama(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Drama());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->DramaToPageCategory($item_per_page,$offset),
            "Name"  => "Drama",
            "linkPagination"=>"Category/Drama",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Ecchi(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Ecchi());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->EcchiToPageCategory($item_per_page,$offset),
            "Name"  => "Ecchi",
            "linkPagination"=>"Category/Ecchi",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Horrow(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Horrow());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->HorrowToPageCategory($item_per_page,$offset),
            "Name"  => "Horrow",
            "linkPagination"=>"Category/Horrow",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

    function Sci_fi(){
        $item_per_page=!empty($_POST["per_page"])?$_POST["per_page"]:12;
        $current_page=!empty($_POST["page"])?$_POST["page"]:1;
        $offset=($current_page-1)*$item_per_page;
        $totalManga=mysqli_num_rows($this->categoryModel->Sci_fi());
        $totalPage=ceil($totalManga/$item_per_page);
        $this->view("Categorymanga",[
            "Page"  =>"MangaCategory",
            "Manga" =>$this->categoryModel->Sci_fiToPageCategory($item_per_page,$offset),
            "Name"  => "Sci_fi",
            "linkPagination"=>"Category/Sci_fi",
            "totalPage"=>$totalPage,
            "item_per_page"=>$item_per_page,
            "current_page"=>$current_page
        ]);
    }

 }
?>