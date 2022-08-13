<?php
include('connection.php');
session_start();
$oid=$_REQUEST['oid'];
if (isset($_SESSION['aun'])) {
} else {
    header("location:index.php");
}
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
    <title>Fetus Charm Admin - Category</title>
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
                                                        <th>Package Name</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $order=$link->rawQuery("select * from orderitemtb where orderproductID=?",array($oid));
                                                    foreach ($order as $or) {
                                                        $package=$link->rawQueryone("select * from packagetb where packageID=?",array($or['packageID']));
                                                    ?> <tr>
                                                            <td><?php echo $package['packageName'] ?></td>
                                                            <td><?php echo $or['packageprice'] ?></td>
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