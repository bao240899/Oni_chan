<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">SIGN IN</h4>
        <form method="POST" action="http://localhost:8080/Oni_chan/user/loginProcess">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" class="form-control" placeholder="Email address" type="email">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password" class="form-control" placeholder="Password" type="password">
          </div> <!-- form-group// -->
	      <div>
	        <p><span style="float: left">
            <input type="checkbox" name="remember">
	        <span style="font-size: 13px">Remember Me</span></span>
	        <a href="#" style="font-size: 12px;color: black;text-decoration: underline;float: right">FORGOT PASSWORD?</a></p>
          </div>
	      <p><br>
	      </p>
	      <div class="form-group">
            <button name="btnSignIn" type="submit" class="btn btn-secondary btn-block"> SIGN IN </button>
          </div> <!-- form-group// -->
		</form>
		<hr>
		<p class="text-center">Don't have account ?
		<a href="http://localhost:8080/Oni_chan/User/Register" style="font-size: 14px;color: black;text-decoration: underline"> SIGN UP.</a></p>
      </article>
    </div>
  </div>