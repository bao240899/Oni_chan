<div class="container">
    <div name="title-information-page"><a href="../Home/Index" title="home">Home</a> /
        <a href="#" title="Category">Category</a> /
        <a href="../Category/Action" title="Contact-us"><?= $data["Name"] ?></a>
    </div>
    <hr>
    <h2 class="text-center"><?= $data["Name"] ?> Manga</h2>
    <hr>
    <div class="row text-center">
        <?php
        while ($row = mysqli_fetch_assoc($data["Manga"])) {
        ?>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="http://localhost:8080/Oni_chan/manga/detailmanga/<?= $row["mangaID"] ?>" class="text-decoration-none">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row["coverImage"] ?>" alt="image" style="width:160px;height:230px">
                    </div>
                    <span class="card-title"><?= $row["mangaName"] ?></span>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="clear-both"></div>
    <div><?php
            require "./mvc/views/pages/pagination.php";
            ?>
    </div>
</div>