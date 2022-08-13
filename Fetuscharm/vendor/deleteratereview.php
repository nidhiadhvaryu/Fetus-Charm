<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$ratereview_id = $_REQUEST['ratereviewID'];
echo $ratereview_id;
	$link->where('ratereviewID', $ratereview_id);
	$a1 = $link->delete("product_review");

	if ($a1) {
		header('location:ratereviewvendor.php');
	}

?>