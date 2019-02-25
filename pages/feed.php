<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNVRSLSMILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="./plugs/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./plugs/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./styles/footer.css" />
    <link rel="stylesheet" type="text/css" href="./styles/main-style.css" />
</head>
<body>
    <nav class="nav navbar-expand-lg navbar-dark c-bg-dark fixed-top">
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
    </nav>
    <div class="container" style="height: 1000px; padding-top: 5em;">
        <h2>New Stories</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                       Welcome to my travel blog. Which I hopefully finish by the end of this year.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
	<section id="footer" class="c-bg-dark">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Social</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Others</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fas fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="index.php">UNVRSLSMILE</a></u> is a trademark of Unvrslsmile, Inc.</p>
					<p class="h6">&copy All rights Reserved.<a class="text-green ml-2" href="index.php" target="_blank">UNVRSLSMILE</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
</body>
<script src="./plugs/jQuery/jquery-3.3.1.min.js"></script>
<script src="./plugs/popper/popper.min.js"></script>
<script src="./plugs/bootstrap4/js/bootstrap.min.js"></script>
</html>