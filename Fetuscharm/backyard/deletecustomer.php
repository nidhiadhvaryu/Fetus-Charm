<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$cust_id = $_REQUEST['customerID'];
$data = $link->rawQueryOne("select * from customerregistrationtb where customerID=?", array($cust_id));
if (file_exists($data['profile'])) {
	$i = $data['profile'];
	$link->where('customerID', $cust_id);
	$a1 = $link->delete("customerregistrationtb");
	if ($a1) {
		if(unlink($i)){
		header('location:viewcustomer.php');
		}
	}
}
?>