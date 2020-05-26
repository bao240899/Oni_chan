<link href="dist/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="dist/js/jquery-1.10.2.js"></script>
<div class="container">
    <div class="card bg-light">
      
        <h3 class="title-of-product mt-3 text-center">Add Manga/Novel</h3>
        <hr>
        <article class="card-body mx-auto" style="max-width: 600px;">
        <form method="POST" action="http://localhost:8080/Oni_chan/admin/addMangaProcess">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Book's Name : </span>
            </div>
            <input name="bookname" class="form-control"  type="text" required>
          </div> <!-- form-group// -->
          <?php if (isset($data["Manganame_error"])): ?>
              <span class="text-danger text-center"><?php echo $data["Manganame_error"]; ?></span><br>
          <?php endif ?>
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
            <input name="artists" class="form-control" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> Category :  </span>
            </div>
            <select name="category" class="custom-select">
              <option value="101">Action</option>
              <option value="102">Adult</option>
              <option value="103">Adventure</option>
              <option value="104">Comedy</option>
              <option value="105">Drama</option>
              <option value="106">Ecchi</option>
              <option value="107">Horrow</option>
              <option value="108">Sci-fi</option>
            </select>
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
  