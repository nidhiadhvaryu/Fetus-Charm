<?php
include("connection.php");
if (isset($_POST['submit'])) {
	$email = $_POST['un'];
	$password = $_POST['pw'];
	$qry = "select * from admintb where Username='$email' and Password='$password'";
	$res = mysqli_query($con, $qry);
	$count = mysqli_num_rows($res);
	if ($count > 0) {
		while ($row = mysqli_fetch_array($res)) {
			session_start();
			$_SESSION['aun'] = $email;
			if (!empty($_POST['remember'])) {
				setcookie('user', $email, time() + (365 * 24 * 60 * 60));
				setcookie('pwd', $password, time() + (365 * 24 * 60 * 60));
			} else {
				setcookie('user', '');
				setcookie('pwd', '');
			}
			header('location:dashboard.php');
		}
	} else {
		header('location:index.php?err=1');
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
			var u = document.adminform.un.value;
			var p = document.adminform.pw.value;
			if (u == 0) {
				document.getElementById("a1").innerHTML = "Enter username";
				check = false;
			}

			if (p == 0) {
				document.getElementById("a2").innerHTML = "Enter password";
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
	<title>Fetus Charm - Log in </title>
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
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue</p>
							</div>
							<div class="p-40">
								<form method="post" name="adminform" onSubmit="return formvalidation();">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" id="un" name="un" class="form-control ps-15 bg-transparent" placeholder="Username" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user']; } ?>">
										</div>
										<span id="a1" style="color:red;">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="pw" name="pw" class="form-control ps-15 bg-transparent" placeholder="Password" value="<?php if(isset($_COOKIE['pwd'])){ echo $_COOKIE['pwd']; } ?>">
										</div>
										<span id="a2" style="color:red;">
									</div>
									<div class="row">
										<div class="col-6">
											<div class="checkbox">
												<input type="checkbox" name="remember" id="basic_checkbox_1">
												<label for="basic_checkbox_1">Remember Me</label>
											</div>
										</div>
									
										<div>
											<?php
											$errmsg = "Invalid User";
											if (isset($_GET['err']) && $_GET['err'] == 1)
												echo '<center><span style="color:red;">' . $errmsg . '</span></center>';
											?>
										</div>
										<div class="col-12 text-center">
											<button type="submit" id="submit" name="submit" value="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="text-center">
							<p class="mt-20 text-white">- Sign With -</p>
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
</body>

</html>