<?php
	ob_start();
?>
<?php
    include 'connection.php';
    $cmail=$_REQUEST['cmail'];
    $newpass=$_REQUEST['newpass'];
    
    $link->where("emailID",$cmail);
    $sql=$link->update("vendorregistrationtb",array("password"=>$newpass));

    if($sql)
    {
        header("location:success.php");
    }
?>