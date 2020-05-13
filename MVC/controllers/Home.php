<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{
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

    }
    function Master(){
        // Call Models
        $manga = $this->model("MangaModel");
        //Call Views
        $this->view("master",[
            "Page"=>"Home",
            "Manga"=>$manga->GetManga()
        ]);
    }

    function ContactUs(){
        //Call Views
        $this->view("master",[
            "Page"=>"Contact"
        ]);
    }

    function DetailManga($mangaID){
        $this->view("master",[
            "Page"=>"DetailManga",
            "Manga"=> $this->mangaModel->ShowManga($mangaID),
            "comment"=>$this->commentModel->getAllCommentByManga($mangaID),
            "mangaID"=>$mangaID,
            "chapter"=>$this->chapterModel->getChapterByMangaID($mangaID),
            "firstChapter"=>$this->chapterModel->getFirstChapter($mangaID),
            "lastChapter"=>$this->chapterModel->getLastChapter($mangaID)
        ]);
    }
    function commentProcess(){
        if(isset($_POST["btnAddComment"])){
            $userID=$_POST["userID"];
            $mangaID=$_POST["mangaID"];
            $content=$_POST["content"];
            $date=$_POST["date"];
        }
        $this->commentModel->addComment($userID,$mangaID,$content,$date);
        header("location:./detailmanga/$mangaID");
    }
    function ReadManga($a,$b){
        //Call Models
        $manga = $this->model("ChapterModel");
        $manga->GetChapterByID($a,$b);
        //Call Views
        $this->view("readmanga",[
            "Page"=>"ReadChapter",
            "Manga"=> $manga->GetChapterByID($a,$b)
        ]);
    }

   function Follow($userID){
    $this->view("master",[
        "Page"=>"Follow",
        "Manga"=> $this->UserModel->follow($userID)
    ]);
   }
}
?>