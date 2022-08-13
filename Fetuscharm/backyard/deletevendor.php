<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$ven_id = $_REQUEST['vendorID'];
$data = $link->rawQueryOne("select * from vendorregistrationtb where vendorID=?", array($ven_id));
if($data)
{
	$link->where('vendorID', $ven_id);
	$a1 = $link->delete("vendorregistrationtb");
	if ($a1) {
		$link->where('vendorID', $ven_id);
		$a2 = $link->delete("packagetb");
		header('location:viewvendor.php');
	}
}
if (file_exists($data['company_Vendor_IDProof'])) {
	$i = $data['company_Vendor_IDProof'];
	
		if (unlink($i)) {
			header('location:viewvendor.php');
		}
	}

?>

