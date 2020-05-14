<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="http://localhost:8080/Oni_chan"><img src="https://www.upsieutoc.com/images/2020/05/04/logo3.png" alt="onichan_logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost:8080/Oni_chan">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="CateDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">LOUIS VUITTON</a>
            <a class="dropdown-item" href="#">CALVIN KLEIN</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs">About Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="Memberdrop" data-toggle="dropdown">
            <i class="fas fa-user"></i> Member
          </a>
          <div class="dropdown-menu">
            <?php
            if (!isset($_SESSION["userID"]) || $_SESSION["userID"] == "somebody") {
            ?>
              <a class="dropdown-item" href="http://localhost:8080/Oni_chan/user/login">login to follow</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://localhost:8080/Oni_chan/user/login">Log in</a>
            <?php
            } else { ?>
              <a class="dropdown-item" href="#">Account</a>
              <a class="dropdown-item" href="http://localhost:8080/Oni_chan/user/follow/<?= $_SESSION["userID"] ?>">Follow</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://localhost:8080/Oni_chan/user/logout">Log Out</a>
            <?php }
            ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>