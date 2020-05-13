<?php
class ReadManga extends controller
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
    
    static function readChapter($mangaID, $chapterID)
    {
        $this->view("master", [
            "Page" => "ReadChapter",
            "chapter" => $this->chapterModel->GetChapterByID($mangaID, $chapterID)
        ]); //view("aodep",["key"=>value])        
    }
    static function chapter($mangaID, $chapterID)
    {
        $bao = $this->model("mangaModel");
        $id = $mangaID;
        $id2 = $chapterID;
        $this->view("aodep", [
            "page" => "news",

            "mau" => "blue",
            "SV" => $bao->Chapter($id, $id2)
        ]); //view("aodep",["key"=>value])        
    }
    static function romance()
    {
        $bao = $this->model("mangaModel");

        $this->view("aodep", [
            "page" => "news",

            "mau" => "blue",
            "SV" => $bao->romance()
        ]); //view("aodep",["key"=>value])        
    }
}
