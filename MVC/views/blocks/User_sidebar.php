<div class="container border p-2 ">
	<div class="user-info ">
	
		<figure>
		<div class="media">
			<img src="https://www.upsieutoc.com/images/2020/05/14/17004.png" 
			class="align-self-center mr-3"  width="50" height="50">
			<div class="media-body">
				Account of:
				<h4><?php echo $_SESSION['userID'] ?></h4>
			</div>
		</div>
		</figure>
	</div>
</div>
<br>
<nav class="user-sidelink clearfix bg-light navbar-dark text-secondary" >
    <ul class="nav nav-tabs flex-column ">
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/Account/<?= $_SESSION['userID'] ?>"><i class="fas fa-tachometer-alt"></i> General</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/editUserByUser/<?= $_SESSION['userID'] ?>"><i class="fas fa-user-edit"></i> Edit Infomation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/follow/<?= $_SESSION["userID"] ?>"><i class="fas fa-heart"></i> Follow</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/comment/<?= $_SESSION["userID"] ?>"><i class="fas fa-comment"></i> Comment</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/password/<?= $_SESSION["userID"] ?>"><i class="fas fa-lock"></i> Password</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://localhost:8080/Oni_chan/user/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
		</li>
	</ul>
</nav>
