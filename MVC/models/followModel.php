<?php
class followModel extends DB{
    function addFollow($userID,$mangaID){
        $query="INSERT INTO `folow`(`userID`, `mangaID`) VALUES ('$userID','$mangaID')";
        return mysqli_query($this->con,$query);
    }
    function unFollow($userID,$mangaID){
        $query="DELETE FROM `folow` WHERE userID='$userID' AND mangaID='$mangaID'";
        return mysqli_query($this->con,$query);
    }
    function checkFollow($userID,$mangaID){
        $query="SELECT * FROM folow WHERE userID='$userID' AND mangaID='$mangaID'";
        return mysqli_query($this->con,$query);
    }
}
?>