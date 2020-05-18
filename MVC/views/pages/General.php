<div class="container">
    <br>
    <h2 class="postname">
        <p>GENERAL INFORMATION</p>
    </h2>
    <hr>
    <div class="account-info clearfix">
        <h3 class="posttitle">Account Information</h3>
        <hr>
        <div class="infor-detail p-3 jumbotron">
            <?php
            $info = mysqli_fetch_assoc($data["Info"]);
            ?>
            <table>
                <tr>
                    <td><strong>Username:</strong> </td>
                    <td> <?= $info["userName"] ?></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong> </td>
                    <td> <?= $info["userID"] ?></td>
                </tr>
            </table>  
        </div>
        <h3 class="posttitle">Following</h3>
        <hr>
        <div class="manga-follower">
            <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($data["Manga"])) {
            ?>
                <div class="col-md-2 pb-1 pb-md-0">
                    <a href="http://localhost:8080/Oni_chan/manga/detailmanga/<?= $row["mangaID"]?>">
                        <div class="card">
                            <img class="card-img-top" src="<?= $row["coverImage"] ?>" alt="image" style="width:110px;height:173px;">
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>