<?php
include 'connection.php';
if (isset($_POST['submit']) == "submit") {

	$email = $_POST['emailid'];
	$qry = "select * from vendorregistrationtb where emailID='$email'";
	$res = mysqli_query($con, $qry);
	$count = mysqli_num_rows($res);
	if ($count > 0) {

		header("location:vendorregistration.php?err=1");
	} else {
		$comname = $_POST['companyname'];
		$pername = $_POST['personname'];
		$cat = $_POST['categoryselect'];
		$email = $_POST['emailid'];
		$pass = $_POST['password'];
		$addr = $_POST['address'];
		$m=$_POST['map'];
		$conno = $_POST['contactno'];
		$country = $_POST['countryselect'];
		$state = $_POST['stateselect'];
		$city = $_POST['cityselect'];


		$sql = $link->insert("vendorregistrationtb", array("companyName" => $comname, "personName" => $pername, "companyType" => $cat, "emailID" => $email, "password" => $pass, "address" => $addr,"map"=>$m, "contactno" => $conno, "countryID" => $country, "stateID" => $state, "cityID" => $city));
		if ($sql) {
			$vimg = $_FILES['vendorprofile']['name'];
			$vext = pathinfo($vimg, PATHINFO_EXTENSION);
			$vfilename_without_ext = pathinfo($vimg, PATHINFO_FILENAME);

			$vpimage = $vfilename_without_ext . $sql . '.' . $vext;

			if (move_uploaded_file($_FILES['vendorprofile']['tmp_name'], "files/profile/" . $vpimage)) {
				$link->where('vendorID', $sql);
				$a1 = $link->update("vendorregistrationtb", array("vendorProfile" => "files/profile/" . $vpimage));
			}
		}
		if ($sql) {
			$img = $_FILES['vendoridproof']['name'];
			$ext = pathinfo($img, PATHINFO_EXTENSION);
			$filename_without_ext = pathinfo($img, PATHINFO_FILENAME);

			$pimage = $filename_without_ext . $sql . '.' . $ext;

			if (move_uploaded_file($_FILES['vendoridproof']['tmp_name'], "files/idproof/" . $pimage)) {
				$link->where('vendorID', $sql);
				$a2 = $link->update("vendorregistrationtb", array("company_Vendor_IDProof" => "files/idproof/" . $pimage));
			}
		}
		header("location:index.php");
	}
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
			document.getElementById("a3").innerHTML = "";
			document.getElementById("a4").innerHTML = "";
			document.getElementById("a5").innerHTML = "";
			document.getElementById("a6").innerHTML = "";
			document.getElementById("a7").innerHTML = "";
			document.getElementById("a8").innerHTML = "";
			document.getElementById("a9").innerHTML = "";
			document.getElementById("a10").innerHTML = "";
			document.getElementById("a11").innerHTML = "";
			document.getElementById("a12").innerHTML = "";
			document.getElementById("a13").innerHTML = "";
			document.getElementById("a14").innerHTML = "";

			var cn = document.vendorregistrationform.companyname.value;
			var re = /^[A-Za-z]{3,30}$/;



			if (cn == 0) {
				document.getElementById("a1").innerHTML = "Enter your company name";
				check = false;
			}
			var pn = document.vendorregistrationform.personname.value;
			if (pn == 0) {
				document.getElementById("a2").innerHTML = "Enter your person name";
				check = false;
			}

			var ct = document.getElementById("categoryselect").value;
			if (ct == "Select Category") {
				document.getElementById("a3").innerHTML = "Select Company Category";
				check = false;
			}

			var em = document.vendorregistrationform.emailid.value;
			var e = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			if (em == 0) {
				document.getElementById("a4").innerHTML = "Enter your email";
				check = false;
			} else if (!e.test(em)) {
				document.getElementById("a4").innerHTML = "Enter valid email";
				check = false;
			}
			var pw = document.vendorregistrationform.password.value;
			if (pw == 0) {
				document.getElementById("a5").innerHTML = "Create your password";
				check = false;
			} else if (pw.length < 8) {
				document.getElementById("a5").innerHTML = "Password length must be atleast 8 characters ";
				check = false;
			} else if (pw.length > 15) {
				document.getElementById("a5").innerHTML = "Password length must not exceed 15 characters";
				check = false;
			}
			var pw2 = document.vendorregistrationform.password2.value;
			if (pw2 == 0) {
				document.getElementById("a6").innerHTML = "Re-enter your password ";
				check = false;
			} else if (pw != pw2) {
				document.getElementById("a6").innerHTML = "Password did not match";
				check = false;
			}
			var addr = document.vendorregistrationform.address.value;
			if (addr == 0) {
				document.getElementById("a7").innerHTML = "Enter your Address";
				check = false;
			}
			var mn = document.vendorregistrationform.contactno.value;
			if (mn == 0) {
				document.getElementById("a8").innerHTML = "Enter Contact no ";
				check = false;
			} else if (isNaN(mn)) {
				document.getElementById("a8").innerHTML = "Enter only Digits";
				check = false;
			} else if (mn.length == 10) {

			} else {
				document.getElementById("a8").innerHTML = "Enter 10 Digits only";
				check = false;
			}
			var prof = document.vendorregistrationform.vendorprofile.value;
			if (prof == 0) {
				document.getElementById("a9").innerHTML = "Upload your Profile here ";
				check = false;
			}

			var f = document.vendorregistrationform.vendoridproof.value;
			if (f == 0) {
				document.getElementById("a10").innerHTML = "Upload your document here ";
				check = false;
			}
			var coun = document.getElementById("countryselect").value;
			if (coun == "Select Country") {
				document.getElementById("a11").innerHTML = "Select your country";
				check = false;
			}
			var state = document.getElementById("stateselect").value;
			if (state == "Select State") {
				document.getElementById("a12").innerHTML = "Select your state";
				check = false;
			}
			var city = document.getElementById("cityselect").value;
			if (city == "Select City") {
				document.getElementById("a13").innerHTML = "Select your city";
				check = false;
			}
			var lo= document.vendorregistrationform.map.value;
			if (lo == 0) {
				document.getElementById("a14").innerHTML = "Enter your location";
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
	<title>Fetus Charm Vendor - Registration </title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-color:#ffdde2">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register as New Vendor</p>
							</div>
							<div class="p-40">
								<form method="post" name="vendorregistrationform" onSubmit="return formvalidation();" enctype="multipart/form-data">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="companyname" name="companyname" class="form-control ps-15 bg-transparent" placeholder="Company Name">
										</div>
										<span id="a1" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="personname" name="personname" class="form-control ps-15 bg-transparent" placeholder="Person Name">
										</div>
										<span id="a2" style="color:red;">
									</div>
									<div class="form-group">

										<div class="controls">
											<select name="categoryselect" id="categoryselect" class="form-select">
												<option>Select Category</option>
												<?php

												$dqry = "select * from categorytb";
												$dres = mysqli_query($con, $dqry);
												while ($irow = mysqli_fetch_array($dres)) {
												?>
													<option value="<?php echo $irow[1] ?>"><?php echo $irow[1] ?></option>
												<?php
												}
												?>
											</select>
										</div>
										<span id="a3" style="color:red;">
									</div>

									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" name="emailid" id="emailid" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
										<span id="a4" style="color:red;">
									</div>
									<div>
										<?php
										$errmsg = "Email Already exist";
										if (isset($_GET['err']) && $_GET['err'] == 1)
											echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
										?>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
										<span id="a5" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="password2" name="password2" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
										</div>
										<span id="a6" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="address" name="address" class="form-control ps-15 bg-transparent" placeholder="Address">
										</div>
										<span id="a7" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="map" name="map" class="form-control ps-15 bg-transparent" placeholder="Location">
										</div>
										<span id="a14" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="contactno" name="contactno" class="form-control ps-15 bg-transparent" placeholder="Contact No.">
										</div>
										<span id="a8" style="color:red;">
									</div>
									<lable>Upload your Profile</lable>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-folder"></i></span>
											<input type="file" id="vendorprofile" name="vendorprofile" class="form-control">
										</div>
										<span id="a9" style="color:red;">
									</div>
									<lable>Upload your ID Proof</lable>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-folder"></i></span>
											<input type="file" id="vendoridproof" name="vendoridproof" class="form-control">
										</div>
										<span id="a10" style="color:red;">
									</div>
									<div class="form-group">
										<div class="controls">
											<select name="countryselect" id="countryselect" class="form-select">
												<option>Select Country</option>
												<?php
												$dqry = "select * from countrytb";
												$dres = mysqli_query($con, $dqry);
												while ($irow = mysqli_fetch_array($dres)) {
												?>
													<option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
												<?php
												}
												?>
											</select>
										</div>
										<span id="a11" style="color:red;">
									</div>
									<div id="statedropdown">
										<div class="form-group">

											<div class="controls">
												<select name="stateselect" id="stateselect" class="form-select" onchange="statedropdown(this.value);">
													<option>Select State</option>
													<?php

													$dqry = "select * from statetb";
													$dres = mysqli_query($con, $dqry);
													while ($irow = mysqli_fetch_array($dres)) {
													?>
														<option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
													<?php
													}
													?>
												</select>
											</div>
											<span id="a12" style="color:red;">
										</div>
									</div>
									<div id="citydropdown">
										<div class="form-group">
											<div class="controls">
												<select name="cityselect" id="cityselect" class="form-select">
													<option>Select City</option>
												</select>
											</div>
											<span id="a13" style="color:red;">
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<div class="checkbox">
												<input type="checkbox" id="basic_checkbox_1">
											</div>
										</div>
										<!-- /.col -->
										<div class="row">
											<div class="col-12 text-center">
												<button type="submit" id="submit" name="submit" class="btn btn-info margin-top-10">SIGN IN</button>
											</div>
										</div>
										<div class="col-12 text-center">
											<p class="mt-15 mb-0 text-center">Already have an account?<a href="index.php" class="text-danger ms-5"> Sign In</a></p>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<p class="mt-20 text-white">- Register With -</p>
					<p class="gap-items-2 mb-20">
						<a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>
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