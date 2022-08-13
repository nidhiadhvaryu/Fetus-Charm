<?php
include 'connection.php';
session_start();
if (isset($_SESSION['aun'])) {
} else {
	header("location:index.php");
}
$subcat_id = $_REQUEST['subcategoryID'];
$data = $link->rawQueryOne("select * from subcategorytb where subcategoryID=?", array($subcat_id));
if ($link->count == 0) {
	echo "Data Not Found";
}
if (isset($_POST['submit']) == "submit") {
	$subcat_name = $_POST['subcategoryname'];
	$cat = $_POST['Select'];
	$link->where("subcategoryID", $subcat_id);
	$sql = $link->update("subcategorytb", array("subcategoryName" => $subcat_name, "categoryID" => $cat));

	header("location:viewsubcategory.php");
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
			var n = document.subcategoryform.subcategoryname.value;
			var re = /^[A-Za-z]{3,15}$/;
			if (n == 0) {
				document.getElementById("a1").innerHTML = "Enter Sub Category ";
				check = false;
			}

			var s = document.getElementById("Select").value;
			if (s == "Select") {
				document.getElementById("a2").innerHTML = "Select Category";
				check = false;
			}
			return check;
		}
	</script>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/fetus-charm-favicon.png">
		<title>Fetus Charm Admin - Subcategory </title>
		<link rel="stylesheet" href="css/vendors_css.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skin_color.css">

	</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		<div id="loader"></div>
		<header class="main-header">
			<?php
			include("header.php");
			?>
		</header>
		<aside class="main-sidebar">
			<?php
			include("sidebar.php");
			?>
		</aside>
		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Sub Category Form </h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col">
									<form method="post" name="subcategoryform" onSubmit="return formvalidation();">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<h5>Select Category <span class="text-danger"></span></h5>
													<div class="controls">
														<select name="Select" id="Select" class="form-select">
															<option>Select</option>
															<?php
															$dqry = "select * from categorytb";
															$dres = mysqli_query($con, $dqry);
															while ($irow = mysqli_fetch_array($dres)) {
															?>
																<option <?php if ($data['categoryID'] == $irow['categoryID']) echo "selected=\"selected\""; ?> value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
															<?php
															}
															?>
														</select>
													</div>
													<span id="a2" style="color:red;">
												</div>
												<div class="form-group">
													<h5>Sub Category Name <span class="text-danger"></span></h5>
													<div class="controls">
														<input type="text" class="form-control" name="subcategoryname" value="<?php echo $data['subcategoryName']; ?>">
													</div>
													<span id="a1" style="color:red;">
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