<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Fetus Chram | Find The Best Vendors</title>
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
    <!-- favicon icon -->
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
                        <p>All the packages with the best rates are avialable here.</p>

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
                        <li class="active">Sub Category Packages</li>
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
                        <form action="subcategorypackage2.php">
                            <div id="categorydropdown">
                                <div class="col-md-12 form-group">
                                    <label class="control-label" for="photographystyle">Category</label>
                                    <select id="selectcategory" name="selectcategory" class="form-control" required onchange="categorydropdown(this.value);">
                                        <option value="">Select Category</option>
                                        <?php
                                        $cqry = "select * from categorytb ";
                                        $catres = mysqli_query($con, $cqry);
                                        while ($cirow = mysqli_fetch_array($catres)) {
                                        ?>
                                            <option value="<?php echo $cirow[0] ?>"><?php echo $cirow[1] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <div id="subcategorydropdown">
                                <div class="col-md-12 form-group">
                                    <label class="control-label" for="distance">Sub Category</label>
                                    <select id="selectsubcategory" name="selectsubcategory" class="form-control">
                                        <option>Select Sub Category</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 form-group" style="
    padding: 15px;
">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        $cqry = "select * from packagetb where subcategoryID=" . $_REQUEST['subcategoryID'];
                        $cres = mysqli_query($con, $cqry);
                        while ($crow = mysqli_fetch_array($cres)) {
                        ?>
                            <div class="col-md-4 vendor-box">
                                <!-- venue box start-->

                                <div class="vendor-image">
                                    <!-- venue pic -->

                                    <a href="packagedetails.php?packageID=<?php echo $crow['packageID'] ?>"><img src="vendor/<?php echo $crow['coverphoto'] ?>" alt="wedding venue" class="img-responsive"></a>

                                </div>
                                <!-- /.venue pic -->

                                <div class="vendor-detail">
                                    <!-- venue details -->
                                    <div class="caption">
                                        <!-- caption -->
                                        <h2><a href="#" class="title"><?php echo $crow['packageName'] ?></a></h2>
                                        <p><?php echo $crow['shortdescription'] ?></p>

                                       
                                    </div>
                                    <!-- /.caption -->
                                    <div class="vendor-price">
                                        <div class="price">INR<?php echo $crow['packagePrice'] ?></div>
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