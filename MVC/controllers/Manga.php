<?php
class Manga extends controller
{
    public $mangaModel;
    public $chapterModel;
    public $commentModel;
    public $followModel;
    function __construct()
    {
        if(!isset($_SESSION["userID"])){
            $_SESSION["userID"] = "somebody";
        }
        $this->commentModel = $this->model("commentModel");
        $this->mangaModel = $this->model("MangaModel");
        $this->chapterModel = $this->model("ChapterModel");
        $this->followModel = $this->model("followModel");
    }
    function DetailManga($mangaID){
        $check = $this->mangaModel->ShowManga($mangaID);
        if( mysqli_num_rows($check) > 0){
            $this->view("master",[
                "Page"=>"DetailManga",
                "Manga"=> $this->mangaModel->ShowManga($mangaID),
                "comment"=>$this->commentModel->getAllCommentByManga($mangaID),
                "mangaID"=>$mangaID,
                "chapter"=>$this->chapterModel->getChapterByMangaID($mangaID),
                "firstChapter"=>$this->chapterModel->getFirstChapter($mangaID),
                "lastChapter"=>$this->chapterModel->getLastChapter($mangaID),
                "checkFollow"=>$this->followModel->checkFollow($_SESSION["userID"],$mangaID),
                "toplist"=>$this->mangaModel->Toplist()
            ]);

        } else {
            $this->view("master",[
                "Page"=>"404"
            ]);
        }

    }
    static function readChapter($mangaID, $chapterID)
    {
        $check = $this->chapterModel->CheckChapterByID($mangaID,$chapterID);
        if( mysqli_num_rows($check) > 0){
        $this->view("readmanga", [
            "Page" => "ReadChapter",
            "AllChapter"=>$this->chapterModel->getChapterByMangaID($mangaID),
            "manga"=>$this->mangaModel->ShowManga($mangaID),
            "chapter"=>$this->chapterModel->getChapterByChapterID($chapterID),
            "checkFollow"=>$this->followModel->checkFollow($_SESSION["userID"],$mangaID),
            "chapterImg" => $this->chapterModel->GetChapterByID($mangaID, $chapterID)
        ]); //view("aodep",["key"=>value])    
        } else {
            $this->view("readmanga",[
                "Page"=>"404"
            ]);
        }    
    }
    function choiceChapter(){
        if(isset($_POST["btnChoice"])){
            $mangaID=$_POST["manga"];
            $chapterID=$_POST["chapter"];
            header("location:http://localhost:8080/Oni_chan/manga/readchapter/$mangaID/$chapterID");
        }
    }
    function commentProcess(){
        if($_SESSION["userID"]=="somebody"||!isset($_SESSION["userID"])){
            header("location:http://localhost:8080/Oni_chan/user/login");
        }
        if(isset($_POST["btnAddComment"])){
            $userID=$_POST["userID"];
            $mangaID=$_POST["mangaID"];
            $content=$_POST["content"];
            $date=$_POST["date"];
        }
        $this->commentModel->addComment($userID,$mangaID,$content,$date);
        header("location:./detailmanga/$mangaID");
    }
}
