<?php
include('connection.php');
session_start();
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
$blog_id = $_REQUEST['blogID'];
$data = $link->rawQueryOne("select * from blogtb where blogID=?", array($blog_id));
if (file_exists($data['blogImage'])) {
	$i = $data['blogImage'];
	$link->where('blogID', $blog_id);
	$a1 = $link->delete("blogtb");
	if ($a1) {
		if (unlink($i)) {
			header('location:viewblog.php');
		}
	}
}
