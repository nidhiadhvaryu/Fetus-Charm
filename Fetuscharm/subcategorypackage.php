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
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fetus-charm-favicon.png" type="image/x-icon">

</head>

<body>
    <div class="collapse" id="searcharea">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn tp-btn-primary" type="button">Search</button>
            </span>
        </div>
    </div>

    <?php
    include('header.php');
    ?>
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-camera icon-white"></i>
                        </div>
                        <h1>Packages</h1>
                        <p>Find the perfect wedding Photographer for your wedding. Search wedding reception Photographer reviews and vendors in your area.</p>
                        <span class="label label-default">12 Venue Vendor</span>
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
                        <li><a href="#">Home</a></li>
                        <li class="active">Wedding Photographer Listings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="photographystyle">Photography Style</label>
                                <select id="photographystyle" name="photographystyle" class="form-control">
                                    <option value="">Select Photography</option>
                                    <option value="Barn">Artistic</option>
                                    <option value="Boutique">Classic</option>
                                    <option value="Documentary">Documentary</option>
                                    <option value="Dramatic">Dramatic</option>
                                    <option value="Life Style">Life Style</option>
                                    <option value="Modern">Modern</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="distance">Distance from</label>
                                <select id="distance" name="distance" class="form-control">
                                    <option value="">Select Distance</option>
                                    <option value="75 miles">75 miles</option>
                                    <option value="50  miles">50 miles</option>
                                    <option value="25 miles">25 miles</option>
                                    <option value="20 miles">20 miles</option>
                                    <option value="All">All</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="price-range default-range">
                                    <label for="amount" class="control-label">Price range:</label>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group rating">
                                <label class="control-label">Select Rating </label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                    <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                    <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                    <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                    <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                    <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                                <button type="reset" value="Reset" class="btn btn-reset"><i class="fa fa-repeat"></i>Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
							<?php
							$cqry = "select * from packagetb ,vendorregistrationtb  where packagetb.vendorID=vendorregistrationtb.vendorID and cityID=".$_REQUEST['cityID'];
							$cres = mysqli_query($con, $cqry);
							while ($crow = mysqli_fetch_array($cres)){
							?>
                       <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
							
                            <div class="vendor-image">
                                <!-- venue pic -->
								
                                <a href="packagedetails.php?packageID=<?php echo $crow['packageID'] ?>"><img src="vendor/<?php echo $crow['coverphoto']?>" alt="wedding venue" class="img-responsive"></a>
                                
                            </div>
                            <!-- /.venue pic -->
							
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="#" class="title"><?php echo $crow['packageName']?></a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i><?php echo $crow['shortdescription']?></p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">INR<?php echo $crow['packagePrice']?></div>
                                </div>
                            </div>
						</div>
							<?php
							}
							?>
                    
							
                    <!-- <div class="row">
                        <div class="col-md-12 tp-pagination">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
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
            <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
            <script type="text/javascript" src="js/price-slider.js"></script>
</body>


</html>