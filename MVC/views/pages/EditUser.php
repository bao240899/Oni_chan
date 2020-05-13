<?php $fields = mysqli_fetch_array($data["User"]); ?>
<div class="container">
         <h2>Modify User</h2>
         <form method="POST" action="./editUserProcess" >
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
                <input type="text" class="form-control"  
                       name="gender" 
                       value="<?php if ($fields[4] == 0){
                                    Echo "Male";
                                    } else {Echo "Female";} ?>">
             </div>
             <button type="submit" class="btn btn-secondary btn-primary btn-block" 
                     name="btnUpdateUser" value="Save" onclick="return confirm ('Modify Customer ???')">Submit</button>
        </form>
        <p class="text-center text-danger"> 
        <?php
          if(isset($data["Result"])){
        ?>
        <?php
          if($data["Result"] == True){
            echo "Sign-Up Success";
          } else {
            echo "Sign-Up Fail";
          }
        ?>
        <?php
          }
        ?>
        </p>
         <br>
</div>