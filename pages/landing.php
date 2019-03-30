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
    <link rel="stylesheet" type="text/css" href="./styles/banner.css" />
    <link rel="stylesheet" type="text/css" href="./styles/footer.css" />
    <link rel="stylesheet" type="text/css" href="./styles/main-style.css" />
</head>
<body>
    <nav class="nav navbar-expand-lg navbar-dark c-bg-transparent-black fixed-top">
        <div class="container collapse navbar-collapse" id="tNav">
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo.png" alt="" />
            </a>
            <!--<ul class="navbar-nav">
            </ul>-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="content">
            <hgroup>
                <h1>IMAGINE. CREATE. SHARE.</h1>
                <i>Experience stories from people by people.</i>
            </hgroup>
        </div>
        <div class="overlay"></div>
    </header>
    <div class="container" style="min-height: 300px;">
        <hr />
        <div class="row">
            <div class="col-md-8">
                <h3>Stories</h3>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 0;">Hello World</h5>
                        <small class="text-muted">posted by: unvrslsmile @ 1:27 PM</small>
                        <p class="card-text mt-2">The quick brown fox jumped over the lazy dog.</p>
                        <a href="#" class="card-link">Continue reading...</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="./images/banner2.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-bottom: 0;">Mountains</h5>
                                <small class="text-muted">posted by: unvrslsmile @ 1:27 PM</small>
                                <p class="card-text mt-2">The quick brown fox jumped over the lazy dog.</p>
                                <a href="#" class="card-link">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="navbar-nav">
                    <li>
                        <h4>Trending</h4>
                        
                    </li>
                    <li>
                        <h4>Archives</h4>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
	<?php include "./lib/footer.php"; ?>
	<!-- ./Footer -->
</body>
<script src="./plugs/jQuery/jquery-3.3.1.min.js"></script>
<script src="./plugs/popper/popper.min.js"></script>
<script src="./plugs/bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/banner.js"></script>
</html>