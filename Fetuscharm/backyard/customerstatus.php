<?php
include 'connection.php';
$cus_id = $_REQUEST['customerID'];
$data = $link->rawQueryOne("select * from customerregistrationtb where customerID=?", array($cus_id));
if ($link->count == 0) {
    echo "Data Not Found";
}
$ia = $data['isActive'];
echo $ia;
if ($ia == 0) {
    $ia = 1;
} else if ($ia == 1) {
    $ia = 0;
}
$link->where("customerID", $cus_id);
$sql = $link->update("customerregistrationtb", array("isActive" => $ia));
header("location:viewcustomer.php");
?>