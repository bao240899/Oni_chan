<?php
class commentModel extends DB{
    public function getAllCommentbyManga($mangaID){
        $qr = "SELECT * from comment where mangaID='$mangaID'";
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