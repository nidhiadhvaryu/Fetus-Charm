<?php
    ob_start();
?>
<?php
    include 'connection.php';
    $cartID=$_REQUEST['cartID'];

    $link->where("cartID",$cartID);
    $delete_cart=$link->delete("carttb");
    if($delete_cart)
    {
        header("location:viewcart.php");
    }
?>