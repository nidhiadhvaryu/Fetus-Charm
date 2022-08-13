<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
	header("location:index.php");
}
if (isset($_POST['submit']) == "submit") {
	$faceurl = $_POST['facebookurl'];
	$insturl = $_POST['instagramurl'];
	$youurl = $_POST['youtubeurl'];
	$comname = $_POST['Select'];
	$sql = $link->insert("vendor_socialmediatb", array("facebookURL" => $faceurl, "instagramURL" => $insturl, "youtubeURL" => $youurl, "vendorID" => $comname));
	header("location:viewvendorsocialmediadetail.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/fetus-charm-favicon.png">
	<title>Fetus Charm Vendor - Social Media </title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
	<script>
		function formvalidation() {
			var s = true;
			document.getElementById("a1").innerHTML = "";
			document.getElementById("a2").innerHTML = "";
			document.getElementById("a3").innerHTML = "";
			document.getElementById("a4").innerHTML = "";
			var fb = document.socialmediaform.facebookurl.value;
			var insta = document.socialmediaform.instagramurl.value;
			var utube = document.socialmediaform.youtubeurl.value;
			var companyname = document.getElementById("Select").value;

			if (fb == "") {
				document.getElementById("a1").innerHTML = "Enter FaceBook URL";
				s = false;
			}

			if (insta == "") {
				document.getElementById("a2").innerHTML = "Enter Instagram URL";
				s = false;
			}

			if (utube == "") {
				document.getElementById("a3").innerHTML = "Enter Youtube URL";
				s = false;
			}

			if (companyname == "Select Company Name") {
				document.getElementById("a4").innerHTML = "Select Company Name";
				s = false;
			}
			return s;
		}
	</script>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		<div id="loader"></div>
		<header class="main-header">
			<?php
			include('header.php');
			?>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar position-relative">
				<?php
				include('sidebar.php');
				?>
			</section>
		</aside>
		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Social Media</h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col">
									<form name="socialmediaform" method="post" onSubmit="return formvalidation();">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<h5>Company Name</h5>
													<div class="controls">
														<select name="Select" id="Select" class="form-select">
															<option>Select Company Name</option>
															<?php
															$dqry = "select * from vendorregistrationtb";
															$dres = mysqli_query($con, $dqry);
															while ($irow = mysqli_fetch_array($dres)) {
															?>
																<option value="<?php echo $irow[0] ?>"><?php echo $irow['companyName'] ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<span id="a4" style="color:red;">
												</div>
												<div class="form-group">
													<h5>Facebook URL</h5><span id="a1" style="color:red"></span>
													<div class="controls">
														<input type="text" id="facebookurl" name="facebookurl" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<h5>Instagram URL</h5>
													<span id="a2" style="color:red"></span>
													<div class="controls">
														<input type="text" id="instagramurl" name="instagramurl" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<h5>Youtube URL</h5>
													<span id="a3" style="color:red"></span>
													<div class="controls">
														<input type="text" id="youtubeurl" name="youtubeurl" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="text-xs-right">
											<button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<script src="js/vendors.min.js"></script>
		<script src="js/pages/chat-popup.js"></script>
		<script src="assets/icons/feather-icons/feather.min.js"></script>
		<script src="js/template.js"></script>
		<script src="js/pages/validation.js"></script>
		<script src="js/pages/form-validation.js"></script>

</body>

</html>