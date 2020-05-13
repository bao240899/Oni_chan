<div class="container">
		<!-- Source of product -->
	<br><div class="bg-light text-dark">
		<div class="title-information-page"><a href="Home-page.html" title="home">Home</a> - 
		<a href="#" title="Gender">Category</a> - <a href="#" title="brand-name">One Piece</a> -
		<a> Chapter: 1</a></div>
		<!-- Name of Manga-->
		<p><span id="nameofmanga">One Piece - Vua Hải Tặc - Chapter 1</span>
		<span name="lastUpdate">[Cập nhật lúc: 13:07 27/01/2016]</span></p>
		<nav class="navbar navbar-expand-sm bg-light justify-content-center form-controll">
			 <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#"><i class="fas fa-list"></i></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#"><i class="fas fa-undo"></i></a>
				</li>
			
				<li class="form-inline nav-item">
				<form>
				  <select name="chapter" class="custom-select">
					<option>Chapter 1</option>
				  </select>  
					<button class="btn btn-success" type="submit"><i class="fas fa-angle-double-right"></i></button>  
					<button class="btn btn-info" name="follow"><i class="fas fa-heart"></i>  Follow</button>
				</form>
				</li>
			</ul>
		</nav>
	</div>
<?php 

    foreach($data["chapter"] as $value){
?>
    <div class="text-center"><img src="http<?php echo $value?>" alt="img"></div>
<?php
    }
?>

</div>