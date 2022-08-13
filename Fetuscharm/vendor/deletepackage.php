<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$pack_id = $_REQUEST['packageID'];
$data = $link->rawQueryOne("select * from packagetb where packageID=?", array($pack_id));
if (file_exists($data['coverphoto'])) {
		$i = $data['coverphoto'];
		$link->where('packageID', $pack_id);
		$a1 = $link->delete("packagetb");
		if ($a1) {
			if(unlink($i)){
			header('location:viewpackage.php');
			}
		}
	}

?>
