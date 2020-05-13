<div class="container">
	<div class="row">
	    <div class="col-lg-8 col-12">
            <div class="row text-center">
                <?php 
                while ($row = mysqli_fetch_assoc($data["Manga"])){
                ?>
                <div class="col-md-3 pb-1 pb-md-0">
                <a href="#"><div class="card">
                <img class="card-img-top" src="<?= $row["coverImage"]?>" alt="image">
			    </a></div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    <hr>
        <div class="col-lg-4 col-12">
            <br>
            <div class="col-12 card bg-light mx-auto">
              <h3 class="text-center card-header">Billboard</h3>
              <a><div class="card">
				<div class="card-body">
					<p class="card-text">Some example text. Some example text.</p>
			    </div>
			  </div></a>
            </div>
	    </div>
    </div>
</div>

