<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$port_id = $_REQUEST['portfolioID'];
$data = $link->rawQueryOne("select * from portfoliotb where portfolioID=?", array($port_id));
echo $data['album'];
if (file_exists('files/portfolio/'.$data['album'])) {
		$i = $data['album'];
		$link->where('portfolioID', $port_id);
		$a1 = $link->delete("portfoliotb");
		if ($a1) {
			if(unlink('files/portfolio/'.$data['album'])){
			header('location:packagealbum.php?packageID='.$data['packageID']);
			}
		}
	}
	

?>
