		<div class="card bg-light mx-auto">
            <h3 class="text-center card-header">Billboard</h3>
			<table class="table table-hover">
				<?php
					while( $toplist = mysqli_fetch_array($data["toplist"]) ){
				?>
						<tr>
							<td><p class="text-center">0<?= $toplist["mangaID"] ?></p><td>
							<td><img src="<?= $toplist["coverImage"] ?>" alt="<?= $toplist["mangaName"] ?>"
									style="width:30px;height:47px" ></td>
							<td> <a href="#" class="text-decoration-none"> <?= $toplist["mangaName"] ?></a></td>
						</tr>
				<?php
					}
				?>
			</table>
		</div>
