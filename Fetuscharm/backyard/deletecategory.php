<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$cat_id = $_REQUEST['categoryID'];
$data = $link->rawQueryOne("select * from categorytb where categoryID=?", array($cat_id));
if (file_exists($data['categoryImage'])) {
	$i = $data['categoryImage'];
	$link->where('categoryID', $cat_id);
	$a1 = $link->delete("categorytb");
	if ($a1) {
		if (unlink($i)) {
			header('location:viewcategory.php');
		}
	}
}
