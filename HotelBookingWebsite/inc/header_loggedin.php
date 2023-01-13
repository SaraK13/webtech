
<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HOTEL ABC</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link me-2" href="faq.php">FAQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            News
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="news.php">Newsfeed</a></li>
            <li><a class="dropdown-item" href="news_update.php">Update Newsfeed</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn text-white shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
        <button type="button" class="btn text-white shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button>
      </div>
    </div>
  </div>
</nav>

<!-----  Log-out  ----->
<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">

	<!----   FORM   ---->
    <div class="modal-content">
    	<form action="login/logout.php" method="post">
    		<div class="modal-header">
				<h5 class="modal-title d-flex align-items-center">
					<i class="bi bi-person-circle fs-3 me-2"> Login</i>
				</h5>
				<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>

      		<div class="modal-body">
				<div class="mb-3">
					<label class="form-label">Username</label>
					<input type="text" name="username" class="form-control shadow-none" required>
				</div>
				<div class="mb-4">
					<label class="form-label">Password</label>
					<input type="password" name="password" class="form-control shadow-none" required>
				</div>
				<div class="d-flex align-items-center justify-content-between mb-2">
					<button type="submit" value="login" class="btn text-white shadow-none" name="login">LOGIN</button>
					<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Forgot Password</a>
				</div>
      		</div>
    	</form>
    </div>
  </div>
</div>


	
</div>