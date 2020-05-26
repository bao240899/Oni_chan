<div class="container">
	<?php $row = $data["AllChapter"];
	$row2 = $data["manga"];
	$row3 = $data["chapter"];
	$fields2 = mysqli_fetch_array($row2);
	$fields3 = mysqli_fetch_array($row3);
	?>
	<!-- Source of product -->
	<br>
	<div class="bg-dark text-white ">
		<div class=" mr-sm-2"><a href="http://localhost:8080/Oni_chan" title="home">Home</a> -
			<a href="http://localhost:8080/Oni_chan/Category/Allcategory" title="Gender">Category</a></div>
		<!-- Name of Manga-->
		<p><span id="nameofmanga"><?= $fields2["mangaName"] ?> - Chapter: <?= $fields3["chapterName"] ?></span>
			<span name="lastUpdate">[Cập nhật lúc: <?= $fields3["lastUpdate"] ?>]</span></p>
		<nav class="navbar navbar-expand-sm bg-light justify-content-center ">
			<ul class="navbar-nav">
				<li class="nav-item">
					<form action="http://localhost:8080/Oni_chan/manga/choiceChapter" method="POST" class="form-inline">
						<input type="text" name="manga" value="<?= $fields2["mangaID"] ?>" hidden>
						<select name="chapter" class="custom-select mr-sm-2">
							
							<?php while ($fields = mysqli_fetch_array($row)) {
								if ($fields3["chapterID"] == $fields["chapterID"]) {
							?>
									<option value="<?= $fields["chapterID"] ?>" selected><?= $fields["chapterName"] ?></option>
								<?php } else { ?>
									<option value="<?= $fields["chapterID"] ?>"><?= $fields["chapterName"] ?></option>
							<?php }
							} ?>
						</select>
						<button name="btnChoice" class="btn btn-success mr-sm-2" type="submit"><i class="fas fa-angle-double-right"></i></button>
						
					</form>
				</li>
				<li class="nav-item">
				<?php
					if (!isset($_SESSION["userID"]) || $_SESSION["userID"] == "somebody") {
					?>
						<a href="http://localhost:8080/Oni_chan/user/login"><button class="btn btn-info mr-sm-2" name="follow"></i>Login to Follow</button></a>
					<?php
					} else { ?>
						<?php
						if (mysqli_num_rows($data["checkFollow"]) > 0) {
						?>
							<a href="http://localhost:8080/Oni_chan/User/unFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields3['mangaID'] ?>">
							<button class="btn btn-danger mr-sm-2" name="follow"><i class="fas fa-ban"></i>  Unfollow</button></a>
						<?php
						} else {
						?>
							<a href="http://localhost:8080/Oni_chan/User/addFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields3['mangaID'] ?>">
							<button class="btn btn-success mr-sm-2" name="follow"><i class="fas fa-heart"></i>  Follow</button></a>
						<?php
						}
						?>
					<?php }
					?>
				</li>
			</ul>
		</nav>
	</div>
	<?php

	foreach ($data["chapterImg"] as $value) {
	?>
		<div class="text-center"><img src="http<?php echo $value ?>" alt="img"></div>
	<?php
	}
	?>

</div>