<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
	header("location:index.php");
}
$cat_id = $_REQUEST['categoryID'];
$data = $link->rawQueryOne("select * from categorytb where categoryID=?", array($cat_id));
if ($link->count == 0) {
	echo "Data Not Found";
}
if (isset($_POST['submit']) == "submit") {
	$cat_name = $_POST['categoryname'];
	$link->where("categoryID", $cat_id);
	$sql = $link->update("categorytb", array("categoryName" => $cat_name));
	if ($sql) {
		$img = $_FILES['categoryimage']['name'];
		if ($img != null || $img != "") {
			$ext = pathinfo($img, PATHINFO_EXTENSION);
			$filename_without_ext = pathinfo($img, PATHINFO_FILENAME);
			$pimage = $filename_without_ext . $sql . '.' . $ext;
			if (move_uploaded_file($_FILES['categoryimage']['tmp_name'], "files/category/" . $pimage)) {
				$link->where('categoryID', $cat_id);
				$a1 = $link->update("categorytb", array("categoryImage" => "files/category/" . $pimage));
			}
		}
	}
	header("location:viewcategory.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script>
		function formvalidation() {
			var check = true;
			document.getElementById("a1").innerHTML = "";
			var n = document.categoryform.categoryname.value;
			var re = /^[A-Za-z]{3,15}$/;
			if (n == 0) {
				document.getElementById("a1").innerHTML = "Enter Category ";
				check = false;
			} else if (!re.test(n)) {
				document.getElementById("a1").innerHTML = "Enter only Character";
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
	<title>Fetus Charm Admin - Category</title>
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
							<h4 class="box-title">Category Form </h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col">
									<form novalidate method="post" name="categoryform" onSubmit="return formvalidation();" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<h5>Category Name <span class="text-danger"></span></h5>
													<div class="controls">
														<input type="text" id="categoryname" name="categoryname" class="form-control" value="<?php echo $data['categoryName']; ?>">
													</div>
													<span id="a1" style="color:red;">
												</div>
												<div>
													<?php
													$errmsg = "Category Already exist";
													if (isset($_GET['err']) && $_GET['err'] == 1)
														echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
													?>
												</div>
												<div class="form-group">
													<h5>Category Image<span class="text-danger"></span></h5>
													<div class="controls">
														<input type="file" id="categoryimage" name="categoryimage" class="form-control">
														<img src="<?php echo $data['categoryImage']; ?>" style="height:50px;width:50px">
													</div>
												</div>
												<div class="text-xs-right">
													<button type="submit" value="submit" name="submit" class="btn btn-info">Submit</button>
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