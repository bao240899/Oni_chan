<?php
class commentModel extends DB{
    public function getAllCommentbyManga($mangaID){
        $qr = "SELECT * 
        FROM user 
        INNER JOIN comment 
        WHERE user.userID = comment.userID 
        AND comment.mangaID = '$mangaID'";
        return mysqli_query($this->con, $qr);
    }
    public function getCommentByUserID($userID){
        $qr = "SELECT * 
        FROM comment 
        INNER JOIN manga
        WHERE comment.userID = '$userID' 
        AND comment.mangaID = manga.mangaID";
        return mysqli_query($this->con, $qr);
    }
    public function getComment(){
        $qr = "SELECT * from comment";
        return mysqli_query($this->con, $qr);
    }
    public function addComment($userID,$mangaID,$content,$date){
        $qr = "INSERT INTO `comment`(`userID`, `mangaID`, `content`, `date`) VALUES ('$userID','$mangaID','$content','$date')";
        return mysqli_query($this->con, $qr);
    }
    public function deleteComment($commentID){
        $qr = "DELETE FROM `comment` WHERE commentID ='$commentID'";
        return mysqli_query($this->con, $qr);
    }
}
?>