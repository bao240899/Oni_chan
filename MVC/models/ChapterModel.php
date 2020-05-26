<?php
class chapterModel extends DB{
    public function GetChapterByID($mangaID,$chapterID){
        $qr = "SELECT * FROM chapter where mangaID= '$mangaID' and chapterID= '$chapterID' ";
        $rs= mysqli_query($this->con, $qr);
        $fields=mysqli_fetch_array($rs);
        $text=$fields["content"];
        $arr =explode("http",$text);
        return $arr;
    }
    public function CheckChapterByID($mangaID,$chapterID){
        $qr = "SELECT * FROM chapter where mangaID= '$mangaID' and chapterID= '$chapterID' ";
        return mysqli_query($this->con, $qr);
    }
    public function getChapterByMangaID($mangaID){
        $qr = "SELECT * 
        FROM chapter 
        INNER JOIN manga 
        WHERE chapter.mangaID = manga.mangaID AND manga.mangaID='$mangaID'  
        ORDER BY `chapter`.`lastChapter` ASC";
        return mysqli_query($this->con, $qr);
    }
    public function getChapterByChapterID($chapterID){
        $qr = "SELECT * FROM chapter where chapterID= '$chapterID'";
        return mysqli_query($this->con, $qr);
    }
    public function getFirstChapter($mangaID){
        $qr = "SELECT * FROM chapter WHERE mangaID='$mangaID' ORDER BY lastChapter ASC LIMIT 1";
        return mysqli_query($this->con, $qr);
    }
    public function getLastChapter($mangaID){
        $qr = "SELECT * FROM chapter WHERE mangaID='$mangaID' ORDER BY lastChapter DESC LIMIT 1";
        return mysqli_query($this->con, $qr);
    }
    public function addChapter($chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter){
        $qr = " INSERT INTO `chapter`( `chapterName`, `mangaID`, `content`, `view`, `lastUpdate`, `lastChapter`) VALUES ('$chapterName','$mangaID','$content','$view','$lastUpdate','$lastChapter')";
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }
    public function checkChapterName($mangaID,$chapterName){
        $query = "SELECT chapterName FROM chapter WHERE mangaid='$mangaID' AND chapterName = '$chapterName' ";
        return mysqli_query($this->con,$query);
    }
    public function editChapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter){
        $qr = " UPDATE `chapter` SET `chapterName`='$chapterName',`mangaID`='$mangaID',`content`='$content',`view`='$view',`lastUpdate`='$lastUpdate',`lastChapter`='$lastChapter' WHERE `chapterID`='$chapterID'";
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }
    public function deleteChapter($chapterID){
        $qr = " DELETE FROM `chapter` WHERE `chapterID`='$chapterID'";
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }
}
?>