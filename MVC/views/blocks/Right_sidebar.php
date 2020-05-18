		<div class="card bg-light mx-auto">
            <h3 class="text-center card-header">Billboard</h3>
			<table class="table table-hover">
				<?php
					$i=0;
					while( $toplist = mysqli_fetch_array($data["toplist"]) ){
				?>
						<tr>
							<?php 
								$i++;
							?>
							<td><p class="text-center">0<?php echo($i)?></p><td>
							<td><img src="<?= $toplist["coverImage"] ?>" alt="<?= $toplist["mangaName"] ?>"
									style="width:30px;height:47px;" ></td>
							<td> <a href="http://localhost:8080/Oni_chan/manga/detailmanga/<?= $toplist["mangaID"] ?>" 
							class="text-decoration-none card-title"> <?= $toplist["mangaName"] ?></a></td>
						</tr>
				<?php
					}
				?>
			</table>
		</div>
