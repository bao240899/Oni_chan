<div class="container">
            <br><h1 class="postname"><p class="text-center">MANGA FOLLOWING</p></h1>
            <hr>
            <table class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Manga's Name</th>
                        <th>Artists</th>
                        <th>View</th>
                        <th><th>
                    </tr>
                    </thead>
            <?php 
                while ($row = mysqli_fetch_assoc($data["Manga"])){
            ?>
                    <tr>
                        <td><img class="card-img-top" src="<?= $row["coverImage"]?>" alt="image" style="width:60px;height:95px"></td>
                        <td><?= $row["mangaName"] ?></td>
                        <td><?= $row["artsits"] ?></td>
                        <td><?= $row["view"]?></td>
                        <td>                        
                            <a href="http://localhost:8080/Oni_chan/manga/detailmanga/<?= $row["mangaID"] ?>" 
                            class="btn btn-info">Read</a>
                            <a href="http://localhost:8080/Oni_chan/User/unFollowProcess/<?= $_SESSION['userID'] ?>/<?= $row['mangaID'] ?> "
                            class="btn btn-danger">Unfollow</a>
                        </td>
                    </tr>  
            <?php
                }
            ?>
            </table>
</div>

