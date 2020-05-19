<?php $fields = mysqli_fetch_array($data["User"]); ?>
<div class="container">
         <article class="card-body mx-auto" style="max-width: 600px;">
         <h2>Modify User</h2><hr>
         <form method="POST" action="http://localhost:8080/Oni_chan/admin/editUserProcess" >
             <div class="form-group">
                <label>ID: </label>
                <input type="text" class="form-control"  
                       name="userID" value="<?php echo $fields[0]?>" readonly>
             </div>
             <div class="form-group">
                <label>Password: </label>
                <input type="text" class="form-control"  
                       name="password" value="<?php echo $fields[1]?>">
             </div>
             <div class="form-group">
                <label>User Name: </label>
                <input type="text" class="form-control"  
                       name="userName" value="<?php echo $fields[2]?>" >
             </div>
             <div class="form-group">
                <label for="name">User Avatar: </label>
                <input type="text" class="form-control"  
                       name="avatar" value="<?php echo $fields[3]?>" >
             </div>
             <div class="form-group">
                <label for="name">Gender: </label>
                <select name="gender" class="custom-select">
                  <?php if($fields["gender"]==0){?>
                      <option value="0" selected >Male</option>
                      <option value="1">Female</option>
                  <?php }else{?>
                      <option value="0" >Male</option>
                      <option value="1" selected>Female</option>
                  <?php }?>
              </select>
             </div>
             <button type="submit" class="btn btn-secondary btn-primary btn-block" 
                     name="btnUpdateUser" value="Save" onclick="return confirm ('Modify Customer ???')">Submit</button>
        </form>
        </article>
        <h3 class="text-center text-success">
        <?php
          if(isset($data["Result"])){
        ?>
        <?php
          if($data["Result"] == True){
            echo "Modify Success";
          } else {
            echo "Modify Fail";
          }
        ?>
        <?php
          }
        ?>
        </h3>
         <br>
</div>