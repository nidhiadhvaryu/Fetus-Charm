<?php 
include('connection.php');
session_start();
if (isset($_SESSION['cun']) && $_SESSION['cun'] != null) {
    $customerID = $_SESSION['cid'];
    $customerSessionID = "";
    $sflag = 1;
    $customerdata = $link->rawQueryone("select * from customerregistrationtb");
} else {
    $customerID = 0;
    $customerSessionID = session_id();
    $sflag = 0;
}

$pid=$_POST['packageID'];
$rid=$_POST['rating'];
$rname=$_POST['name'];
$remail=$_POST['email'];
$rtitle=$_POST['reviewtitle'];
$rdate=$_POST['reviewdate'];
$review=$_POST['message'];

$sql = $link->insert("product_review", array("customerID" => $customerID,"packageID"=>$pid,"reviewTitle"=>$rtitle,"reviewDate"=>$rdate,"package_review_name"=>$rname,"package_review_email"=>$remail,"package_review_rating"=>$rid,"package_review_message"=>$review));
if($sql){
  header("location:packagedetails.php?packageID=$pid");
}