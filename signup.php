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
                    <a class="nav-link active" href="signup.php">Sign Up</a>
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
                <h2>Sign Up</h2>
                <hr />
                <form id="signin-form" class="needs-validation" method="POST" action="javascript:void(0);" role="form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" tabindex="1" name="uusername" placeholder="unvrslsmile" />
                        <small class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" tabindex="2" name="ufname" placeholder="First" />
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" tabindex="3" name="ulname" placeholder="Last" />
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Birthdate</label>
                        <div class="form-row">
                            <div class="col">
                                <select class="form-control" tabindex="4" name="bmonth">
                                    <option selected value="">Month</option>
                                    <?php
                                        $months = array(01 => "January", 
                                                        02 => "February", 
                                                        03 => "March", 
                                                        04 => "April", 
                                                        05 => "May",
                                                        06 => "June", 
                                                        07 => "July", 
                                                        08 => "August", 
                                                        09 => "September", 
                                                        10 => "October", 
                                                        11 => "November",
                                                        12 => "December");
                                        foreach($months as $monthnum => $monthnm){
                                            echo "<option value='".$monthnum."'>".$monthnm."</option>";
                                        }
                                    ?>
                                </select>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="col">
                                <select class="form-control" tabindex="5" name="bday">
                                    <option selected value="">Day</option>
                                    <?php
                                        $days = range(1, 31);
                                        foreach($days as $day){
                                            echo "<option value='".$day."'>".$day."</option>";
                                        }
                                    ?>
                                </select>
                                <small class="form-text text-danger"></small>
                            </div>
                            <div class="col">
                                <select class="form-control" tabindex="6" name="byear">
                                    <option selected value="">Year</option>
                                    <?php
                                        $years = range(date("Y"), 1950);
                                        foreach($years as $year){
                                            echo "<option value='".$year."'>".$year."</option>";
                                        }
                                    ?>
                                </select>
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="form-row">
                            <div class="col">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" tabindex="7" id="customRadioInline1" name="ugender" value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" tabindex="7" id="customRadioInline2" name="ugender" value="2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" tabindex="7" id="customRadioInline3" name="ugender" value="3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">Other</label>
                                </div>
                            </div>
                        </div>
                        <small id="for-gender" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" tabindex="8" name="uemail" placeholder="your@email.com" />
                        <small id="for-email" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="pass" class="form-control" tabindex="9" name="upass" placeholder="Type a strong password" />
                        <small id="for-pass" class="form-text text-danger"></small>
                        <br />
                        <input type="password" id="uconfpass" class="form-control" tabindex="10" name="uconfpass" placeholder="Confirm it" />
                        <small id="for-cpass" class="form-text text-danger"></small>
                    </div>
                    <hr />
                    <small class="form-text">By creating an account, you agree to our <a href="tox.php">Terms & Conditions</a>.</small>
                    <br />
                    <input type="submit" id="join-btn" class="btn btn-success" tabindex="11" name="u-signup" value="Join Now" />
                    <a href="index.php" id="cancel-btn" tabindex="12" class="btn btn-danger">Nah</a>
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