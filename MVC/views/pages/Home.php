<div class="container">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.upsieutoc.com/images/2020/05/04/utama-boruto-arc-min-1920x500.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
				  </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.upsieutoc.com/images/2020/05/04/shot03-1920x500.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.upsieutoc.com/images/2020/05/04/high-school-dxd-cover-1920x500.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
		</div>
<div class="container">
	<div class="row">
	  <div class="col-lg-8 col-12">
      <hr>
      <h2 class="text-center">RECOMMENDED MANGA</h2>
      <hr>
        <div class="row text-center">
        <?php 
            while ($row = mysqli_fetch_assoc($data["Manga"])){
        ?>
          <div class="col-md-3 pb-1 pb-md-0 p-3">
            <a href="manga/detailmanga/<?=$row["mangaID"]?>"><div class="card">
              <img class="card-img-top" src="<?= $row["coverImage"]?>" style="width:160px;height:230px" alt="image">
              <p class="card-title"><?= $row["mangaName"]?></p>
          </div></a>
        </div>
        <?php
              }
        ?>
    </div>
    <div class="col-lg-4">
        <br>
        <div class="col-12 card bg-light mx-auto">
          <h3 class="text-center card-header">Billboard</h3>
          <a>
          <div class="card">
            <div class="card-body">
              <p class="card-text">Some example text. Some example text.</p>
            </div>
          </div>
          </a>
        </div>
		</div>
</div>

