<?php
    ob_start();
?>
<?php
    session_start();
    include 'connection.php';
    $packageID=$_REQUEST['packageID'];
    if(isset($_SESSION['cid']) && $_SESSION['cid']!=null)
    {
        $customerID=$_SESSION['cid'];
        $customerSessionID="";
        $sflag=1;
    }
    else
    {
        $customerID=0;
        $customerSessionID=session_id();
        $sflag=0;
    }

    if($sflag==1)
    {
        $cart_check=$link->rawQueryone("select * from carttb where packageID=? and customerID=? and orderproductID=0",array($packageID,$customerID));
    }
    else
    {
        $cart_check=$link->rawQueryone("select * from carttb where packageID=? and customerSessionID=? and orderproductID=0",array($packageID,$customerSessionID));
    }
    if($link->count > 0)
    {
        header("location:viewcart.php");
    }
    else
    {
        $insert_cart=$link->insert("carttb",array("packageID"=>$packageID,"customerID"=>$customerID,"customerSessionID"=>$customerSessionID));
        if($insert_cart)
        {
            header("location:viewcart.php");
        }
    }
?>