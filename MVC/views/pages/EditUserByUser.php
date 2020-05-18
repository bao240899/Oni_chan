<div class="container">
    <br>
    <h1 class="postname">
        <p class="text-center">EDIT INFORMATION</p>
    </h1>
    <hr>
    <?php $fields = mysqli_fetch_array($data["user"]) ?>
    <form action="http://localhost:8080/Oni_chan/user/editUser" method="POST">
        <table class="table table-hover">

            <tr>
                <th>user ID(*):</th>
                <td><input type="text" name="userID" value="<?= $fields["userID"] ?>" readonly></td>
            </tr>
            <tr hidden>
                <th>password:</th>
                <td><input type="text" name="password" value="<?= $fields["password"] ?>"></td>
            </tr>
            <tr>
                <th>user Name:</th>
                <td><input type="text" name="UserName" value="<?= $fields["userName"] ?>"></td>
            </tr>
            <tr>
                <th>user Avatar:</th>
                <td><input type="text" name="avatar" value="<?= $fields["avatar"] ?>"></td>
            </tr>
            <tr>
                <th>user Gender:</th>
                <td><select name="gender" id="gender">
                    <?php if($fields["gender"]==0){?>
                        <option value="0"selected>Male</option>
                        <option value="1">Female</option>
                    <?php }else{?>
                        <option value="1"selected>Female</option>
                        <option value="0">Male</option>
                    <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="save" name="btnUpdate"></td>
            </tr>


        </table>
    </form>
</div>