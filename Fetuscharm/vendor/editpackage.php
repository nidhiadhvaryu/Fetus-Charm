<?php
include 'connection.php';
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$pack_id = $_REQUEST['packageID'];
$data = $link->rawQueryOne("select * from packagetb where packageID=?", array($pack_id));
if ($link->count == 0) {
    echo "Data Not Found";
}
if (isset($_POST['submit']) == "submit") {
    $cat = $_POST['categoryselect'];
    $subcat = $_POST['subcategoryselect'];
    $comname = $_POST['companyselect'];
    $packname = $_POST['packagename'];
    $sdes = $_POST['shortdescription'];
    $des = $_POST['description'];
    $packprice = $_POST['packageprice'];
    $covphoto = $_POST['coverphoto'];
    $nod = $_POST['noofdays'];
    $link->where("packageID", $pack_id);
    $sql = $link->update("packagetb", array("categoryID" => $cat, "subcategoryID" => $subcat, "vendorID" => $comname, "packagename" => $packname, "shortdescription" => $sdes, "description" => $des, "packagePrice" => $packprice,"noofdays" => $nod));
    if ($sql) {
        $img = $_FILES['coverphoto']['name'];
        if ($img != null || $img != "") {
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
            $pimage = $filename_without_ext . $sql . '.' . $ext;
            if (move_uploaded_file($_FILES['coverphoto']['tmp_name'], "files/package/" . $pimage)) {
                $link->where('packageID', $pack_id);
                $a1 = $link->update("packagetb", array("coverphoto" => "files/package/" . $pimage));
            }
        }
    }
    header("location:viewpackage.php");
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

            var s = document.getElementById("categoryselect").value;
            if (s == "Select Category") {
                document.getElementById("a1").innerHTML = "Select Category";
                check = false;
            }

            var sc = document.getElementById("subcategoryselect").value;
            if (sc == "Select Subcategory") {
                document.getElementById("a2").innerHTML = "Select Sub Category";
                check = false;
            }
            var comn = document.getElementById("companyselect").value;
            if (comn == "Select Company Name") {
                document.getElementById("a3").innerHTML = "Select Company Name";
                check = false;
            }

            var n = document.packageform.packagename.value;
            if (n == 0) {
                document.getElementById("a4").innerHTML = "Enter Package Name ";
                check = false;
            } 
            var des = document.packageform.shortdescription.value;
            if (des == 0) {
                document.getElementById("a5").innerHTML = "Enter Short Description";
                check = false;
            }


            var pp = document.packageform.packageprice.value;
            var rep = /^[0-9]+$/;
            if (pp == 0) {
                document.getElementById("a6").innerHTML = "Enter Package Price ";
                check = false;
            } else if (!rep.test(pp)) {
                document.getElementById("a6").innerHTML = "Enter only Digits";
                check = false;
            }
            var nod = document.packageform.noofdays.value;
            if (nod == 0) {
                document.getElementById("a7").innerHTML = "Enter No of Days";
                check = false;
            } else if (isNaN(nod)) {
                document.getElementById("a7").innerHTML = "Enter only Digits";
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
    <title>Fetus Charm Vendor - Package </title>
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
                            <h4 class="box-title">Package Form</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form novalidate method="post" name="packageform" onSubmit="return formvalidation();" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id=categorydropdown>
                                                    <div class="form-group">
                                                        <h5>Category <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="categoryselect" id="categoryselect" class="form-select" onchange="categorydropdown(this.value);">
                                                                <option>Select Category</option>
                                                                <?php
                                                                $dqry = "select * from categorytb";
                                                                $dres = mysqli_query($con, $dqry);
                                                                while ($irow = mysqli_fetch_array($dres)) {
                                                                ?>
                                                                    <option <?php if ($data['categoryID'] == $irow['categoryID']) echo "selected=\"selected\""; ?>value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span id="a1" style="color:red;">
                                                    </div>
                                                </div>
                                                <div id=subcategorydropdown>
                                                    <div class="form-group">
                                                        <h5>Sub Category <span class="text-danger"></span></h5>
                                                        <div class="controls">
                                                            <select name="subcategoryselect" id="subcategoryselect" class="form-select">
                                                                <option>Select Subcategory</option>
                                                                <?php
                                                                $dqry = "select * from subcategorytb";
                                                                $dres = mysqli_query($con, $dqry);
                                                                while ($irow = mysqli_fetch_array($dres)) {
                                                                ?>
                                                                    <option <?php if ($data['subcategoryID'] == $irow['subcategoryID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span id="a2" style="color:red;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Company Name <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <select name="companyselect" id="companyselect" class="form-select">
                                                            <option>Select Company Name</option>
                                                            <?php
                                                            $dqry = "select * from vendorregistrationtb";
                                                            $dres = mysqli_query($con, $dqry);
                                                            while ($irow = mysqli_fetch_array($dres)) {
                                                            ?>
                                                                <option <?php if ($data['vendorID'] == $irow['vendorID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <span id="a3" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Package Name<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="packagename" name="packagename" value="<?php echo $data['packageName']; ?>">
                                                    </div>
                                                    <span id="a4" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Short Description<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="shortdescription" name="shortdescription" class="form-control" value="<?php echo $data['shortdescription']; ?>">
                                                    </div>
                                                    <span id="a5" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Description<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <textarea id="editor" name="description" class="form-control"><?php echo $data['description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Package Price<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="packageprice" name="packageprice" class="form-control" value="<?php echo $data['packagePrice']; ?>">
                                                    </div>
                                                    <span id="a6" style="color:red;">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>Cover Photo<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="file" id="coverphoto" name="coverphoto" class="form-control">
                                                    <img src="<?php echo $data['coverphoto']; ?>" style="height:50px;width:50px">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>No of Days<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" id="noofdays" name="noofdays" class="form-control" value="<?php echo $data['noofdays']; ?>">
                                                </div>
                                                <span id="a7" style="color:red;">
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
    <script>
        function categorydropdown(val) {
            $.ajax({
                type: "POST",
                url: "subcategorydd.php",
                data: "categoryID=" + val,
                success: function(data) {
                    $('#subcategorydropdown').html(data);
                }
            });
        }
    </script>


</body>

</html>