<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$dven_smid = $_REQUEST['vendor_socialmediaID'];
echo $dven_smid;
	$link->where('vendor_socialmediaID', $dven_smid);
	$a1 = $link->delete("vendor_socialmediatb");

	if ($a1) {
		header('location:viewvendorsocialmediadetail.php');
	}

?>