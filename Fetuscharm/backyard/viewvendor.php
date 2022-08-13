<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
	header("location:index.php");
}
$qry = "select vendorID,companyName,personName,companyType,emailID,address,map,contactno,vendorProfile,company_Vendor_IDProof,isActive,countryName,stateName,cityName from vendorregistrationtb v,countrytb coun,statetb s,citytb c where v.countryID=coun.countryID and v.stateID=s.stateID and v.cityID=c.cityID ";
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
	<title>Fetus Charm Admin - Vendor</title>
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
							<h4 class="page-title">View Vendor Details</h4>
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
													<th>Company Name</th>
													<th>Person Name</th>
													<th>Company Type</th>
													<th>Email ID</th>
													<th>Address</th>
													<th>Contact No</th>
													<th>Vendor Profile</th>
													<th>Vendor ID Proof</th>
													<th>Country</th>
													<th>State</th>
													<th>City</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php
												foreach ($result as $rows) {
												?> <tr>
														<td><?php echo $rows['companyName'] ?></td>
														<td><?php echo $rows['personName'] ?></td>
														<td><?php echo $rows['companyType'] ?></td>
														<td><?php echo $rows['emailID'] ?></td>
														<td><?php echo $rows['address'] ?></td>
														<td><?php echo $rows['contactno'] ?></td>
														<td><img src="../vendor/<?php echo $rows['vendorProfile']; ?>" style="height:30px;width:100px"></td>
														<td><img src="../vendor/<?php echo $rows['company_Vendor_IDProof']; ?>" style="height:30%;width:100%"></td>
														<td><?php echo $rows['countryName'] ?></td>
														<td><?php echo $rows['stateName'] ?></td>
														<td><?php echo $rows['cityName'] ?></td>

														<td><a href="deletevendor.php?vendorID=<?php echo $rows['vendorID']; ?>"><img src="assets/images/trash.png" style="height:30px;width:50px;"></a></td>
														<td><?php if ($rows['isActive'] == 1) {
																echo "<a href='vendorstatus.php?vendorID=$rows[vendorID]' class='btn btn-danger waves-effect waves-light'>Inactive</a>";
															} else {
																echo "<a href='vendorstatus.php?vendorID=$rows[vendorID]' class='btn btn-success waves-effect waves-light'>Active</a>";
															}
															?>
														</td>
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
				<div class="control-sidebar-bg"></div>
			</div>
			<script src="js/vendors.min.js"></script>
			<script src="js/pages/chat-popup.js"></script>
			<script src="assets/icons/feather-icons/feather.min.js"></script>
			<script src="assets/vendor_components/datatable/datatables.min.js"></script>
			<script src="js/template.js"></script>
			<script src="js/pages/data-table.js"></script>


</body>

</html>