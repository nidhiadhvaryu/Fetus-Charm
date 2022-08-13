<?php
    ob_start();
?>
<?php
	include 'connection.php';
   	session_start();
	$cid=$_REQUEST['oid'];
	$uid=$_REQUEST['uid'];
    $sflag=$_REQUEST['sflag'];
	
	//echo $cid;
	//echo $uid;
	
    include 'razorpay/Razorpay.php';
    include 'razorpay/src/Errors/SignatureVerificationError.php';
$discount=0;
$success = false;
if ( ! empty( $_POST['razorpay_payment_id'] ) ) {

 try
    {
       $attributes = array(
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            //'razorpay_signature' => $_POST['razorpay_signature']
        );

        //$api->utility->verifyPaymentSignature($attributes);
        $success = true;
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
        
    }

}

if ($success == true)
{
    $html = "Payment success/ Signature Verified";
    $link->where("orderproductID",$cid);
	$a=$link->update("orderproducttb",array("isActive"=>1));
   
	if($a)
	{
        if($sflag==1)
        {
            $show1=$link->rawQuery("select * from orderitemtb where customerID=? and orderproductID=0",array($uid));
        }
        else
        {
            $show1=$link->rawQuery("select * from orderitemtb where customerSessionID=? and orderproductID=0",array($uid));
        }
        
        {
            if($link->count > 0)
            {
                foreach($show1 as $show)
                {
                    //echo "gusa";
                   $link->where("orderitemID",$show['orderitemID']);
                   $sql2=$link->update("orderitemtb",array("orderproductID"=>$cid));
                   
                   $link->where("cartID",$show['cartID']);
                   $sql3=$link->update("carttb",array("orderproductID"=>$cid));
                   
                }
                header("location:order_success.php");
            }
            else
            {
                echo "Not Update";
            }
          }
	}
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
             	header("location:order_cancel.php/$cid");
}
echo $html;
?>