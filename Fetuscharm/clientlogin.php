<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <script>
        function formvalidation() {
            var check = true;
            document.getElementById("a1").innerHTML = "";
            document.getElementById("a2").innerHTML = "";

            var u = document.customerform.un.value;
            var p = document.customerform.pw.value;

            if (u == 0) {
                document.getElementById("a1").innerHTML = "Enter username";
                check = false;
            }

            if (p == 0) {
                document.getElementById("a2").innerHTML = "Enter password";
                check = false;
            }

            return check;
        }
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fetus Charm | Find The Best Vendors</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fetus-charm-favicon.png" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php
    include('header.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['un'];
        $password = $_POST['pw'];
        $qry = "select * from customerregistrationtb where emailID='$email' and password='$password' and isActive=1";

        $res = mysqli_query($con, $qry);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_array($res)) {
                $_SESSION['cid'] = $row['customerID'];
                $_SESSION['cfname'] = $row['firstName'];
                $_SESSION['clname'] = $row['lastName'];
                $_SESSION['cun'] = $email;
                if (!empty($_POST['remember'])) {
                    setcookie('user', $email, time() + (365 * 24 * 60 * 60));
                    setcookie('pwd', $password, time() + (365 * 24 * 60 * 60));
                } else {
                    setcookie('user', '');
                    setcookie('pwd', '');
                }

                header('location:index.php');
            }
        } else {
            header('location:clientlogin.php?err=1');
        }
    }
    ?>
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-padlock-1 icon-white"></i>
                        </div>
                        <h1>Welcome back to your account</h1>
                        <p>We're happy to have you back.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Login Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 st-tabs">
                </div>
                <div class="col-md-6 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                        <h3>Customer Login</h3>
                        <form method="post" name="customerform" onSubmit="return formvalidation();">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail</label>
                                <input type="text" id="un" name="un" placeholder="E-Mail" class="form-control input-md" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user']; } ?>">
                                <span id="a1" style="color:red;">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" id="pw" name="pw" placeholder="Password" class="form-control input-md" value="<?php if(isset($_COOKIE['pwd'])){ echo $_COOKIE['pwd']; } ?>">
                                <span id="a2" style="color:red;">
                            </div>
                            <!-- Button -->
                            <div>

                                <?php
                                $errmsg = "Invalid User";
                                if (isset($_GET['err']) && $_GET['err'] == 1)
                                    echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                ?>

                            </div>
                            <div class="form-group">
                                    <input type="checkbox" name="remember" id="basic_checkbox_1">
                                    <label>Remember Me</label><br/>
                                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Login</button>
                                <a href="clientforgotpassword.php" class="pull-right"> <small>Forgot Password ?</small></a>
                            </div>
                            <div>
                                <p>
                                    <center>Don't have an account? <a href="clientsignup.php">Sign Up</a></center>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
                </div>
                <div class="col-md-3 st-tabs">
                </div>

            </div>
        </div>
        <div class="footer">
            <!-- Footer -->
            <?php
            include('footer.php');
            ?>
            <!-- /.Footer -->

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Flex Nav Script -->
            <script src="js/jquery.flexnav.js" type="text/javascript"></script>
            <script src="js/navigation.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/header-sticky.js"></script>
</body>


</html>