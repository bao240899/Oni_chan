<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 600px;">
        <h4 class="mt-3 text-center">Create Account</h4><hr>
        <p class="text-center">Get started with your free account</p>
        <p>
          <a href="#" class="btn btn-block btn-outline-secondary btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
          <a href="#" class="btn btn-block btn-outline-secondary btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
        </p>
        <p class="divider-text">
          <span class="bg-light">Or</span>
        </p>
        <form action="./processRegister" method="POST">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="username" class="form-control" placeholder="Full name" type="text" required>
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" id="email" class="form-control" placeholder="Email address" type="email" required>
            <?php if (isset($data["email_error"])): ?>
              <span class="text-danger"><?php echo $data["email_error"]; ?></span>
            <?php endif ?>
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"> <i class="fas fa-venus-mars"></i> </div>
            </div>
          <select name="gender" class="custom-select">
              <option value="0">Male</option>
              <option value="1">Female</option>
            </select>
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password" id="password" class="form-control" placeholder="Create password" type="password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="repassword" id="confirm_password" class="form-control" placeholder="Repeat password" type="password">
          </div> <!-- form-group// -->
          <div class="form-group">
            <button type="submit" name="btnRegister" class="btn btn-secondary btn-block" onclick="myfunction()"> Create Account </button>
          </div> <!-- form-group// -->
          <p class="text-center">Have an account? <a href="http://localhost:8080/Oni_chan_project/Source_Code/Users/Login" style="font-size: 14px;color: black;text-decoration: underline">SIGN IN</a> </p>
        </form>
        <p class="text-center text-success"> 
        <?php
          if(isset($data["Result"])){
        ?>
        <?php
            echo $data["Result"];
        ?>
        <?php
          }
        ?>
        </p>
      </article>
      <script>
        var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");


        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    </div>
  </div>



