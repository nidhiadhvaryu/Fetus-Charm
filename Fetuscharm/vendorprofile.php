<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Fetus Charm | Find The Best Vendors</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
</head>

<body>


    <?php
    include('header.php');
    ?>
    <div class="vendor-page-header">
        <div class="vendor-profile-img"> </div>
        <div class="vendor-profile-info">
            <div class="container">
                <div class="row">
                    <?php
                    $cqry = "select * from vendorregistrationtb where vendorID=" . $_REQUEST['vendorID'];
                    $cres = mysqli_query($con, $cqry);
                    while ($crow = mysqli_fetch_array($cres)) {
                    ?>
                        <div class="col-md-3 hidden-xs">
                            <div class="vendor-profile-block">
                                <div class="vendor-profile"> <img src="vendor/<?php echo $crow['vendorProfile'] ?>" alt="" class="img-responsive"> </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="profile-meta mb30">
                                <div class="row">

                                    <div class="col-md-12">
                                        <h1 class="vendor-profile-title"><?php echo $crow['personName'] ?></h1>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4"><span class="meta-address"> </i> <span class="address"> <?php echo $crow['companyName'] ?> </span> </span>
                                    </div>
                                    <div class="col-md-4"><span class="meta-email"><i class="fa fa-map-marker"></i><?php echo $crow['address'] ?></span></div>
                                    <div class="col-md-4"><span class="meta-email"><i class="fa fa-envelope"></i><?php echo $crow['emailID'] ?></span></div>
                                    <div class="col-md-4"><span class="meta-call"><i class="fa fa-phone"></i><?php echo $crow['contactno'] ?></span></div>
                                </div>
                            </div>
                        <?php
                    }
                        ?>
                        <?php
                        $cqry = "select * from vendor_socialmediatb where vendorID=" . $_REQUEST['vendorID'];
                        $cres = mysqli_query($con, $cqry);
                        while ($crow = mysqli_fetch_array($cres)) {
                        ?>

                            <div class="profile-meta">
                                <div class="row">
                                    <div><i class="fa fa-facebook-square"><?php echo $crow['facebookURL'] ?></i></div>
                                    <div>   <i class="fa fa-instagram"><?php echo $crow['instagramURL'] ?></i></div>
                                       <div><i class="fa fa-link"><?php echo $crow['youtubeURL'] ?></i></div>
                                    </div>
                                <?php
                            }
                                ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <div class="container">
            <div class="row">
                <div class="venue-details">
                    <div class="col-md-9">
                        <div class="st-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#myListing" title="Gallery" aria-controls="myListing" role="tab" data-toggle="tab"> <i class="fa fa-list"></i><span class="tab-title"> My Listing</span></a>
                                </li>
                                
                                <li role="presentation"> <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i> <span class="tab-title"> About Vendor</span> </a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- tab content start-->
                                <div role="tabpanel" class="tab-pane fade in active" id="myListing">
                                    <div class="row">
                                        <?php
                                        $cpqry = "select * from packagetb where vendorID=" . $_REQUEST['vendorID'];
                                        $cpres = mysqli_query($con, $cpqry);
                                        while ($cprow = mysqli_fetch_array($cpres)) {
                                        ?>

                                            <div class="col-md-6">
                                                <div class="vendor-list-block mb30">
                                                    <!-- vendor list block -->
                                                    <div class="vendor-img">
                                                    <a href="packagedetails.php?packageID=<?php echo $cprow['packageID']?>"><img style="width: 379px;"; src="vendor/<?php echo $cprow['coverphoto']?>" class="img-responsive"></a>
                                                        <?php
                                                        $data = $link->rawQueryOne("select categoryName from categorytb c,packagetb p where c.categoryID=p.categoryID");
                                                        ?>
                                                        <div class="category-badge"><a href="#" class="category-link"><?php echo $data['categoryName'] ?></a></div>
                                                        <div class="price-lable"><?php echo $cprow['packagePrice'] ?></div>
                                                        <div class="favorite-action"> <a href="#" class="fav-icon"><i class="fa fa-heart"></i></a> </div>
                                                    </div>
                                                    <div class="vendor-detail">
                                                        <!-- vendor details -->
                                                        <div class="caption">
                                                            <h2><a href="#" class="title"><?php echo $cprow['packageName'] ?></a></h2>
                                                            <div class="vendor-meta"> <span class="location"> <?php echo $cprow['shortdescription'] ?></span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.vendor details -->
                                                </div>
                                                <!-- /.vendor list block -->
                                            </div>



                                        <?php
                                        }
                                        ?>



                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="about">
                                    <div class="venue-details">
                                        <?php
                                        $desdata = $link->rawQueryOne("select vendorDescription from vendorregistrationtb where vendorID=".$_REQUEST['vendorID']);
                                        ?>
                                        <?php echo $desdata['vendorDescription'] ?>


                                    </div>
                                </div>
                            </div>
                            <!-- /.tab content start-->
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
        <!-- /.Footer -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#weddingdate").datepicker();
        });
    </script>
</body>


</html>