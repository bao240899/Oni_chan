<div class="container">
    <br>
    <h2 class="postname">
        <p>GENERAL INFORMATION</p>
    </h2>
    <hr>
    <div class="account-info clearfix">
        <h3 class="posttitle">Account Information</h3>
        <hr>
        <div class="infor-detail border p-3">
            <?php
            $info = mysqli_fetch_assoc($data["Info"]);
            ?>
            <div class="group">
                <div class="label">User Name: </div>
                <div class="detail"><?= $info["userName"] ?></div>
            </div>
            <div class="group">
                <div class="label">Email: </div>
                <div class="detail"><?= $info["userID"] ?></div>
            </div>
        </div><br>
        <h3 class="posttitle">Following</h3>
        <hr>
        <div class="manga-follower">
            <?php
            while ($row = mysqli_fetch_assoc($data["Manga"])) {
            ?>
                <div class="col-md-2 pb-1 pb-md-0">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="<?= $row["coverImage"] ?>" alt="image">
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>