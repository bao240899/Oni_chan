<div class="container">
    <br>
    <h1 class="postname">
        <p class="text-center">EDIT INFORMATION</p>
    </h1>
    <hr>
<article class="card-body mx-auto" style="max-width: 70%;">
    <?php $fields = mysqli_fetch_array($data["user"]) ?>
    <form action="http://localhost:8080/Oni_chan/user/editUser" method="POST">
            <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="userID" class="form-control" placeholder="Email address" 
            type="email" value="<?= $fields["userID"] ?>" readonly>
          </div> <!-- form-group// -->          
            <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="UserName" class="form-control" placeholder="Full name" type="text" value="<?= $fields["userName"] ?>">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
            </div>
          <select name="gender" class="custom-select">
          <?php if($fields["gender"]==0){?>
              <option value="0" selected >Male</option>
              <option value="1">Female</option>
          <?php }else{?>
              <option value="0" >Male</option>
              <option value="1" selected>Female</option>
          <?php }?>
            </select>
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fas fa-user-circle"></i> </span>
            </div>
            <input name="avatar" class="form-control" placeholder="Avatar" type="text" value="<?= $fields["avatar"] ?>">
          </div> <!-- form-group// -->
          <div class="form-group">
            <button type="submit" name="btnUpdate" class="btn btn-secondary btn-block"> Save </button>
          </div> <!-- form-group// -->
    </form>
</article>
</div>
<?php if(isset($_SESSION["notification_EditUser"])&&$_SESSION["notification_EditUser"]=="success"){?>
  <script>
    alert("edit success");
    <?php $_SESSION["notification_EditUser"]="off"?>
  </script>
<?php }else if(isset($_SESSION["notification_EditUser"])&&$_SESSION["notification_EditUser"]=="fail"){?>
  <script>
    alert("edit fail");
    <?php $_SESSION["notification_EditUser"]="off"?>
  </script>
<?php }?>