<div class="container">
	<?php $row = $data["AllChapter"];
	$row2 = $data["manga"];
	$row3 = $data["chapter"];
	$fields2 = mysqli_fetch_array($row2);
	$fields3 = mysqli_fetch_array($row3);
	?>
	<!-- Source of product -->
	<br>
	<div class="bg-light text-dark">
		<div class="title-information-page"><a href="Home-page.html" title="home">Home</a> -
			<a href="#" title="Gender">Category</a> - <a href="#" title="brand-name"><?= $fields2["mangaName"] ?></a> -
			<a> Chapter:<?= $fields3["chapterName"] ?></a></div>
		<!-- Name of Manga-->
		<p><span id="nameofmanga"><?= $fields2["mangaName"] ?> - Chapter: <?= $fields3["chapterName"] ?></span>
			<span name="lastUpdate">[Cập nhật lúc: <?= $fields3["lastUpdate"] ?>]</span></p>
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
					<form action="http://localhost:8080/Oni_chan/manga/choiceChapter" method="POST">
						<input type="text" name="manga" value="<?= $fields2["mangaID"] ?>" hidden>
						<select name="chapter" class="custom-select">
							
							<?php while ($fields = mysqli_fetch_array($row)) {
								if ($fields3["chapterID"] == $fields["chapterID"]) {
							?>
									<option value="<?= $fields["chapterID"] ?>" selected><?= $fields["chapterName"] ?></option>
								<?php } else { ?>
									<option value="<?= $fields["chapterID"] ?>"><?= $fields["chapterName"] ?></option>
							<?php }
							} ?>
						</select>
						<button name="btnChoice" class="btn btn-success" type="submit"><i class="fas fa-angle-double-right"></i></button>
						
					</form>
				</li>
				
				<li class="form-inline nav-item">
				<?php
					if (!isset($_SESSION["userID"]) || $_SESSION["userID"] == "somebody") {
					?>
						<a href="http://localhost:8080/Oni_chan/user/login"><button class="btn btn-info" name="follow"></i>Login to Follow</button></a>
					<?php
					} else { ?>
						<?php
						if (mysqli_num_rows($data["checkFollow"]) > 0) {
						?>
							<a href="http://localhost:8080/Oni_chan/User/unFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields3['mangaID'] ?>">
							<button class="btn btn-danger" name="follow"><i class="fas fa-ban"></i>  Unfollow</button></a>
						<?php
						} else {
						?>
							<a href="http://localhost:8080/Oni_chan/User/addFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields3['mangaID'] ?>">
							<button class="btn btn-success" name="follow"><i class="fas fa-heart"></i>  Follow</button></a>
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