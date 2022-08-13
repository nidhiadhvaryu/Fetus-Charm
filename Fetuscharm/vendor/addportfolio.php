<?php
include 'connection.php';
session_start();
if (isset($_SESSION['un'])) {
} else {
	header("location:index.php");
}
if (isset($_POST['submit']) == "submit") {
	$pack_name = $_POST['selectpackage'];
	foreach ($_FILES["album"]["tmp_name"] as $key => $tmp_name) {
		$sql = $link->insert("portfoliotb", array("packageID" => $pack_name));
		$iname = $_FILES["album"]["name"][$key];
		$ext = pathinfo($iname, PATHINFO_EXTENSION);
		$y = "portfoilioImagegallery" . $sql . "." . $ext;
		if (move_uploaded_file($_FILES["album"]["tmp_name"][$key], "files/portfolio/" . $y)) {
			$link->where('portfolioID', $sql);
			$z = $link->update('portfoliotb', array('album' => $y));
		}
	}
	header("location:viewportfolio.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script>
		function formvalidation() {
			var check = true;
			document.getElementById("a1").innerHTML = "";
			document.getElementById("a2").innerHTML = "";
			var add = document.getElementById("selectpackage").value;
			if (add == "Select Package") {
				document.getElementById("a1").innerHTML = "Select Package";
				check = false;
			}
			var f = document.portfolioform.album.value;
			if (f == 0) {
				document.getElementById("a2").innerHTML = "Upload your document here ";
				check = false;
			}
			return check;
		}
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/fetus-charm-favicon.png">

	<title>Fetus Charm Vendor - Portfolio </title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

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
							<h4 class="box-title">Portfolio</h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col">
									<form novalidate method="post" name="portfolioform" onSubmit="return formvalidation();" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<h5>Package <span class="text-danger"></span></h5>
													<div class="controls">
														<select name="selectpackage" id="selectpackage" class="form-select">
															<option>Select Package</option>
															<?php
															$dqry = "select * from packagetb";
															$dres = mysqli_query($con, $dqry);
															while ($irow = mysqli_fetch_array($dres)) {
															?>
																<option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<span id="a1" style="color:red;">
												</div>
												<div class="form-group">
													<h5>Album<span class="text-danger"></span></h5>
													<div class="controls">
														<input type="file" id="album" name="album[]" multiple class="form-control">
													</div>
													<span id="a2" style="color:red;">
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