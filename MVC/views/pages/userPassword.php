<div class="container">
    <br>
    <h1 class="postname">
        <p class="text-center">CHANGE PASSWORD</p>
    </h1>
    <hr>
    <?php $fields = mysqli_fetch_array($data["user"]) ?>
    <form action="" method="POST">
        <table class="table table-hover">

            
            <tr>
                <th>enter old password:</th>
                <td><input type="password" name="passwordOld" id="passwordOld" ></td>
            </tr>
            <tr>
                <th>enter new password:</th>
                <td><input type="password" name="passwordNew" id="passwordNew"></td>
            </tr>
            <tr>
                <th>replace new password:</th>
                <td><input type="password" name="REpassword" id="REpassword"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="save" name="btnUpdate" onclick="myfunc()"></td>
            </tr>
        </table>
    </form>
    <script>
        function myfunc(){
           var oldPass= document.getElementById("passwordNew");
           var Repass= document.getElementById("REpassword");
           if(oldPass!=Repass){
               alert("RE password incorrect")
           }
        }
    </script>
</div>