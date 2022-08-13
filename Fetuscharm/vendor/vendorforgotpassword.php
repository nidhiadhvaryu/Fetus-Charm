<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/fetus-charm-favicon.png">
	<title>Fetus Charm Vendor - Recover Password</title>
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/indexbackground.jpg)">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h3 class="mb-0 text-primary">Recover Password</h3>
							</div>
							<div class="p-40">
								<form action="forget-password-code.php" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" name="email" id="email" class="form-control ps-15 bg-transparent" placeholder="Your Email" required>
										</div>
										<div><center><?php
												if (isset($_REQUEST['err']) && $_REQUEST['err'] == 1) {
													echo "<span style='color:green;font-weight: 600;'>Reset Password link send to your E-mail.</span>";
												} else if (isset($_REQUEST['err']) && $_REQUEST['err'] == 2) {
													echo "<span style='color:red;font-weight: 600;'>Mail not sent Try again later.</span>";
												} else if (isset($_REQUEST['err']) && $_REQUEST['err'] == 3) {
													echo "<span style='color:red;font-weight: 600;'>Email Id does not exists.</span>";
												}
												?></center>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-info margin-top-10">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>

</body>

</html>