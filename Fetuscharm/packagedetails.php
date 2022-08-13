<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Fetus Charm| Find The Best Vendors</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fetus-charm-favicon.png" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .star-rating {
            line-height: 32px;
            font-size: 1.25em;
        }

        .star-rating .fa-star {
            color: yellow;
        }
    </style>
</head>

<body>
    <?php
    include('header.php');
    ?>



    <div id="slider" class="owl-carousel owl-theme slider">
        <?php
        $pqry = "select * from portfoliotb where packageID=" . $_REQUEST['packageID'];
        $pres = mysqli_query($con, $pqry);
        while ($pdata = mysqli_fetch_array($pres)) {
        ?>

            <div class="item">
                <div class="slider-pic"><img src="vendor/files/portfolio/<?php echo $pdata['album'] ?>" alt="Mirror Edge"></div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Package Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    $cqry = "select * from packagetb where packageID=" . $_REQUEST['packageID'];
    $cres = mysqli_query($con, $cqry);
    while ($crow = mysqli_fetch_array($cres)) {
    ?>
        <div class="container venue-header">
            <div class="row venue-head">
                <div class="col-md-12 title">
                    <h1><?php echo $crow['packageName'] ?></h1>
                    <?php
                    $addrdata = $link->rawQueryOne("select address from vendorregistrationtb where vendorID=" . $crow['vendorID']);
                    ?>
                    <p class="location"> <i class="fa fa-map-marker"><?php echo $addrdata['address'] ?></i></p>
                </div>
                <div class="col-md-8 rating-box">
                    <div class="rating"> <?php
                                            $subcat = $link->rawQueryone("select * from packagetb where packageID=? ", array($crow['packageID']));
                                            $rqry = "select avg(package_review_rating) as avgrate from product_review where packageID=" . $subcat['packageID'];
                                            $rres = mysqli_query($con, $rqry);
                                            if ($rrow = mysqli_fetch_array($rres)) {
                                                
                                                $i = 0;
                                                for ($j = 0; $j < 5; $j++) {
                                                    if ($i < $rrow['avgrate']) {
                                            ?>
                                    <li class="fa fa-star"></li>
                        <?php
                                                    }
                                                    $i++;
                                                }
                                            }
                        ?>
                    </div>
                </div>



                <?php
                $mapdata = $link->rawQueryOne("select map from vendorregistrationtb where vendorID=" . $crow['vendorID']);
                ?>
                <div class="col-md-4 venue-action"> <a target="_blank" href="<?php echo $mapdata['map']; ?>" class="btn btn-primary">VIEW MAP</a>

                    <?php
                    $packageID = $_REQUEST['packageID'];
                    if ($sflag == 1) {
                        $cart_check = $link->rawQueryone("select * from carttb where packageID=? and customerID=? and orderproductID=0", array($packageID, $customerID));
                    } else {
                        $cart_check = $link->rawQueryone("select * from carttb where packageID=? and customerSessionID=? and orderproductID=0", array($packageID, $customerSessionID));
                    }
                    if ($link->count > 0) {
                    ?>
                        <a href="viewcart.php" class="btn btn-default">Already In Cart</a>
                    <?php
                    } else {
                    ?>
                        <a href="insert_cart.php?packageID=<?php echo $_REQUEST['packageID']; ?>" class="btn btn-default">Book Venue</a>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
        <div class="main-container">
            <div class="container">
                <div class="row">
                    <?php
                    $cqry = "select * from packagetb where packageID=" . $_REQUEST['packageID'];
                    $cres = mysqli_query($con, $cqry);
                    while ($crow = mysqli_fetch_array($cres)) {
                    ?>
                        <div class="col-md-8 page-description">
                            <div class="venue-details">
                                <h2>Package Details</h2>
                                <?php echo $crow['description'] ?>
                            </div>
                            <!-- comments -->
                            <div class="customer-review">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="review-list">
                                            <!-- First Comment -->
                                            <div class="row">
                                                <?php

                                                $rqry = "select * from product_review where packageID=" . $_REQUEST['packageID'];
                                                $rres = mysqli_query($con, $rqry);
                                                while ($rrow = mysqli_fetch_array($rres)) {
                                                ?>
                                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                                        <?php
                                                        $rdata = $link->rawQueryOne("select profile from customerregistrationtb c,product_review r where c.customerID=r.customerID");
                                                        ?>

                                                        <div class="user-pic"><img class="img-responsive img-circle" src="<?php echo $rdata['profile'] ?>"></div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <div class="panel panel-default arrow left">
                                                            <div class="panel-body">
                                                                <div class="text-left">
                                                                    <h3><?php echo $rrow['reviewTitle'] ?></h3>
                                                                    <?php
                                                                    $i = 0;
                                                                    for ($j = 0; $j < 5; $j++) {
                                                                        if ($i < $rrow['package_review_rating']) {
                                                                    ?>
                                                                            <li class="fa fa-star"></li>
                                                                    <?php
                                                                        }
                                                                        $i++;
                                                                    }

                                                                    ?>
                                                                </div>
                                                                <div class="review-post">
                                                                    <p><?php echo $rrow['package_review_message'] ?> </p>
                                                                </div>

                                                                <div class="review-user">By <a href="#"><?php echo $rrow['package_review_name'] ?></a>, on <span class="review-date"></span><?php echo $rrow['reviewDate'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>



                                        </div>
                                        <?php
                                        if ($sflag == 1) {
                                        ?> 
                                            <div class="review">
                                                <a class="btn btn-primary btn-block btn-lg" role="button" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review"> Write A Review </a>
                                            </div>
                                            <div class="collapse review-list review-form" id="review">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <h1>Write Your Review</h1>
                                                        <form class="" action="insertreview.php" method="post">
                                                            <div class="rating-group">

                                                                <div class="star-rating">
                                                                    <span class="fa fa-star-o" data-rating="1"></span>
                                                                    <span class="fa fa-star-o" data-rating="2"></span>
                                                                    <span class="fa fa-star-o" data-rating="3"></span>
                                                                    <span class="fa fa-star-o" data-rating="4"></span>
                                                                    <span class="fa fa-star-o" data-rating="5"></span>
                                                                    <input type="hidden" name="rating" class="rating-value" value="2">
                                                                    <input type="hidden" name="packageID" value="<?php echo $_REQUEST['packageID'] ?>">

                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="control-label" for="name">Name</label>
                                                                <div class="">
                                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="control-label" for="email">E-Mail</label>
                                                                <div class=" ">
                                                                    <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class=" control-label" for="reviewtitle">Review Title</label>
                                                                <div class=" ">
                                                                    <input id="reviewtitle" name="reviewtitle" type="text" placeholder="Review Title" class="form-control input-md" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class=" control-label" for="reviewtitle">Review Title</label>
                                                                <div class=" ">
                                                                    <input id="reviewdate" name="reviewdate" type="date" placeholder="Select Date" class="form-control input-md" required>
                                                                </div>
                                                            </div>
                                                            <!-- Textarea -->
                                                            <div class="form-group">
                                                                <label class=" control-label">Write Review</label>
                                                                <div class="">
                                                                    <textarea name="message" class="form-control" rows="8">Write Review</textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="form-group">
                                                                <button name="submit" class="btn btn-primary btn-lg">Submit Review</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- /.comments -->
                        </div>

                        <div class="col-md-4 page-sidebar">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="venue-info">
                                        <!-- venue-info-->

                                        <div class="pricebox">
                                            <div>Avg price:</div>
                                            <span class="price"><?php echo $crow['packagePrice'] ?></span>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="col-md-12">
                            <div class="well-box" id="inquiry">
                                <h2>Send Enquiry to Vendor</h2>
                                <p>Fill in your details and a Venue Specialist will get back to you shortly.</p>
                                <form class="">
                                    <div class="form-group">
                                        <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                            <span class="help-block"> </span> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email-one">E-Mail:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="email-one" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <div class="default-calender">
                                        <div class="form-group">
                                            <label class="control-label" for="weddingdate">Wedding Date<span class="required">*</span></label>
                                            <div class="">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="weddingdate" placeholder="Wedding Date">
                                                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="guest">Number of Guests:<span class="required">*</span></label>
                                        <div class="">
                                            <select id="guest" name="guest" class="form-control">
                                                <option value="35 to 50">35 to 50</option>
                                                <option value="50  to 65">50 to 65</option>
                                                <option value="65 to 85">65 to 85</option>
                                                <option value="85 to 105">85 to 105</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Send me info via</label>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                            <label for="checkbox-0" class="control-label"> E-Mail </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                            <label for="checkbox-1" class="control-label"> Need Call back </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button name="submit" class="btn btn-default btn-lg btn-block">Book MY Venue now</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                                <div class="col-md-12 ">
                                    <div class="profile-sidebar well-box">
                                        <!-- SIDEBAR USERPIC -->
                                        <?php
                                        $data = $link->rawQueryOne("select * from packagetb where vendorID=" . $crow['vendorID']);
                                        ?>
                                        <?php
                                        $vdata = $link->rawQueryOne("select * from vendorregistrationtb where vendorID=" . $crow['vendorID']);
                                        ?>
                                        <div class="profile-userpic"><a href="vendorprofile.php?vendorID=<?php echo $crow['vendorID'] ?>"> <img src="vendor/<?php echo $vdata['vendorProfile'] ?>" class="img-responsive img-circle" alt="">
                                            </a>

                                        </div>

                                <?php

                            }
                        }
                                ?>

                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        <h2><?php echo $vdata['personName'] ?></h2>
                                    </div>

                                    <div class="profile-address">
                                        <center><i class="fa fa-map-marker"></i><?php echo $vdata['address'] ?></center>
                                    </div>
                                    <div class="profile-website">
                                        <center> <i class="fa fa-link"></i> <a href="#"><?php echo $vdata['emailID'] ?></a></center>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="social-sidebar side-box">
                                        <ul class="listnone follow-icon">
                                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <!-- Footer -->
            <?php
            include('footer.php');
            ?>

        </div>
        <!-- /.Footer -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Flex Nav Script -->
        <script src="js/jquery.flexnav.js" type="text/javascript"></script>
        <script src="js/navigation.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/header-sticky.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 9,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,

                    icon: 'images/pinkball.png'
                });

                marker.setMap(map);
                var infowindow = new google.maps.InfoWindow({
                    content: "Hello Address"
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script type="text/javascript" src="js/price-slider.js"></script>
        <script>
            $(function() {
                $("#weddingdate").datepicker();
            });
            var $star_rating = $('.star-rating .fa');

            var SetRatingStar = function() {
                return $star_rating.each(function() {
                    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('fa-star-o').addClass('fa-star');
                    } else {
                        return $(this).removeClass('fa-star').addClass('fa-star-o');
                    }
                });
            };

            $star_rating.on('click', function() {
                $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStar();
            });

            SetRatingStar();
            $(document).ready(function() {

            });
        </script>
</body>


</html>