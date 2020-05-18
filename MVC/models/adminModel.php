<?php
class adminModel extends DB{
    public function checkLoginAdmin($adminID,$password){
        $qr = "SELECT * FROM admin where admin= '$adminID' and password= '$password' ";
        
        return mysqli_query($this->con,$qr);
    }
    
}
?>