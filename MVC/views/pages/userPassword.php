<div class="container">
    <br>
    <h1 class="postname">
        <p class="text-center">CHANGE PASSWORD</p>
    </h1>
    <hr>
    <article class="card-body mx-auto" style="max-width: 70%;">
        <?php $fields = mysqli_fetch_array($data["user"]) ?>
        <form action="../change_password_process" method="POST">
            <div class="form-group" hidden>
            <label for="email">Password</label>
            <input name="password" id="password" class="form-control" type="password" value="<?=$fields["password"]?>">
            </div> <!-- form-group// -->
            <div class="form-group">
            <label for="email">Old password</label>
            <input name="passwordOld" id="passwordOld" class="form-control" type="password" required
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div> <!-- form-group// -->
            <div class="form-group">
            <label for="email">New password</label>
            <input name="passwordNew" id="passwordNew" class="form-control" type="password"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
            </div> <!-- form-group// -->
            <div class="form-group ">
            <label for="email">Repeat new password</label>
            <input name="REpassword" id="REpassword" class="form-control" type="password"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
            </div> <!-- form-group// -->
            <div class="form-group">
            <button type="submit" name="btnUpdate" class="btn btn-secondary btn-block"> Save </button>
            </div> <!-- form-group// -->
        </form>
    </article>
    <script>
        var newpassword = document.getElementById("passwordNew")
        , confirm_password = document.getElementById("REpassword")
        , oldpassword = document.getElementById("passwordOld")
        , password = document.getElementById("password");

        function validateOldPassword(){
        if(oldpassword.value != password.value) {
            oldpassword.setCustomValidity("Old Passwords Don't Match");
        } else {
            oldpassword.setCustomValidity('');
        }
        }

        function validatePassword(){
        if(newpassword.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        oldpassword.onkeyup = validateOldPassword;
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</div>