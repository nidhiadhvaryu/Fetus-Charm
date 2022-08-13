<?php
include('connection.php');
session_start();
 if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
if (isset($_POST['submit']) == "submit") {

    $tname = $_POST['testname'];
    $tdate = $_POST['testdate'];
    $tdes = $_POST['testdescription'];
    $sql = $link->insert("testimonialtb", array("testimonialName" => $tname,"testimonialDate" => $tdate, "testimonialDescription" => $tdes));
    if ($sql) {
        $img = $_FILES['testimage']['name'];
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

        $pimage = $filename_without_ext . $sql . '.' . $ext;

        if (move_uploaded_file($_FILES['testimage']['tmp_name'], "files/testimonial/" . $pimage)) {
            $link->where('testimonialID', $sql);
            $a1 = $link->update("testimonialtb", array("testimonialImage" => "files/testimonial/" . $pimage));
        }
    }
    header("location:viewtestimonial.php");
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
            
            var n = document.testform.testname.value;
            if (n == 0) {
                document.getElementById("a1").innerHTML = "Enter Testmonial Name ";
                check = false;
            }
            
            var i = document.testform.testimage.value;
            if (i == 0) {
                document.getElementById("a2").innerHTML = "Upload your testmonial here ";
                check = false;
            }
            var d = document.testform.testdate.value;
            if (d == 0) {
                document.getElementById("a3").innerHTML = "Select test date ";
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
    <title>Fetus Charm Admin - Testimonial</title>
    <link rel="stylesheet" href="css/vendors_css.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <?php
            include("header.php");
           
            ?>
        </header>
        <aside class="main-sidebar">
            <?php
            include("sidebar.php");
            ?>
        </aside>
        <div class="content-wrapper">
            <div class="container-full">
                <section class="content">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Testimonial Form </h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form  method="post" name="testform" onSubmit="return formvalidation();" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5>Testimonial Name<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" id="testname" name="testname" class="form-control">
                                                    </div>
                                                    <span id="a1" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Testimonial Description<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <textarea id="editor" name="testdescription" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Testimonial Image<span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="file" id="testimage" name="testimage" class="form-control">
                                                    </div>
                                                    <span id="a2" style="color:red;">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Testimonial Date <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <input type="date" id="testdate" name="testdate" class="form-control">
                                                    </div>
                                                    <span id="a3" style="color:red;">
                                                </div>
                                                
                                                
                                                <div class="text-xs-right">
                                                    <button type="submit" value="submit" name="submit" class="btn btn-info">Submit</button>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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