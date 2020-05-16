<link href="dist/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
<div class="container">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 600px;">
        <h4 class="card-title mt-3 text-center">Add Manga/Novel</h4>
        <hr>
        <form method="POST" action="http://localhost:8080/Oni_chan/admin/addMangaProcess">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Book's Name : </span>
            </div>
            <input name="bookname" class="form-control"  type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Author : </span>
            </div>
            <input name="author" class="form-control" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Artists : </span>
            </div>
            <input name="cover" class="form-control" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Category :  </span>
            </div>
            <input name="category" class="form-control" type="text">
          </div> <!-- form-group// -->
           <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Description :  </span>
            </div>
            <textarea name="description" class="form-control" rows="5" id="description"></textarea>
          </div> <!-- form-group// -->
		   <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Cover : </span>
            </div>
            <input name="cover" class="form-control" type="text">
          </div> <!-- form-group// -->
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="bntAddManga"> Add Book </button>
			<button type="reset" class="btn btn-secondary btn-block "> Reset</button>
          </div> <!-- form-group// -->
        </form>
      </article>
    </div>
  </div>