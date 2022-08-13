<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are you local weddding vendor provider & looking for wedding vendor website template. Wedding Vendor Responsive Website Template suitable for wedding vendor supplier, wedding agency, wedding company, wedding events etc.. ">
    <meta name="keywords" content="Wedding Vendor, wedding template, wedding website template, events, wedding party, wedding cake, wedding dress, wedding couple, couple, Wedding Venues Website Template">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Fetus Charm | Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- favicon icon -->
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
    ?>
    <div class="slider-bg">
        <!-- slider start-->
        <div id="slider" class="owl-carousel owl-theme slider">
            <div class="item"><img src="images/slider2.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/slider1.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/slider3.jpg" alt="Wedding couple just married"></div>
        </div>
        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        <div class="finder-caption">
                        </div>
                        <div class="finderform">
                            <form name="f1" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="scselect" id="scselect">
                                            <option>Select Sub Category</option>
                                            <?php
                                            $dqry = "select * from subcategorytb";
                                            $dres = mysqli_query($con, $dqry);
                                            while ($irow = mysqli_fetch_array($dres)) {
                                            ?>
                                                <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="cityselect" id="cityselect">
                                            <option>Select City</option>
                                            <?php

                                            $cqry = "select * from citytb";
                                            $cres = mysqli_query($con, $cqry);
                                            while ($cirow = mysqli_fetch_array($cres)) {
                                            ?>
                                                <option value="<?php echo $cirow[0] ?>"><?php echo $cirow[1] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">

                                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Find a Vendor</button></a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Start making your memories from here</h1>
                        <p>Having a child is a special stage for parents which is full of joy and emotions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feature center -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/vendor.svg" alt=""></div>
                        <h2>Find local vendor</h2>
                        <p>Small Vendor with the best services and packages is easy to find, which saves the most time and efforts.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/mail.svg" alt=""></div>
                        <h2>Contact vendor</h2>
                        <p>Easily aviable contact details of vendor so that you can quickly contact to vendor for further inquiry.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="images/www.png" alt=""></div>
                        <h2>Book your package</h2>
                        <p>All the booking facilities along with add to cart make the your work easy and fast.</p>
                    </div>
                </div>
                <!-- /.feature block -->
            </div>
            <!-- /.feature center -->
        </div>
    </div>
    <!-- Feature Blog End -->
    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Featured Packages of Vendor</h1>
                        <p>Most recommended packages of vendor.</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <?php
                $indexqry = "select * from packagetb where packagePrice<3000";
                $indexres = mysqli_query($con, $indexqry);
                while ($indexrow = mysqli_fetch_array($indexres)) {
                ?>
                    <div class="col-md-4">
                        <!-- vendor box start-->
                        <div class="vendor-box">
                            <div class="vendor-image">
                                <!-- vendor pic -->
                                <?php
                                $indexdata = $link->rawQueryOne("select * from packagetb where packageID=" . $indexrow['packageID']);
                                ?>
                                <a href="packagedetails.php?packageID=<?php echo $indexdata['packageID'] ?>"><img src="vendor/<?php echo $indexrow['coverphoto'] ?>" alt="wedding vendor" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.vendor pic -->
                            <div class="vendor-detail">
                                <!-- vendor details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="#" class="title"><?php echo $indexrow['packageName'] ?></a></h2>
                                    <p><?php echo $indexrow['shortdescription'] ?></p>

                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">INR <?php echo $indexrow['packagePrice'] ?></div>
                                </div>
                            </div>
                            <!-- vendor details -->
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <!-- /.top location -->
    <div class="section-space80">
        <!-- Testimonial Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Testimonials</h1>
                        <p>This are some of your satisfied clients.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 tp-testimonial">
                    <div id="testimonial" class="owl-carousel owl-theme">
                    <?php
                            $testiqry = "select * from testimonialtb";
                            $testires = mysqli_query($con, $testiqry);
                            while ($trow = mysqli_fetch_array($testires)) {
                            ?>
                        <div class="item testimonial-block">
                           
                                <div class="couple-pic"><img src="backyard/<?php echo $trow['testimonialImage'] ?>" style="height:160px;width:160px" alt="" class="img-circle"></div>
                                <div class="feedback-caption">
                                    <p><?php echo $trow['testimonialDescription'] ?></p>
                                </div>
                                <div class="couple-info">
                                    <div class="name"><?php echo $trow['testimonialName'] ?></div>
                                    <div class="date"><?php echo $trow['testimonialDate'] ?></div>
                                </div>
                           
                        </div>
                        <?php } ?>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /. Testimonial Section -->
    <div class="section-space80 bg-light">
        <!-- Call to action -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 couple-block">
                    <div class="couple-icon"><img src="images/www.png" alt=""></div>
                    <h2>Are you client find the packages</h2>
                    <p>In India each day 67,385 babies are born.</p>
                    <a href="vendorlist.php" class="btn btn-primary">Find Vendor</a>
                </div>
                <div class="col-md-6 vendor-block">
                    <div class="vendor-icon"><img src="images/vendor.svg" alt=""></div>
                    <h2>Are you vendor ?</h2>
                    <p>Add your packages while you find your clients and provide them with the best.</p>
                    <a href="vendor\vendorregistration.php" class="btn btn-primary">Add Your Listing</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Call to action -->
    <div class="footer">

        <?php
        include('footer.php');
        ?>


        <!-- /. Tiny Footer -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Flex Nav Script -->
        <script src="js/jquery.flexnav.js" type="text/javascript"></script>
        <script src="js/navigation.js"></script>
        <!-- slider -->
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <!-- testimonial -->
        <script type="text/javascript" src="js/testimonial.js"></script>
        <!-- sticky header -->
        <script src="js/jquery.sticky.js"></script>
        <script src="js/header-sticky.js"></script>
</body>
<?php
if (isset($_POST['submit'])) {
    $sdata = $_POST['scselect'];
    $cdata = $_POST['cityselect'];
    if ($sdata == "Select Sub Category" && $_POST['cityselect'] == 'Select City') {
        //header("location:subcategorypackage2.php?categoryid=$cid"); 
    } else if ($sdata == "Select Sub Category") {
        header("location:subcategorypackage.php?cityID=$cdata");
    } elseif ($_POST['cityselect'] == 'Select City') {
        $data = $link->rawQueryOne("select subcategoryID from subcategorytb where subcategoryID=$sdata");
        $cid = $data['subcategoryID'];
        header("location:subcategorypackage2.php?subcategoryID=$cid");
    } else {
        $data = $link->rawQueryOne("select subcategoryID from subcategorytb where subcategoryID=$sdata");
        $cid = $data['subcategoryID'];
        header("location:subcategorypackage2.php?cityID=$cdata&subcategoryID=$cid");
    }
}

?>

</html>