        <div class="container collapse navbar-collapse" id="tNav">
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo.png" alt="" />
            </a>
            <!--<ul class="navbar-nav">
            </ul>-->
            <ul class="navbar-nav ml-auto">
				<li class="nav-item active dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="profiledorpdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $_SESSION['name']; ?>
        			</a>
        			<div class="dropdown-menu" aria-labelledby="profiledropdown">
						<a class="dropdown-item" href="#">Dashboard</a>
						<a class="dropdown-item" href="#">My Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Preferences</a>
          				<a class="dropdown-item" href="logout.php">Sign Out</a>
        			</div>
      			</li>
            </ul>
        </div>