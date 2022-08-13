<?php
include('connection.php');
session_start();
if(isset($_SESSION['cid']) && $_SESSION['cid']!=null)
{
    $customerID=$_SESSION['cid'];
    $customerSessionID="";
    $sflag=1;
    $customerdata=$link->rawQueryone("select * from customerregistrationtb");
}
else
{
    $customerID=0;
    $customerSessionID=session_id();
    $sflag=0;
}

?>
<style>
	.dropdownlink
	{
		background: #ffdde2 !important;
	}
</style>
<div class="top-bar">
    <div class="container">

        <div class="row">
            <div class="col-md-6 top-message">
                <?php
                if (isset($_SESSION['cfname']) && isset($_SESSION['clname'])) {
                ?>
                    <p style="padding: 10px 10px;">Welcome <?php echo $_SESSION['cfname'] . " " . $_SESSION['clname'] ?> to Fetus Charm</p>
                <?php
                } else {
                ?><p style="padding: 10px 10px;">Welcome to Fetus Charm</p>
                <?php
                }
                ?>

            </div>

            <div class="col-md-6 top-links">
                <div class="navigation" id="navigation">
                    <ul class="listnone">
                        <li><a href="clientlogin.php" style="padding: 10px 10px;font-size: 13px;">Are you Client?</a>
                            <?php if (isset($_SESSION['cid'])) { ?>
                                <ul>
                                    <li><a href="clientprofile.php">Profile</a></li>
                                    <li><a href="changepassword.php">Change Password</a></li>
                                    <li><a href="viewcart.php">View Cart</a></li>
                                    <li><a href="logout.php">Log Out</a></li>
                                </ul><?php } 
                                else
                                {
                                    ?>
                                    <ul>
                                    <li><a href="clientlogin.php">Login</a></li>
                                    <li><a href="viewcart.php">View Cart</a></li>
                                </ul> <?php }?>
                        </li>
                        <li><a href="..\..\Fetuscharm\Vendor\index.php" target="_blank" style="padding: 10px 10px;font-size: 13px;">Are you vendor?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 logo">
                <div class="navbar-brand">
                    <a href="index.php"><img src="images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="navigation" id="navigation">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <?php

                        $cqry = "select * from categorytb";
                        $cres = mysqli_query($con, $cqry);
                        while ($crow = mysqli_fetch_array($cres)) {
                        ?>

                            <li class="active has-sub"><a><?php echo $crow['categoryName'] ?></a>
                                <ul>
                                    <?php
                                    $sqry = "select * from subcategorytb where categoryID=" . $crow['categoryID'];
                                    $sres = mysqli_query($con, $sqry);
                                    while ($srow = mysqli_fetch_array($sres)) {
                                    ?>
                                        <li><a href="subcategorypackage2.php?subcategoryID=<?php echo $srow['subcategoryID'] ?>" title="Home" class="animsition-link dropdownlink"><?php echo $srow['subcategoryName'] ?></a></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            <?php
                        }
                            ?>
                            </li>

							
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>