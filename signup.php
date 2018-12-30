<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Unvrslsmile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./plugs/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./styles/signup-banner.css" />
    <link rel="stylesheet" type="text/css" href="./styles/main-style.css" />
</head>
<body>
    <nav class="nav navbar-expand-lg navbar-dark c-bg-dark fixed-top">
        <div class="container collapse navbar-collapse" id="tNav">
            <a class="navbar-brand" href="#">
                <img src="./images/logo-light.png" alt="" />
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active btn c-btn-gray" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="content">
            <hgroup>
                <h2>Sign Up</h2>
                <hr />
                <form class="needs-validation" method="POST" action="#" role="form" novalidate>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" tabindex="1" name="u-username" placeholder="unvrslsmile" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control mb-2" tabindex="2" name="u-fname" placeholder="First" />
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-2" tabindex="3" name="u-lname" placeholder="Last" />
                            </div>
                        </div>
                        <small class="form-text text-danger">That ain't a valid name.</small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" tabindex="4" name="u-email" placeholder="your@email.com" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" tabindex="5" name="u-email" placeholder="Type a strong password" />
                        <small class="form-text text-danger">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                        <br />
                        <input type="password" class="form-control" tabindex="6" name="u-email" placeholder="Confirm it" />
                        <small class="form-text text-success">Passwords matched.</small>
                    </div>
                    <hr />
                    <small class="form-text">By creating an account you, agree to our <a href="tox.php">Terms & Conditions</a>.</small>
                    <br />
                    <input type="submit" class="btn btn-success" name="u-signup" value="Join" />
                    <input type="reset" class="btn btn-danger" name="u-signup" value="Nah" />
                </form>
            </hgroup>
        </div>
    </header>
</body>
<script src="./plugs/jQuery/jquery-3.3.1.min.js"></script>
<script src="./plugs/bootstrap4/js/bootstrap.min.js"></script>
</html>