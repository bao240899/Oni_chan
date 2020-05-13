<?php $fields=mysqli_fetch_array($data["chapter"])?>
<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 600px;">
        <h4 class="card-title mt-3 text-center">Edit Chapter</h4>
        <hr>
        <form method="POST" action="../EditChapterProcess">
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
            <input name="chaptername" class="form-control"  type="text"value="<?=$fields["chapterName"]?>">
          </div> <!-- form-group// -->
          
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

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> View :  </span>
            </div>
            <input name="view" class="form-control" type="text" value="<?=$fields["view"]?>">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Last Update :  </span>
            </div>
            <input name="lastUpdate" class="form-control" type="text" value="<?=$fields["lastUpdate"]?>">
          </div> <!-- form-group// -->

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Last Chapter :  </span>
            </div>
            <input name="lastChapter" class="form-control" type="text" value="<?=$fields["lastChapter"]?>">
          </div> <!-- form-group// -->

          <div class="form-group">
            <button name="bntEditChapter" type="submit" class="btn btn-success btn-block"> save </button>
			<button type="reset" class="btn btn-secondary btn-block "> Reset</button>
          </div> <!-- form-group// -->

        </form>
      </article>
    </div>
</div>