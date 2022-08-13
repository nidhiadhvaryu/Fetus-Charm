<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
    header("location:index.php");
}
$vid=$_SESSION['vid'];
$qry = "select * from orderproducttb op,orderitemtb oi,packagetb p,vendorregistrationtb v where v.vendorID=p.vendorID and p.packageID=oi.packageID and op.orderproductID=oi.orderproductID and op.isActive=1 and v.vendorID=$vid group by op.orderproductID order by op.orderproductID desc";
$result = mysqli_query($con, $qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fetus-charm-favicon.png">
    <title>Fetus Charm Vendor - Category</title>
    <link rel="stylesheet" href="css/vendors_css.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <?php
            include("header.php");
            ?>
        </header>
        <aside class="main-sidebar">
            <?php
            include("sidebar.php");
            ?>
        </aside>
        <div class="content-wrapper">
            <div class="container-full">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">View Order </h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="row">
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Title</th>
                                                        <th>Show</th>
                                                        <th>Email</th>
                                                        <th>Contact No</th>
                                                        <th>AddressLine 1</th>
                                                        <th>AddressLine 2</th>
                                                        <th>Pincode</th>
                                                        <th>Country</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($result as $rows) {
                                                    ?> <tr>
                                                            <td><?php echo $rows['orderproductID'] ?></td>
                                                            <td><?php echo $rows['firstname'] ?></td>
                                                            <td><?php echo $rows['lastname'] ?></td>
                                                            <td><a href="show_order.php?oid=<?php echo $rows['orderproductID']; ?>">Show</a></td>
                                                            <td><?php echo $rows['emailID'] ?></td>
                                                            <td><?php echo $rows['contactno'] ?></td>
                                                            <td><?php echo $rows['addressline1'] ?></td>
                                                            <td><?php echo $rows['addressline2'] ?></td>
                                                            <td><?php echo $rows['pincode'] ?></td>
                                                            <?php $cityname = $link->rawQueryOne("select * from citytb where cityID=?", array($rows['cityID']));
                                                            $statename = $link->rawQueryOne("select * from statetb where stateID=?", array($rows['stateID']));
                                                            $countryname = $link->rawQueryOne("select * from countrytb where countryID=?", array($rows['countryID'])); ?>
                                                             <td><?php echo $countryname['countryName'] ?></td>
                                                             <td><?php echo $statename['stateName'] ?></td>
                                                             <td><?php echo $cityname['cityName'] ?></td>
                                                            
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <div class="control-sidebar-bg"></div>
            </div>
            <script src="js/vendors.min.js"></script>
            <script src="js/pages/chat-popup.js"></script>
            <script src="assets/icons/feather-icons/feather.min.js"></script>
            <script src="assets/vendor_components/datatable/datatables.min.js"></script>
            <script src="js/template.js"></script>
            <script src="js/pages/data-table.js"></script>

</body>

</html>