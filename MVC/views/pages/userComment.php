<div class="container">
            <br><h1 class="postname"><p class="text-center">USER COMMENT</p></h1>
            <hr>
            <table class="table table-hover">
                    <thead>
                    <tr>
                        
                        <th>Manga's Name</th>
                        <th>Time</th>
                        <th>Content</th>
                        <th><th>
                    </tr>
                    </thead>
            <?php 
                while ($row = mysqli_fetch_assoc($data["comment"])){
            ?>
                    <tr>
                        <td><img class="card-img-top" src="<?= $row["coverImage"]?>" alt="image" style="width:60px;height:95px"></td>
                        <td><?= $row["date"] ?></td>
                        <td><?= $row["content"] ?></td>
                        <td>                        
                            <a href="http://localhost:8080/Oni_chan/user/deleteComment/<?= $row["commentID"] ?>" 
                            class="btn btn-info">Delete</a>
                        </td>
                    </tr>  
            <?php
                }
            ?>
            </table>
</div>

