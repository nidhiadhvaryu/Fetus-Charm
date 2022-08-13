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
            document.getElementById("a3").innerHTML = "";
            document.getElementById("a4").innerHTML = "";
            document.getElementById("a5").innerHTML = "";
            document.getElementById("a6").innerHTML = "";
            document.getElementById("a7").innerHTML = "";
            document.getElementById("a8").innerHTML = "";
            document.getElementById("a9").innerHTML = "";
            document.getElementById("a10").innerHTML = "";
            document.getElementById("a11").innerHTML = "";
            document.getElementById("a12").innerHTML = "";
            document.getElementById("a13").innerHTML = "";
            document.getElementById("a14").innerHTML = "";
            var first = document.clientform.fname.value;
            if (first == 0) {
                document.getElementById("a1").innerHTML = "Enter Your First Name ";
                check = false;
            }
            var ln = document.clientform.lname.value;
            if (ln == 0) {
                document.getElementById("a2").innerHTML = "Enter Your Last Name ";
                check = false;
            }
            var em = document.clientform.mail.value;
            var e = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (em == 0) {
                document.getElementById("a3").innerHTML = "Enter your email";
                check = false;
            } else if (!e.test(em)) {
                document.getElementById("a3").innerHTML = "Enter valid email";
                check = false;
            }
            var pw = document.clientform.pass1.value;
            if (pw == 0) {
                document.getElementById("a4").innerHTML = "Create your password";
                check = false;
            }
            var pw2 = document.clientform.pass2.value;
            if (pw2 == 0) {
                document.getElementById("a5").innerHTML = "Re-enter your password ";
                check = false;
            } else if (pw != pw2) {
                document.getElementById("a5").innerHTML = "Password did not match";
                check = false;
            }
            var mn = document.clientform.cno.value;
            if (mn == 0) {
                document.getElementById("a6").innerHTML = "Enter Contact no ";
                check = false;
            } else if (isNaN(mn)) {
                document.getElementById("a6").innerHTML = "Enter only Digits";
                check = false;
            } else if (mn.length == 10) {

            } else {
                document.getElementById("a6").innerHTML = "Enter 10 Digits only";
                check = false;
            }
            if (document.getElementById('Male').checked == false && document.getElementById('Female').checked == false) {
                document.getElementById("a7").innerHTML = "Select your Gender";
                check = false;
            }
            var dd = document.clientform.dob.value;
            var dv = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
            if (dd == 0) {
                document.getElementById("a8").innerHTML = "Select your date";
                check = false;
            }
            var a1 = document.clientform.adl1.value;
            if (a1 == 0) {
                document.getElementById("a9").innerHTML = "Enter your address";
                check = false;
            }

            var a2 = document.clientform.adl2.value;
            if (a2 == 0) {
                document.getElementById("a10").innerHTML = "Enter your address";
                check = false;
            }

            var pcode = document.clientform.pin.value;
            if (pcode == 0) {
                document.getElementById("a11").innerHTML = "Enter your pincode";
                check = false;
            } else if (pcode.length == 6) {

            } else {
                document.getElementById("a11").innerHTML = "Pincode length must be atleast 6 characters ";
                check = false;
            }
            var coun = document.getElementById("countryselect").value;
            if (coun == "Select Country") {
                document.getElementById("a12").innerHTML = "Select your country";
                check = false;
            }
            var state = document.getElementById("stateselect").value;
            if (state == "Select State") {
                document.getElementById("a13").innerHTML = "Select your state";
                check = false;
            }
            var city = document.getElementById("cityselect").value;
            if (city == "Select City") {
                document.getElementById("a14").innerHTML = "Select your city";
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
    <!-- jquery ui CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
if (($_SESSION['cun'] == "")) {
    header("location:clientlogin.php");
} else {
}
$cust_id = $_SESSION['cid'];
$data = $link->rawQueryOne("select * from customerregistrationtb where customerID=?", array($cust_id));
if ($link->count == 0) {
    echo "Data Not Found";
}

if (isset($_POST['submit']) == "submit") {

    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $e = $_POST['mail'];
    $conno = $_POST['cno'];
    $g = $_POST['gender'];
    $db = $_POST['dob'];
    $addrl1 = $_POST['adl1'];
    $addrl2 = $_POST['adl2'];
    $pc = $_POST['pin'];
    $country = $_POST['countryselect'];
    $state = $_POST['stateselect'];
    $city = $_POST['cityselect'];

    $link->where("customerID", $cust_id);
    $sql = $link->update("customerregistrationtb", array("firstName" => $fn, "lastName" => $ln, "emailID" => $e, "contactno" => $conno, "gender" => $g, "DOB" => $db, "addressLine1" => $addrl1, "addressLine2" => $addrl2, "pincode" => $pc, "countryID" => $country, "stateID" => $state, "cityID" => $city));
    if ($sql) {
        $img = $_FILES['profileimage']['name'];
        if ($img != null || $img != "") {
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

            $pimage = $filename_without_ext . $sql . '.' . $ext;

            if (move_uploaded_file($_FILES['profileimage']['tmp_name'], "files/" . $pimage)) {
                $link->where('customerID', $sql);
                $a1 = $link->update("customerregistrationtb", array("profile" => "files/" . $pimage));
            }
        }
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
                            <i class="icon icon-size-60 icon-lock icon-white"></i>
                        </div>
                        <h1>Create a FREE account &amp; save you date.</h1>
                        <p>Start Planning It's Free t amet justo venenatis vesti cus arcuoin auctor sodales interdum.</p>
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
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
            </div>    
                <div class="col-md-6">
                    <div class="well-box">
                        <h2>Let's turn your wedding into a reality!</h2>
                        <form method="post" name="clientform" onSubmit="return formvalidation();" enctype="multipart/form-data">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="Your First Name" class="form-control input-md" value="<?php echo $data['firstName']; ?>">
                                <span id="a1" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="Your Last Name" class="form-control input-md" value="<?php echo $data['lastName']; ?>">
                                <span id="a2" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <input type="email" id="mail" name="mail" placeholder="E-Mail" class="form-control input-md" value="<?php echo $data['emailID']; ?>">
                                <span id="a3" style="color:red;">
                            </div>
                            <div>
                                <?php
                                $errmsg = "Email Already exist";
                                if (isset($_GET['err']) && $_GET['err'] == 1)
                                    echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
                                ?>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" id="pass1" name="pass1" placeholder="Password" class="form-control input-md">
                                <span id="a4" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" id="pass2" name="pass2" placeholder="Re-Type Password" class="form-control input-md">
                                <span id="a5" style="color:red;">
                            </div> -->
                            <div class="form-group">
                                <label class="control-label">Contact No</label>
                                <input type="text" id="cno" name="cno" placeholder="Contact no" class="form-control input-md" value="<?php echo $data['contactno']; ?>">
                                <span id="a6" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <fieldset class="control-label">
                                    <input type="radio" name="gender" id="Male" value="Male"<?php if($data['gender']=="Male")echo "checked";?>>
                                    <label>Male</label>
                                    <input type="radio" name="gender" id="Female"  value="Female"<?php if($data['gender']=="Female")echo "checked";?>>
                                    <label>Female</label>
                                </fieldset>
                                <span id="a7" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">DOB</label>
                                <div class="control-label">
                                    <input type="date" id="dob" name="dob" class="form-control input-md" value="<?php echo $data['DOB']; ?>">
                                </div>
                                <span id="a8" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">AddressLine1</label>
                                <div class="control-label">
                                    <textarea name="adl1" id="adl1" placeholder="House no.,Street/Society" class="form-control input-md" ><?php echo $data['addressLine1']; ?></textarea>
                                </div>
                                <span id="a9" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">AddressLine2</label>
                                <div class="control-label">
                                    <textarea name="adl2" id="adl2" placeholder="Area name" class="form-control input-md"><?php echo $data['addressLine2']; ?></textarea>
                                </div>
                                <span id="a10" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Pincode</label>
                                <input type="text" id="pin" name="pin" placeholder="Pincode" class="form-control input-md" value="<?php echo $data['pincode']; ?>">
                                <span id="a11" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Profile</label>
                                <input type="file" id="profileimage" name="profileimage" class="form-control input-md">
                                <img src="<?php echo $data['profile']; ?>" style="height:50px;width:50px">
                            </div>

                            <div class="form-group">

                                <div class="control-label">
                                    <select name="countryselect" id="countryselect" class="form-control input-md">
                                        <option>Select Country</option>
                                        <?php

                                        $dqry = "select * from countrytb";
                                        $dres = mysqli_query($con, $dqry);
                                        while ($irow = mysqli_fetch_array($dres)) {
                                        ?>
                                            <option <?php if ($data['countryID'] == $irow['countryID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <span id="a12" style="color:red;">
                            </div>
                            <div id="statedropdown">
                                <div class="form-group">
                                    <div class="control-label">
                                        <select name="stateselect" id="stateselect" class="form-control input-md" onchange="statedropdown(this.value);">
                                            <option>Select State</option>
                                            <?php

                                            $dqry = "select * from statetb";
                                            $dres = mysqli_query($con, $dqry);
                                            while ($irow = mysqli_fetch_array($dres)) {
                                            ?>
                                               <option <?php if ($data['stateID'] == $irow['stateID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <span id="a13" style="color:red;">
                                </div>
                            </div>
                            <div id="citydropdown">
                                <div class="form-group">
                                    <div class="control-label">
                                        <select name="cityselect" id="cityselect" class="form-control input-md">
                                        <option>Select State</option>
                                            <?php

                                            $dqry = "select * from citytb";
                                            $dres = mysqli_query($con, $dqry);
                                            while ($irow = mysqli_fetch_array($dres)) {
                                            ?>
                                               <option <?php if ($data['cityID'] == $irow['cityID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                            <?php
                                            }
                                            ?>
                                           
                                        </select>
                                    </div>
                                    <span id="a14" style="color:red;">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-3">
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
            <script type="text/javascript" src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
            <script src="js/date-script.js"></script>
            <script>
                function statedropdown(val) {
                    $.ajax({
                        type: "POST",
                        url: "citydd.php",
                        data: "stateID=" + val,
                        success: function(data) {
                            $('#citydropdown').html(data);
                        }
                    });
                }
            </script>
</body>


</html>