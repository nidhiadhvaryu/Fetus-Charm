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
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Fetus Charm Blog</h1>
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
                        <li class="active">Blogs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
			
                <div class="col-md-12 content-left">
				
                    <!-- content left -->
                    <div class="row">
					<?php
							$bqry = "select * from blogtb";
							$bres = mysqli_query($con, $bqry);
							while ($brow = mysqli_fetch_array($bres)) {
					?>
                        <div class="col-md-6 post-holder">
                            <div class="well-box">
                                <div class="sticky-sign"><i class="fa fa-bookmark"></i></div>
                                <!-- blog holder -->
                                <div class="post-image">
                                    <a href="#"><img src="<?php echo $brow['blogImage']?>" class="img-responsive" alt=""></a>
                                </div>
                                <h1 class="post-title"><a href="#"><?php echo $brow['blogTitle']?></a></h1>
                                <div class="post-meta"><span class="date-meta">ON <a href="#"><?php echo $brow['blogDate']?></a> /</span> <span class="admin-meta">BY <a href="#"><?php echo $brow['blogAuthor']?></a></span>  </div>
								<p><?php echo $brow['blogShortdescription']?></p>
								<p><?php echo $brow['blogDescription']?></p>
								
                            </div>
                        </div>
						<?php
							}
					?>
                    </div>
					
					
                </div>
				
              
            </div>
			
			
        </div>
    </div>
    <div class="footer">
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
</body>


</html>