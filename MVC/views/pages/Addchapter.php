<?php $field=mysqli_fetch_array($data["NumberOfNewChapter"])?>
<div class="container">
    <div class="card bg-light">
    <h4 class="title-of-product mt-3 text-center">Add Chapter</h4><hr>
      <article class="card-body mx-auto" style="max-width: 600px;">

        <form method="POST" action="http://localhost:8080/Oni_chan/admin/addChapterProcess">

            <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Chapter's Name : </span>
            </div>
            <input name="chaptername" class="form-control"  type="text" required>
          </div> <!-- form-group// -->
          <?php if (isset($data["chaptername_error"])): ?>
              <span class="text-danger text-center"><?php echo $data["chaptername_error"]; ?></span><br>
          <?php endif ?>
          <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> Manga's ID : </span>
            </div>
            <input name="bookid" class="form-control" type="text" value="<?=$data["MangaID"]?>" readonly>
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Content : </span>
            </div>
            <div class="custom-file">
			<input name="content" class="form-control" type="text" id="content">
			
		  </div>
          </div> <!-- form-group// -->

          <div class="form-group input-group" hidden>
            <div class="input-group-prepend">
              <span class="input-group-text"> View :  </span>
            </div>
            <input name="view" class="form-control" type="text">
          </div> <!-- form-group// -->

          <div class="form-group input-group" hidden>
            <div class="input-group-prepend">
              <span class="input-group-text"> Last Update :  </span>
            </div>
            <input name="lastUpdate" class="form-control" type="text" value="<?= date('Y-m-d H:i:s') ?>">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Chapter's number :  </span>
            </div>
            <input name="lastChapter" class="form-control" type="number" value="<?=$field["lastChapter"]+1?>" required>
          </div> <!-- form-group// -->
          <?php if (isset($data["chapterNumber_error"])): ?>
              <span class="text-danger text-center"><?php echo $data["chapterNumber_error"]; ?></span><br>
          <?php endif ?>
          <div class="form-group">
            <button name="bntAddChapter" type="submit" class="btn btn-success btn-block"> Add Chapter </button>
			<button type="reset" class="btn btn-secondary btn-block "> Reset</button>
          </div> <!-- form-group// -->

        </form>
      </article>
    </div>
</div>