<?php
ob_start();
?>
<?php
session_start();
include 'connection.php';
if(isset($_SESSION['cid']) && $_SESSION['cid']!=null)
{
    $customerID=$_SESSION['cid'];
    $customerSessionID=$_SESSION['cid'];
    $customerSessionID2="";
    $sflag=1;
    $customerdata=$link->rawQueryone("select * from customerregistrationtb");
}
else
{
    $customerID=session_id();
    $customerSessionID=0;
    $customerSessionID2=session_id();
    $sflag=0;
}
$vid=$_REQUEST['vendorID'];
$fn=$_REQUEST['fname'];
$ln=$_REQUEST['lname'];
$m=$_REQUEST['mail'];
$con=$_REQUEST['phone'];
$addr1=$_REQUEST['adl1'];
$addr2=$_REQUEST['adl2'];
$pc=$_REQUEST['pcode'];
$coun=$_REQUEST['countryselect'];
$state=$_REQUEST['stateselect'];
$city=$_REQUEST['cityselect'];
$subTotal=$_REQUEST['subTotal'];
$insert_checkout=$link->insert("orderproducttb",array("vendorID"=>$vid,"customerID"=>$customerSessionID,"customerSessionID"=>$customerSessionID2,"firstName"=>$fn,"lastName"=>$ln,"emailID"=>$m,"contactno"=>$con,"addressLine1"=>$addr1,"addressLine2"=>$addr2,"pincode"=>$pc,"countryID"=>$coun,"stateID"=>$state,"cityID"=>$city,"subTotal"=>$subTotal,"grandtotal"=>$subTotal ));

$cityname=$link->rawQueryOne("select * from citytb where cityID=?",array($city));
$statename=$link->rawQueryOne("select * from statetb where stateID=?",array($state));
$countryname=$link->rawQueryOne("select * from countrytb where countryID=?",array($coun));

if($insert_checkout)
{
    ?>
    <html>

<head></head>

<body>
<form method="POST" id="rform" action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="hidden" name="key_id" value="rzp_test_aDNW3jpLU7vwbQ">
        <input type="hidden" name="name" value="Fetus Charm">
        <input type="hidden" name="amount" value="<?php echo $subTotal * 100; ?>">
        <input type="hidden" name="description" value="Fetus Chram">
        <input type="hidden" name="prefill[name]" value="<?php echo $fn." ".$ln; ?>">
        <input type="hidden" name="prefill[contact]" value="<?php echo $con?>">
        <input type="hidden" name="prefill[email]" value="<?php echo $m?>">
        <!--Address changes-->
        <input type="hidden" name="notes[shipping address]" value="<?php echo $countryname['countryName']?>">
        <input type="hidden" name="notes[shipping address]" value="<?php echo $statename['stateName']?>">
        <input type="hidden" name="notes[shipping address]" value="<?php echo $cityname['cityName']?>">
        <input type="hidden" name="notes[shipping address]" value="<?php echo $pcode?>">
        <input type="hidden" name="notes[shipping address]" value="<?php echo $addr1?>">
        <input type="hidden" name="notes[shipping address]" value="<?php echo $addr2?>">

        <!-- <input type="hidden" name="notes[shipping address]" value="">-->
        <input type="hidden" name="callback_url"
            value="http://localhost/Fetuscharm/payment_check.php?oid=<?php echo $insert_checkout; ?>&uid=<?php echo $customerID; ?>&sflag=<?php echo $sflag; ?>">
        <input type="hidden" name="cancel_url" value="http://localhost/Fetuscharm/cancel.php">
        <button type="submit" style="display:none;" id="btnsubmit">Submit</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#rform').submit();
    });
    </script>
</body>

</html>
<?php
}
      
?>