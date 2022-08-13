<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
</head>

<body>
    <?php
    include('header.php');
    if ($sflag == 1) {
        $data = $link->rawQueryOne("select * from customerregistrationtb where customerID=" . $_SESSION['cid']);
    }

    ?>

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well-box" id="inquiry">
                                <h2>Billing Details</h2>
                                <form method="post" name="checkoutform" onSubmit="return formvalidation();" action="insertcheckout.php">
                                    <div class="form-group">
                                        <label class="control-label">First Name:</label>
                                        <div>
                                            <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" value=<?php if ($sflag == 1) {
                                                                                                                                                        echo $data['firstName'];
                                                                                                                                                    } ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name:</label>
                                        <div>
                                            <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" value=<?php if ($sflag == 1) {
                                                                                                                                                        echo $data['lastName'];
                                                                                                                                                    } ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">E-Mail</label>
                                        <div>
                                            <input id="mail" name="mail" type="text" placeholder="E-Mail" class="form-control input-md" value=<?php if ($sflag == 1) {
                                                                                                                                                    echo $data['emailID'];
                                                                                                                                                } ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone:</label>
                                        <div>
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" value=<?php if ($sflag == 1) {
                                                                                                                                                    echo $data['contactno'];
                                                                                                                                                } ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pincode:</label>
                                        <div>
                                            <input id="pcode" name="pcode" type="text" placeholder="Pincode" class="form-control input-md" value=<?php if ($sflag == 1) {
                                                                                                                                                        echo $data['pincode'];
                                                                                                                                                    } ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">AddressLine1</label>
                                        <div class="control-label">
                                            <textarea name="adl1" id="adl1" placeholder="House no.,Street/Society" class="form-control input-md"><?php if ($sflag == 1) {
                                                                                                                                                        echo $data['addressLine1'];
                                                                                                                                                    } ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">AddressLine2</label>
                                        <div class="control-label">
                                            <textarea name="adl2" id="adl2" placeholder="Area name" class="form-control input-md"><?php if ($sflag == 1) {
                                                                                                                                        echo $customerdata['addressLine2'];
                                                                                                                                    } ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label">
                                            <select name="countryselect" id="countryselect" class="form-control input-md">
                                                <option>Select Country</option>
                                                <?php

                                                $dqry = "select * from countrytb";
                                                $dres = mysqli_query($con, $dqry);
                                                while ($irow = mysqli_fetch_array($dres)) {
                                                    if ($sflag == 1) {
                                                ?>
                                                        <option <?php if ($data['countryID'] == $irow['countryID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="statedropdown">
                                        <div class="form-group">
                                            <div class="control-label">
                                                <select name="stateselect" id="stateselect" class="form-control input-md" onchange="statedropdown(this.value);">
                                                    <option>Select State</option>
                                                    <?php

                                                    $dqry = "select * from statetb";
                                                    $dres = mysqli_query($con, $dqry);
                                                    while ($irow = mysqli_fetch_array($dres)) {
                                                        if ($sflag == 1) {
                                                    ?>
                                                            <option <?php if ($data['stateID'] == $irow['stateID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="citydropdown">
                                        <div class="form-group">
                                            <div class="control-label">
                                                <select name="cityselect" id="cityselect" class="form-control input-md">
                                                    <option>Select City</option>
                                                    <?php

                                                    $dqry = "select * from citytb";
                                                    $dres = mysqli_query($con, $dqry);
                                                    while ($irow = mysqli_fetch_array($dres)) {
                                                        if($sflag==1){
                                                    ?>
                                                        <option <?php if ($data['cityID'] == $irow['cityID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                         <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                                        <?php
                                                    }
                                                }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 page-sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well-box" id="inquiry">
                                <h2>Order Details</h2>
                                <?php
                                if ($sflag == 1) {
                                    $cart_check = $link->rawQuery("select * from carttb c,packagetb p where c.packageID = p.packageID and customerID=? and orderproductID=0", array($customerID));
                                } else {
                                    $cart_check = $link->rawQuery("select * from carttb c,packagetb p where c.packageID = p.packageID and customerSessionID=? and orderproductID=0", array($customerSessionID));
                                }
                                $total = 0;
                                if ($link->count > 0) {
                                    foreach ($cart_check as $cat) {
                                        $total = $cat['packagePrice'] + $total;
                                ?>
                                        <input type="hidden" name="vendorID" value="<?php echo $_REQUEST['vendorID']; ?>">
                                        <input type="hidden" name="cartID[]" value="<?php echo $cat['cartID']; ?>">
                                        <input type="hidden" name="packageID[]" value="<?php echo $cat['packageID']; ?>">
                                        <input type="hidden" name="packagePrice[]" value="<?php echo $cat['packagePrice']; ?>">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo $cat['packageName']; ?></label>
                                            <label class="control-label" style="float:right"><?php echo $cat['packagePrice']; ?></label>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                                <input type="hidden" name="subTotal" value="<?php echo $total; ?>">

                                <div class="form-group">
                                    <label class="control-label">Grand Total</label>
                                    <label class="control-label" style="float:right"><?php echo $total; ?></label>
                                </div>
                                <div class="form-group">
                                    <button name="submit" value="submit" id="submit" class="btn btn-default btn-lg btn-block">Book Your Package Now</button>
                                </div>
                                </form>
                            </div>
                        </div>
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
    </script>
    <script>
        function statedropdown(val) {
            $.ajax({
                type: "POST",
                url: "citydd.php",
                data: "stateID=" + val,
                success: function(data) {
                    $('#citydropdown').html(data);
                }
            });
        }
    </script>
</body>


</html>