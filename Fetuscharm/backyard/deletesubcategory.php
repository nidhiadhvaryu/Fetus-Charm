<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$subcat_id = $_REQUEST['subcategoryID'];
	$link->where('subcategoryID', $subcat_id);
	$a1 = $link->delete("subcategorytb");

	if ($a1) {
		header('location:viewsubcategory.php');
	}
?>