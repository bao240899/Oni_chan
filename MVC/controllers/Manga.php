<?php
class Manga extends controller
{
    public $mangaModel;
    public $chapterModel;
    public $commentModel;
    function __construct()
    {
        $this->commentModel = $this->model("commentModel");
        $this->mangaModel = $this->model("MangaModel");
        $this->chapterModel = $this->model("ChapterModel");
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
    static function readChapter($mangaID, $chapterID)
    {
        $this->view("master", [
            "Page" => "ReadChapter",
            "chapter" => $this->chapterModel->GetChapterByID($mangaID, $chapterID)
        ]); //view("aodep",["key"=>value])        
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
}
