<?php
class MangaModel extends DB{
    public function GetManga(){
        $qr = "SELECT * FROM manga";
        return mysqli_query($this->con, $qr);
    }
    public function addManga($mangaID,$mangaName,$Author,$Artists,$CategoryID,$Description,$Cover){
        $qr = "INSERT INTO `manga`(`mangaID`, `mangaName`, `author`, `artsits`, `categoryID`, `description`, `view`, `rate`, `coverImage`) VALUES ('$mangaID','$mangaName','$Author','$Artists','$CategoryID',',$Description',0,0,'$Cover')";
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }
    public function ShowManga($mangaID){
        $qr = "SELECT * FROM manga WHERE mangaID = '$mangaID'";
        return mysqli_query($this->con, $qr);
    }

    public function editManga($mangaID,$mangaName,$Author,$Artists,$CategoryID,$Description,$Cover){
        $qr = "UPDATE `manga` SET `mangaID`='$mangaID',`mangaName`='$mangaName',`author`='$Author',`artsits`='$Artists',`categoryID`='$CategoryID',`description`='$Description',`view`=0,`rate`=0,`coverImage`='$Cover' WHERE `manga`.`mangaID`='$mangaID'" ;
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }

    public function DeleteManga($mangaID){
        $qr = "DELETE FROM manga WHERE mangaID = '$mangaID'";
        $result= false;
        if(mysqli_query($this->con, $qr)){
            $result= true;
        }
        return json_encode($result);
    }
}
?>