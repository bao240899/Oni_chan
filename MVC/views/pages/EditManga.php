<?php $fields=mysqli_fetch_array($data["manga"])?>

<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 600px;">
        <h4 class="card-title mt-3 text-center">Edit Manga/Novel</h4>
        <hr>
        <form method="post" action="../editMangaProcess">
          <div class="form-group input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text"> Book's ID : </span>
            </div>
            <input name="bookid" class="form-control" type="text" value="<?=$fields["mangaID"]?>" readonly>
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Book's Name : </span>
            </div>
            <input name="bookname" class="form-control"  type="text"value="<?=$fields["mangaName"]?>">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Author : </span>
            </div>
            <input name="author" class="form-control" type="text"value="<?=$fields["author"]?>">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Artists : </span>
            </div>
            <input name="artists" class="form-control" type="text"value="<?=$fields["artsits"]?>">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Category :  </span>
            </div>
            <input name="category" class="form-control" type="text"value="<?=$fields["categoryID"]?>">
          </div> <!-- form-group// -->
           <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Description :  </span>
            </div>
            <textarea name="description" class="form-control" rows="5" id="description"><?php echo $fields["description"]?></textarea>
          </div> <!-- form-group// -->
		   <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Cover : </span>
            </div>
            <input name="cover" class="form-control" type="text"value="<?=$fields["coverImage"]?>">
          </div> <!-- form-group// -->
          <div class="form-group">
            <button type="submit" name="bntEditManga" class="btn btn-success btn-block"> Edit Book </button>
			<button type="reset" class="btn btn-secondary btn-block "> Reset</button>
          </div> <!-- form-group// -->
        </form>
      </article>
    </div>
  </div>