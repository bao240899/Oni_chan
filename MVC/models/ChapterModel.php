<?php
class ChapterModel extends DB{
    public function GetChapterByID($mangaID,$chapterID){
        $qr = "SELECT * FROM chapter where mangaID= '$mangaID' and chapterID= '$chapterID' ";
        $rs= mysqli_query($this->con, $qr);
        $fields=mysqli_fetch_array($rs);
        $text=$fields["content"];
        $arr =explode("http",$text);
        return $arr;
    }
    public function getChapterByMangaID($mangaID){
        $qr = "SELECT * FROM chapter where mangaID= '$mangaID'";
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
    public function addChapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter){
        $qr = " INSERT INTO `chapter`(`chapterID`, `chapterName`, `mangaID`, `content`, `view`, `lastUpdate`, `lastChapter`) VALUES ('$chapterID','$chapterName','$mangaID','$content','$view','$lastUpdate','$lastChapter')";
        return mysqli_query($this->con, $qr);
    }
    public function editChapter($chapterID,$chapterName,$mangaID,$content,$view,$lastUpdate,$lastChapter){
        $qr = " UPDATE `chapter` SET `chapterName`='$chapterName',`mangaID`='$mangaID',`content`='$content',`view`='$view',`lastUpdate`='$lastUpdate',`lastChapter`='$lastChapter' WHERE `chapterID`='$chapterID'";
        return mysqli_query($this->con, $qr);
    }
    public function deleteChapter($chapterID){
        $qr = " DELETE FROM `chapter` WHERE `chapterID`='$chapterID'";
        return mysqli_query($this->con, $qr);
    }
}
?>