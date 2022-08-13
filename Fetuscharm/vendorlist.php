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
	?>
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                       
                        <h1>Vendor Details</h1>
                        <p>All the vendors that contains packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Vendor Details</li>
                    </ol>
                </div>
                <div class="col-md-4 text-right"> </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12" style="margin-bottom:30px;">
                <?php
							$cqry = "select * from vendorregistrationtb";
							$cres = mysqli_query($con, $cqry);
							while ($crow = mysqli_fetch_array($cres)) {
						?>
                    <div class="vendor-box-list">
                        <!-- vendor list -->
                        <div class="row">
						
                            <div class="col-md-5 no-right-pd">
                                <div class="vendor-image">
                                    <!-- venue pic -->
                                    <a href="vendorprofile.php?vendorID=<?php echo $crow['vendorID']?>"><img src="vendor/<?php echo $crow['vendorProfile']?>" class="img-responsive"></a>
                                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                                </div>
                            </div>
                            <!-- /.venue pic -->
                            <div class=" col-md-7 no-left-pd">
                                <!-- venue details -->
                                <div class="vendor-list-details">
                                    <div class="caption">
                                        <!-- caption -->
                                        <h2><a href="#" class="title"><?php echo $crow['companyName']?></a></h2>
                                        <p class="name"><?php echo $crow['personName']?></p>
										<p class="location"><i class="fa fa-map-marker"></i><?php echo $crow['address']?></p>

                                    </div>
                                    <!-- /.caption -->
                                    <div class="vendor-price">
                                        <div class="mail"></i><?php echo $crow['emailID']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                    </div>
					<?php
							}
					?>
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