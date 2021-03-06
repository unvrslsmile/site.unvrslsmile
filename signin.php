<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNVRSLSMILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="./plugs/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./styles/signup-banner.css" />
    <link rel="stylesheet" type="text/css" href="./plugs/PNotify/pnotify.custom.min.css" />
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
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="signin.php">Sign In</a>
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
                <h2>Sign In</h2>
                <hr />
                <form id="signin-form" class="needs-validation" method="POST" action="javascript:void(0);" role="form" novalidate>
                    <div class="form-group">
                        <label>Email or Username</label>
                        <input type="text" class="form-control" tabindex="1" name="uusername" placeholder="unvrslsmile" />
                        <small class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" tabindex="2" name="upassword" placeholder="******" />
                        <small id="for-pass" class="form-text text-danger"></small>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="u-autolog" value="1" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Keep me logged in</label>
                    </div>
                    <hr />
                    <input type="submit" class="btn btn-success" name="u-signin" value="Sign In" />
                </form>
            </hgroup>
        </div>
    </header>
</body>
<script src="./plugs/jQuery/jquery-3.3.1.min.js"></script>
<script src="./plugs/bootstrap4/js/bootstrap.min.js"></script>
<script src="./plugs/jQuery-validate/dist/jquery.validate.min.js"></script>
<script src="./plugs/PNotify/pnotify.custom.min.js"></script>
<script src="./js/signin-script.js"></script>
</html>