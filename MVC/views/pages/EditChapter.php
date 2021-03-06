<?php $fields=mysqli_fetch_array($data["chapter"])?>
<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 600px;">
        <h4 class="card-title mt-3 text-center">Edit Chapter</h4>
        <hr>
        <form method="POST" action="http://localhost:8080/Oni_chan/admin/EditChapterProcess">
          <div class="form-group input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text"> Chapter's ID : </span>
            </div>
            <input name="chapterid" class="form-control" type="text" value="<?=$fields["chapterID"]?>" readonly>
            </div> <!-- form-group// -->

            <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Chapter's Name : </span>
            </div>
            <input name="chaptername" class="form-control"  type="text"value="<?=$fields["chapterName"]?>" required>
          </div> <!-- form-group// -->
          <?php if (isset($data["chaptername_error"])): ?>
              <span class="text-danger text-center"><?php echo $data["chaptername_error"]; ?></span><br>
          <?php endif ?>
          <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> Manga's ID : </span>
            </div>
            <input name="bookid" class="form-control" type="text" value="<?=$fields["mangaID"]?>" readonly>
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Content : </span>
            </div>
            <div class="custom-file">
			<input name="content" class="form-control" type="text" id="content" value="<?=$fields["content"]?>">
			
		  </div>
          </div> <!-- form-group// -->

          <div class="form-group input-group" hidden>
            <div class="input-group-prepend">
              <span class="input-group-text"> View :  </span>
            </div>
            <input name="view" class="form-control" type="text" value="<?=$fields["view"]?>">
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
            <input name="lastChapter" class="form-control" type="number" value="<?=$fields["lastChapter"]?>" required>
          </div> <!-- form-group// -->
          <?php if (isset($data["chapterNumber_error"])): ?>
              <span class="text-danger text-center"><?php echo $data["chapterNumber_error"]; ?></span><br>
          <?php endif ?>
          <div class="form-group">
            <button name="bntEditChapter" type="submit" class="btn btn-success btn-block"> Save </button>
			<button type="reset" class="btn btn-secondary btn-block "> Reset</button>
          </div> <!-- form-group// -->

        </form>
      </article>
    </div>
</div>
<?php if (isset($_SESSION["notification_EditChapter"]) && $_SESSION["notification_EditChapter"] == "success") { ?>
  <script>
    alert("Edit chapter success");
    <?php $_SESSION["notification_EditChapter"] = "off" ?>
  </script>
<?php } else if (isset($_SESSION["notification_EditChapter"]) && $_SESSION["notification_EditChapter"] == "fail") { ?>
  <script>
    alert("Edit chapter fail");
    <?php $_SESSION["notification_EditChapter"] = "off" ?>
  </script>
<?php } ?>
