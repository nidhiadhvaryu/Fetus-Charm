<?php
include 'connection.php';
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
if (isset($_POST['submit']) == "submit") {
    $username = $_SESSION['aun'];
    $currpw = $_POST['cpw'];
    $rnewpw = $_POST['rnpw'];
    $data = $link->rawQueryOne("select * from admintb where Username=?", array($username));
    if ($link->count == 0) {
        echo "Data Not Found";
    } else {
        $data = $link->rawQueryOne("select Password from admintb where Username=?", array($username));
        if ($data['Password'] != $currpw) {
            header('location:changepassword.php?err=1');
        } else {
            $link->where("Username", $username);
            $sql = $link->update("admintb", array("Password" => $rnewpw));
            header("location:dashboard.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function formvalidation() {
            var check = true;
            document.getElementById("a1").innerHTML = "";
            document.getElementById("a2").innerHTML = "";
            document.getElementById("a3").innerHTML = "";
            var currentpw = document.changepasswordform.cpw.value;
            if (currentpw == 0) {
                document.getElementById("a1").innerHTML = "Enter your old password";
                check = false;
            }

            var newpw = document.changepasswordform.npw.value;
            if (newpw == 0) {
                document.getElementById("a2").innerHTML = "Enter your new password";
                check = false;
            }
            var renternpw = document.changepasswordform.rnpw.value;
            if (renternpw == 0) {
                document.getElementById("a3").innerHTML = "Re-enter your password ";
                check = false;
            } else if (newpw != renternpw) {
                document.getElementById("a3").innerHTML = "Password did not match";
                check = false;
            }
            return check;
        }
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fetus-charm-favicon.png">
    <title>Fetus Charm Admin - Password Change</title>
    <link rel="stylesheet" href="css/vendors_css.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <?php
            include('header.php');
            ?>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar position-relative">
                <?php
                include('sidebar.php');
                ?>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="container-full">
                <section class="content">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Password Updation</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form method="post" name="changepasswordform" onSubmit="return formvalidation();">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5>Current Password<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="cpw" id="cpw" class="form-control">
                                                    </div>
                                                    <span id="a1" style="color:red;">
                                                </div>
                                                <div>
                                                    <?php
                                                    $errmsg = "Invalid Password";
                                                    if (isset($_GET['err']) && $_GET['err'] == 1)
                                                        echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <h5>New Password<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="npw" id="npw" class="form-control">
                                                    </div>
                                                    <span id="a2" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Re-enter new Password<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="rnpw" id="rnpw" class="form-control">
                                                    </div>
                                                    <span id="a3" style="color:red;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="js/vendors.min.js"></script>
        <script src="js/pages/chat-popup.js"></script>
        <script src="assets/icons/feather-icons/feather.min.js"></script>
        <script src="js/template.js"></script>
        <script src="js/pages/validation.js"></script>
        <script src="js/pages/form-validation.js"></script>
</body>

</html>