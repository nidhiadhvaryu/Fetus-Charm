<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
	header("location:index.php");
}
$qry = "select * from blogtb";
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
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h4 class="page-title">View Blog</h4>
							<div class="d-inline-block align-items-center">
								<nav>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<section class="content">
					<div class="row">
						<form method="post" enctype="multipart/form-data">
							<div class="col-12">
								<div class="box">
									<div class="box-body">
										<div class="table-responsive">
											<table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
												<thead>
													<tr>
														<th>Blog Name</th>
														<th>Blog Title</th>
                                                        <th>Blog Image</th>
                                                        <th>Blog Date</th>
                                                        <th>Blog Author</th>
                                                        <th>Blog Short Description</th>
                                                        <th>Blog Description</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<?php
													foreach ($result as $rows) {
													?> <tr>
															<td><?php echo $rows['blogName'] ?></td>
                                                            <td><?php echo $rows['blogTitle'] ?></td>
                                                            <td><img src="<?php echo $rows['blogImage']; ?>" style="height:50px;width:50px"></td>
                                                            <td><?php echo $rows['blogDate'] ?></td>
                                                            <td><?php echo $rows['blogAuthor'] ?></td>
                                                            <td><?php echo $rows['blogShortdescription'] ?></td>
                                                            <td><?php echo $rows['blogDescription'] ?></td>
															<td><a href="editblog.php?blogID=<?php echo $rows['blogID']; ?>"><img src="assets/images/editing.png" style="height:30px;width:30px;"></a></td>
															<td><a href="deleteblog.php?blogID=<?php echo $rows['blogID']; ?>"><img src="assets/images/trash.png" style="height:30px;width:30px;"></a></td>
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
						</form>
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