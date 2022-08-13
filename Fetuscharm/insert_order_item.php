<?php
    ob_start();
?>
<?php
    include 'connection.php';
    session_start();
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
    for($i=0;$i<count($_POST['cartID']);$i++)
    {
        $vendorID=$_POST['vendorID'];
        $cartID=$_POST['cartID'][$i];
        $packageID=$_POST['packageID'][$i];
        $packageprice=$_POST['packagePrice'][$i];

        $sql2=$link->rawQueryOne("select * from orderitemtb where cartID =? and orderproductID=0",array($cartID));
        if($link->count > 0)
        {
            header("location:checkout.php?vendorID=$vendorID");
        }
        else
        {
            $insert_oi=$link->insert("orderitemtb",array("packageID"=>$packageID,"customerID"=>$customerID,"customerSessionID"=>$customerSessionID,"cartID"=>$cartID,"packageprice"=>$packageprice));
            if($insert_oi)
            {
                header("location:checkout.php?vendorID=$vendorID");
            }
        }
    }
?>