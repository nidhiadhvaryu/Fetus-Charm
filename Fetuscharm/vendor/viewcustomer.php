<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
	header("location:index.php");
}
$qry = "select * from customerregistrationtb";
$result = mysqli_query($con, $qry);
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
	<title>Fetus Charm Vendor - View Customer</title>
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
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h4 class="page-title">View Customer Details</h4>
							<div class="d-inline-block align-items-center">
								<nav>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-body">
									<div class="table-responsive">
										<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
											<thead>
												<tr>
													<th>Fisrt Name</th>
													<th>Last Name </th>
													<th>Email ID</th>
													<th>Password</th>
													<th>Contact No</th>
													<th>Gender</th>
													<th>DOB</th>
													<th>AddressLine 1</th>
													<th>AddressLine 2</th>
													<th>Pincode</th>
													<th>Profile</th>
													<th>Country ID</th>
													<th>State ID</th>
													<th>City ID</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php
												foreach ($result as $rows) {
												?> <tr>
														<td><?php echo $rows['firstName'] ?></td>
														<td><?php echo $rows['lastName'] ?></td>
														<td><?php echo $rows['emailID'] ?></td>
														<td><?php echo $rows['password'] ?></td>
														<td><?php echo $rows['contactno'] ?></td>
														<td><?php echo $rows['gender'] ?></td>
														<td><?php echo $rows['DOB'] ?></td>
														<td><?php echo $rows['addressLine1'] ?></td>
														<td><?php echo $rows['addressLine2'] ?></td>
														<td><?php echo $rows['pincode'] ?></td>
														<td><img src="<?php echo $rows['profile']; ?>" style="height:50px;width:50px"></td>
														<td><?php echo $rows['countryID'] ?></td>
														<td><?php echo $rows['stateID'] ?></td>
														<td><?php echo $rows['cityID'] ?></td>

														<td><a href="deletecustomer.php"><img src="AdminFetuscharm/trash.png" style="height:30px;width:30px;"></a></td>
													</tr>
												<?php
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<script src="js/vendors.min.js"></script>
			<script src="js/pages/chat-popup.js"></script>
			<script src="assets/icons/feather-icons/feather.min.js"></script>
			<script src="assets/vendor_components/datatable/datatables.min.js"></script>
			<script src="js/template.js"></script>
			<script src="js/pages/data-table.js"></script>


</body>

</html>