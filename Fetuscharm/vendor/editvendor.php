<?php
include 'connection.php';
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$vendor_id = $_SESSION['vid'];
$data = $link->rawQueryOne("select * from vendorregistrationtb where vendorID=?", array($vendor_id));
if ($link->count == 0) {
    echo "Data Not Found";
}


if (isset($_POST['submit']) == "submit") {

    $comname = $_POST['companyname'];
    $pername = $_POST['personname'];
    $comtype = $_POST['categoryselect'];
    $email = $_POST['emailid'];
    $addr = $_POST['address'];
    $m = $_POST['map'];
    $conno = $_POST['contactno'];
    $idproof = $_POST['vendoridproof'];
    $country = $_POST['countryselect'];
    $vendes = $_POST['vendordescription'];
    $state = $_POST['stateselect'];
    $city = $_POST['cityselect'];

    $link->where("vendorID", $vendor_id);
    $sql = $link->update("vendorregistrationtb", array("countryID" => $country, "stateID" => $state, "cityID" => $city, "companyName" => $comname, "personName" => $pername, "companyType" => $comtype, "emailID" => $email, "address" => $addr, "map" => $m, "contactno" => $conno, "vendordescription" => $vendes));
    if ($sql) {
        $vimg = $_FILES['vendorprofile']['name'];
        if ($vimg != null || $vimg != "") {
            $vext = pathinfo($vimg, PATHINFO_EXTENSION);
            $vfilename_without_ext = pathinfo($vimg, PATHINFO_FILENAME);

            $vpimage = $vfilename_without_ext . $sql . '.' . $vext;

            if (move_uploaded_file($_FILES['vendorprofile']['tmp_name'], "files/profile/" . $vpimage)) {
                $link->where('vendorID', $vendor_id);
                $a1 = $link->update("vendorregistrationtb", array("vendorProfile" => "files/profile/" . $vpimage));
            }
        }
    }
    if ($sql) {
        $img = $_FILES['vendoridproof']['name'];
        if ($img != null || $img != "") {
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

            $pimage = $filename_without_ext . $sql . '.' . $ext;

            if (move_uploaded_file($_FILES['vendoridproof']['tmp_name'], "files/idproof/" . $pimage)) {
                $link->where('vendorID', $vendor_id);
                $a2 = $link->update("vendorregistrationtb", array("company_Vendor_IDProof" => "files/idproof/" . $pimage));
            }
        }
    }

    header("location:dashboard.php");
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
            document.getElementById("a4").innerHTML = "";
            document.getElementById("a5").innerHTML = "";
            document.getElementById("a6").innerHTML = "";
            document.getElementById("a7").innerHTML = "";
            document.getElementById("a8").innerHTML = "";
            document.getElementById("a9").innerHTML = "";
            document.getElementById("a10").innerHTML = "";

            var cn = document.vendorform.companyname.value;
            var re = /^[A-Za-z]{3,30}$/;
            if (cn == 0) {
                document.getElementById("a1").innerHTML = "Enter your company name";
                check = false;
            } else if (!re.test(cn)) {
                document.getElementById("a1").innerHTML = "Enter only Character";
                check = false;
            }
            var pn = document.vendorform.personname.value;
            if (pn == 0) {
                document.getElementById("a2").innerHTML = "Enter your person name";
                check = false;
            } else if (!re.test(pn)) {
                document.getElementById("a2").innerHTML = "Enter only Character";
                check = false;
            }

            var ct = document.getElementById("categoryselect").value;
            if (ct == "Select Category") {
                document.getElementById("a3").innerHTML = "Select Company Category";
                check = false;
            }

            var em = document.vendorform.emailid.value;
            var e = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (em == 0) {
                document.getElementById("a4").innerHTML = "Enter your email";
                check = false;
            } else if (!e.test(em)) {
                document.getElementById("a4").innerHTML = "Enter valid email";
                check = false;
            }
            var add = document.vendorform.address.value;
            if (add == 0) {
                document.getElementById("a5").innerHTML = "Enter Address ";
                check = false;
            }

            var mn = document.vendorform.contactno.value;
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
            var coun = document.getElementById("countryselect").value;
            if (coun == "Select Country") {
                document.getElementById("a7").innerHTML = "Select your country";
                check = false;
            }
            var state = document.getElementById("stateselect").value;
            if (state == "Select State") {
                document.getElementById("a8").innerHTML = "Select your state";
                check = false;
            }
            var city = document.getElementById("cityselect").value;
            if (city == "Select City") {
                document.getElementById("a9").innerHTML = "Select your city";
                check = false;
            }
            var lo = document.vendorregistrationform.location.value;
            if (lo == 0) {
                document.getElementById("a10").innerHTML = "Enter your location";
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

    <title>Fetuc Charm Vendor</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <!-- Style-->
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
                            <h4 class="box-title">Vendor Form</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form novalidate method="post" name="vendorform" onSubmit="return formvalidation();" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <h5>Company Name<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" id="companyname" name="companyname" value="<?php echo $data['companyName']; ?>">
                                                        </div>
                                                        <span id="a1" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Person Name<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" id="personname" name="personname" class="form-control" value="<?php echo $data['personName']; ?>">
                                                        </div>
                                                        <span id="a2" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Select Category <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="categoryselect" id="categoryselect" class="form-select">
                                                                <option>Select Category</option>
                                                                <?php
                                                                $dqry = "select * from categorytb";
                                                                $dres = mysqli_query($con, $dqry);
                                                                while ($irow = mysqli_fetch_array($dres)) {
                                                                ?>
                                                                    <option <?php if ($data['companyType'] == $irow['categoryName']) echo "selected=\"selected\""; ?> value="<?php echo $irow[1] ?>"><?php echo $irow[1] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span id="a3" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Email ID<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" id="emailid" name="emailid" class="form-control" value="<?php echo $data['emailID']; ?>">
                                                        </div>
                                                        <span id="a4" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Address<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" id="address" name="address" class="form-control" value="<?php echo $data['address']; ?>">
                                                        </div>
                                                        <span id="a5" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Location<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" id="map" name="map" class="form-control" value="<?php echo $data['map']; ?>">
                                                        </div>
                                                        <span id="a10" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Contact No<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="text" id="contactno" name="contactno" class="form-control" value="<?php echo $data['contactno']; ?>">
                                                        </div>
                                                        <span id="a6" style="color:red;">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Vendor Profile<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="file" id="vendorprofile" name="vendorprofile" class="form-control">
                                                            <img src="<?php echo $data['vendorProfile']; ?>" style="height:50px;width:50px">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Vendor ID Proof<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <input type="file" id="vendoridproof" name="vendoridproof" class="form-control">
                                                            <img src="<?php echo $data['company_Vendor_IDProof']; ?>" style="height:50px;width:50px">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Description<span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <textarea id="editor" name="vendordescription" class="form-control"><?php echo $data['vendorDescription']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Country <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="countryselect" id="countryselect" class="form-select">
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
                                                        <span id="a7" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>State <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="stateselect" id="stateselect" class="form-select">
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
                                                        <span id="a8" style="color:red;">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>City <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="cityselect" id="cityselect" class="form-select">
                                                                <option>Select City</option>
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
                                                        <span id="a9" style="color:red;">
                                                    </div>
                                                </div>
                                                <div class="col-12">
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
        <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>

</body>

</html>