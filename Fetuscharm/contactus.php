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
			var n = document.contactform.cname.value;
			if (n == 0) {
				document.getElementById("a1").innerHTML = "Enter Your Name ";
				check = false;
			} 
            var em = document.contactform.cemail.value;
			var e = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			if (em == 0) {
				document.getElementById("a2").innerHTML = "Enter your email";
				check = false;
			} else if (!e.test(em)) {
				document.getElementById("a2").innerHTML = "Enter valid email";
				check = false;
			}
            var p = document.contactform.cphone.value;
			if (p == 0) {
				document.getElementById("a3").innerHTML = "Enter Your Phone Number ";
				check = false;
			} 
            var s = document.getElementById("selectcategory").value;
			if (s == "Select Category") {
				document.getElementById("a4").innerHTML = "Select Category";
				check = false;
			}
            var m = document.contactform.cmessage.value;
			if (m == 0) {
				document.getElementById("a5").innerHTML = "Enter Message ";
				check = false;
			} 
			return check;
		}
	</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fetus Charm | Find The Best Vendors</title>
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
    if (isset($_POST['submit']) == "submit") {

        $name = $_POST['cname'];
        $email = $_POST['cemail'];
        $cphone = $_POST['cphone'];
        $cat = $_POST['selectcategory'];
        $msg = $_POST['cmessage'];
        $sql = $link->insert("contacttb", array("Name" => $name, "Email" => $email, "Phone" => $cphone, "Category" => $cat, "Message" => $msg));
        header("location:contactus.php");
    }
    ?>
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Contact us</h1>
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
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-box">
                        <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                        <form method="post" name="contactform" onSubmit="return formvalidation();">
                            <div class="form-group">
                                <label class="control-label">Full Name </label>
                                <input type="text" id="cname" name="cname" placeholder="Name" class="form-control input-md">
                                <span id="a1" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class=" control-label">E-Mail</label>
                                <input type="text" id="cemail" name="cemail" placeholder="E-Mail" class="form-control input-md">
                                <span id="a2" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Phone</label>
                                <input type="text" id="cphone" name="cphone" placeholder="Phone" class="form-control input-md">
                                <span id="a3" style="color:red;">
                            </div>
                            
                            <div class="form-group">
                                <label class=" control-label">Category </label>
                                <select id="selectcategory" name="selectcategory" class="form-control selectpicker">
                                    <option>Select Category</option>
                                    <?php
                                    $dqry = "select * from categorytb";
                                    $dres = mysqli_query($con, $dqry);
                                    while ($irow = mysqli_fetch_array($dres)) {
                                    ?>
                                        <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <span id="a4" style="color:red;">
                            </div>
                            <div class="form-group">
                                <label class="  control-label">Message</label>
                                <textarea class="form-control" rows="6" id="cmessage" name="cmessage"></textarea>
                                <span id="a5" style="color:red;">
                            </div>
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="well-box">
                        <ul class="listnone">
                            <li class="address">
                                <h2><i class="fa fa-map-marker"></i>Location</h2>
                                <p>Accrete InfoTech,Vesu</p>
                            </li>
                            <li class="email">
                                <h2><i class="fa fa-envelope"></i>E-Mail</h2>
                                <p>fetuscharm@gmail.com</p>
                            </li>
                            <li class="call">
                                <h2><i class="fa fa-phone"></i>Contact</h2>
                                <p>+918401706496</p>
                                <p>+919328152279</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-box">
                        <h2>Need Help ?</h2>
                        <p>Are you an advertiser enquiring about advertising in You &amp; Your Wedding or on weddingvendor? Please <a href="#">click here </a>to contact the advertising team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map" id="googleMap"></div>
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
</body>


</html>