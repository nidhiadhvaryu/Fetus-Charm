<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$test_id = $_REQUEST['testimonialID'];
$data = $link->rawQueryOne("select * from testimonialtb where testimonialID=?", array($test_id));
if (file_exists($data['testimonialImage'])) {
	$i = $data['testimonialImage'];
	$link->where('testimonialID', $test_id);
	$a1 = $link->delete("testimonialtb");
	if ($a1) {
		if (unlink($i)) {
			header('location:viewtestimonial.php');
		}
	}
}
?>