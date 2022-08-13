<?php
include 'connection.php';
$ven_id = $_REQUEST['vendorID'];
$data = $link->rawQueryOne("select * from vendorregistrationtb where vendorID=?", array($ven_id));
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
$link->where("vendorID", $ven_id);
$sql = $link->update("vendorregistrationtb", array("isActive" => $ia));
header("location:viewvendor.php");
?>