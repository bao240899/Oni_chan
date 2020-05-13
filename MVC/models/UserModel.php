<?php
class UserModel extends DB{
    public function GetUser(){
        $query = "SELECT * from user";
        return mysqli_query($this->con, $query);
    }

    public function AddUser($name, $email, $pwd,$gender){
        $query = "INSERT INTO user VALUES ('$email','$pwd','$name','','$gender')";
        $result = false;
        if(mysqli_query($this->con, $query)){
            $result = true;
        }
        return json_encode($result);
    }

    public function getUserByUserID($userID){
        $query = "SELECT * FROM user WHERE userID = '$userID' ";
        return mysqli_query($this->con, $query);
    }
    public function edituser($userID,$password,$userName,$avatar,$gender){
        $query = "UPDATE `user` SET `password`='$password',`userName`='$userName',`avatar`='$avatar',`gender`='$gender' WHERE `userID`='$userID'";
        $result = false;
        if(mysqli_query($this->con, $query)){
            $result = true;
        }
        return json_encode($result);
    }
    public function DeleteUser($userID){
        $query = "DELETE FROM user WHERE userID = '$userID' ";
        return mysqli_query($this->con, $query);

    }

    public function checkUser($email,$password){
        $query = "SELECT * FROM user WHERE userID='$email'AND password='$password' ";
    
        return mysqli_query($this->con, $query);
    }

    public function follow($userID){
        $query = " SELECT * 
                    FROM manga 
                    INNER JOIN folow 
                    WHERE manga.mangaID = folow.mangaID 
                    AND folow.userID = '$userID'";
        return mysqli_query($this->con, $query);
    }
}
?>