<?php
$fields = mysqli_fetch_array($data["Manga"]);
$firstChapter = mysqli_fetch_array($data["firstChapter"]);
$lastChapter = mysqli_fetch_array($data["lastChapter"]);
?>
<div class="container">
	<!-- Source of product -->
	<br>
	<div class="title-information-page"><a href="Home-page.html" title="home">Home</a> /
		<a href="#" title="Gender">Category</a> / <a href="#" title="brand-name"><?= $fields[1] ?></a></div><br>
	<!--Content-->
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<!-- Title of product-->
			<div class="title-of-product"><?= $fields[1] ?></div><br>
			<div class="lastUpdate"></div>


			<div class="row">
				<!-- Image of Manga-->
				<div class="col-lg-5 col-sm-12">
					<div class="CoverImage"><img src="<?= $fields["coverImage"] ?>" alt=""></div>
				</div>
				<!-- Detail of Manga-->
				<div class="col-lg-7 col-sm-0">
					<table>
						<tr>
							<td><i class="far fa-user"></i> Author :</td>
							<td><?= $fields["author"] ?></td>
						</tr>
						<tr>
							<td><i class="fas fa-rss"></i> Process:</td>
							<td><?= $fields["rate"] ?></td>
						</tr>
						<tr>
							<td><i class="fas fa-tags"></i> Category:</td>
							<td><?= $fields["categoryID"] ?></td>
						</tr>
						<tr>
							<td><i class="far fa-eye"></i> View:</td>
							<td><?= $fields["view"] ?></td>
						</tr>
						<tr style="border-collapse: 2"></tr>
					</table><br>
					<?php
					if (!isset($_SESSION["userID"]) || $_SESSION["userID"] == "somebody") {
					?>
						<a href="http://localhost:8080/Oni_chan/user/login"><button class="btn btn-info" name="follow"><i class="fas fa-heart"></i>Login to Follow</button></a>
					<?php
					} else { ?>
						<?php
						if (mysqli_num_rows($data["checkFollow"]) > 0) {
						?>
							<a href="http://localhost:8080/Oni_chan/user/unFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields['mangaID'] ?>"><button class="btn btn-info" name="follow"><i></i>Un Follow</button></a>
						<?php
						} else {
						?>
							<a href="http://localhost:8080/Oni_chan/user/addFollowProcess/<?= $_SESSION['userID'] ?>/<?= $fields['mangaID'] ?>"><button class="btn btn-info" name="follow"><i class="fas fa-heart"></i>Follow</button></a>
						<?php
						}
						?>
					<?php }
					?>
					<br><br>
					<a href="http://localhost:8080/Oni_chan/manga/readchapter/<?= $fields["mangaID"] ?>/<?= $firstChapter['chapterID'] ?>"><button class="btn btn-primary" name="firstChapter">First Chapter</button></a>
					<a href="http://localhost:8080/Oni_chan/manga/readchapter/<?= $fields["mangaID"] ?>/<?= $lastChapter['chapterID'] ?>"><button class="btn btn-primary" name="lastChapter">Last Chapter</button></a>

				</div>
			</div>
			<div class="detail">
				<div class="panel-heading">
					<!-- Detail button-->
					<br>
					<h5 class="panel-title">
						<a data-toggle="collapse" href="#collapse">Description</a>
					</h5>
				</div>
				<!-- Collapse detail of product-->
				<div id="collapse" class="panel-collapse collapse">
					<?= $fields["description"] ?>
				</div>
				<div class="panel-heading">
					<h5 class="panel-title">
						<a data-toggle="collapse" href="#collapse1">Chapter</a>
					</h5>
				</div>
				<div id="collapse1" class="panel-collapse collapse">
					<?php
					while ($fields = mysqli_fetch_array($data["chapter"])) {
					?>
						<p>
							<a href="http://localhost:8080/Oni_chan/manga/readchapter/<?= $fields["mangaID"] ?>/<?= $fields["chapterID"] ?>"><?= $fields["chapterName"] ?></a>
						</p>
					<?php
					}
					?>

				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-0">
			<div class="card bg-light mx-auto">
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
</div>
<?php
require_once "./mvc/views/pages/comment.php";
?>