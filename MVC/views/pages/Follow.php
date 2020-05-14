<div class="container">
            <h1 class="postname"><p class="text-center">MANGA FOLLOWING</p></h1>
            <hr>
            <?php 
                while ($row = mysqli_fetch_assoc($data["Manga"])){
            ?>
            <div class="col-md-3 pb-1 pb-md-0">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row["coverImage"]?>" alt="image">
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
</div>

