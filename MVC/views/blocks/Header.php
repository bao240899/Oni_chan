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
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Action">Action</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Adult">Adult</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Adventure">Adventure</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Comedy">Comedy</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Drama">Drama</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Ecchi">Ecchi</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Horrow">Horrow</a>
            <a class="dropdown-item" href="http://localhost:8080/Oni_chan/Category/Sci-fi">Sci-fi</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/Oni_chan/Home/ContactUs">About Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <ul class="navbar-nav">
      <?php
        if (!isset($_SESSION["userID"]) || $_SESSION["userID"] == "somebody") {
      ?>
        <a class="nav-link" href="http://localhost:8080/Oni_chan/user/login" role="button">Login/Register</a>
            <?php
            } else { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Memberdrop" data-toggle="dropdown">
                  <i class="fas fa-user"></i> Member
                </a>
                <div class="dropdown-menu">
              <span class="dropdown-item-text">
                <div class="user-info clearfix">
                  <div class="media">
                    <img src="https://www.upsieutoc.com/images/2020/05/14/17004.png" 
                    class="align-self-center mr-3"  width="30" height="30">
                    <div class="media-body">
                      <?php echo $_SESSION['userID'] ?>
                    </div>
                  </div>
                </div>
              </span>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://localhost:8080/Oni_chan/user/Account/<?= $_SESSION["userID"] ?>">Account</a>
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