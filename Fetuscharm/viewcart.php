<!DOCTYPE html>
<?php
ob_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Fetus Chram | Find The Best Vendors</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fetus-charm-favicon.png" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .wrapper {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
        }

        .h3 {
            margin-bottom: 0;
        }

        div.text-uppercase {
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .btn#sub {
            font-weight: 700;
            border: 1px solid #ddd;
        }

        .btn#sub:hover {
            background-color: #333;
            color: #FFF;
            border: 1ps solid #333;
        }

        .fa-cog {
            color: #a8a8a8;
        }

        .ml-auto.btn:hover span {
            color: #333;
        }

        div.btn {
            padding: 8px 20px;
        }

        .notification {
            background-color: #54e346;
            padding: 0px 10px;
        }

        .close {
            font-weight: normal;
            opacity: 1;
        }

        .close:hover {
            color: #EEE;
        }

        .alert-dismissible .close {
            position: unset;
        }

        button:focus {
            outline: none;
        }

        .h4 {
            margin: 0;
        }

        .editors {
            position: relative;
        }

        .editors img {
            object-fit: cover;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 5px solid #FFF;
        }

        #img1,
        #img2,
        #img3 {
            position: absolute;
        }

        #img1 {
            top: -15px;
            left: -50px;
        }

        #img2 {
            top: -15px;
            left: -70px;
        }

        #img3 {
            top: -15px;
            left: -90px;
        }

        .table {
            overflow: hidden;
        }

        .table thead tr th {
            letter-spacing: 0.08rem;
            font-weight: normal;
        }

        .table tr td,
        .table tr th {
            border: none;
            text-align: center;
        }

        .table.activitites thead {
            border-bottom: 1px solid #54e346;
            font-weight: 700;
        }

        .table thead {
            font-weight: 700;
        }

        .table.activitites {
            position: relative;
        }

        .table.activitites thead::after {
            position: absolute;

            background: #FFF;
            padding: 0px 8px;
            top: 38px;
            letter-spacing: 0.08rem;
            color: #54e346;
            font-weight: 600;
        }

        .table tbody td.item {
            font-weight: 900;
            text-align: left;
        }

        .red {
            color: #ff0000;
        }

        div.new {

            font-weight: normal;
            letter-spacing: 0.08rem;
            background-color: #c7fdc3;
            color: #0e7504;
            display: inline-block;
        }

        .table tbody td.item img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .table thead th.header {
            text-align: left;
        }

        .table tbody tr {
            padding-top: 10px;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
            transition: all .4s ease-in-out;
        }

        .table tbody tr:last-child {
            border: none;
        }

        td .close,
        td .btn {
            opacity: 0;
            background: #fff;
            font-weight: 600;
        }

        .table tbody tr:hover {
            transform: scale(1.004);
            box-shadow: 2px 2px 10px #a5a5a5;
            cursor: pointer;
            overflow: hidden;
            scroll-behavior: unset;
        }

        .table tbody tr:hover .close {
            font-size: 1.5rem;
            opacity: 1;
        }

        .table tbody tr:hover .close:hover {
            color: #aaa;
        }

        .table tbody tr:hover .btn {
            border: 1px solid #ddd;
            opacity: 1;
            background: #fff;
        }

        a:hover {
            text-decoration: none;
        }

        .table tbody tr:hover a {
            visibility: visible;
        }

        #commentor2,
        #commentor3 {
            position: absolute;
            object-fit: cover;
        }

        #commentor1 {
            object-fit: cover;
        }

        #commentor2 {
            top: 2px;
            left: 20px;
        }

        #commentor3 {
            top: 2px;
            left: 35px;
        }

        .comments {
            visibility: visible;
        }

        hr.items {
            position: relative;
            margin: 0;
            margin-top: 10px;
        }

        hr.items:after {
            position: absolute;
            content: "ALL ITEMS";
            background: #FFF;
            top: -9px;
            padding: 0px 8px;
            letter-spacing: 0.08rem;
            font-weight: 600;
        }

        .subtotal {
            border-bottom-left-radius: 50px;
            background-color: #ccc;
        }

        .tag,
        .fa-shoppping-cart {
            font-size: 0.5rem;
        }

        @media(max-width:760px) {
            .table.activitites thead::after {
                top: 35px;
            }
        }

        @media(max-width:576px) {
            .table.activitites thead::after {
                top: 55px;
            }

            #img1 {
                top: -8px;
                left: 0px;
            }

            #img2 {
                top: -8px;
                left: 15px;
            }

            #img3 {
                top: -8px;
                left: 30px;
            }

            .editors img {
                width: 20px;
                height: 20px;
                border: 1px solid #FFF;
            }
        }

        @media(max-width:400px) {

            .close {
                font-weight: normal;
                opacity: 1;
            }

            .wrapper {
                padding: 10px;
            }
        }
    </style>
</head>
<style>
    table {
        border: 1px solid black;
    }
</style>

<body>

    <?php
    include('header.php');
    ?>

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-menu icon-white"></i>
                        </div>
                        <h1>Grid Column</h1>
                        <p>Column page donec sodales arcu odio, eu egestas sem venenatis vel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id="main-container" class="main-container">
        <!-- main container -->
        <div class="st-columns">
            <!-- shortcode -->
            <div class="container">




                <div class="row">
                    <div class="">
                        <div class="d-flex align-items-center justify-content-between" style="padding:10px 0px">
                            <div class="d-flex flex-column">
                                <div class="h3">My Cart</div>
                            </div>
                        </div>

                        <div id="table" class="bg-white rounded">
                            <div class="table-responsive">
                                <form method="post" name="cart_form" action="insert_order_item.php" id="cart_form">
                                    <table class="table activitites">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-uppercase ">image</th>
                                                <th scope="col" class="text-uppercase ">item</th>
                                                <th scope="col" class="text-uppercase">total</th>
                                                <th scope="col" class="text-uppercase"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($sflag == 1) {
                                                $cart_check = $link->rawQuery("select * from carttb c,packagetb p where c.packageID = p.packageID and customerID=? and orderproductID=0", array($customerID));
                                            } else {
                                                $cart_check = $link->rawQuery("select * from carttb c,packagetb p where c.packageID = p.packageID and customerSessionID=? and orderproductID=0", array($customerSessionID));
                                            }
                                            $total = 0;
                                            if ($link->count > 0) {
                                                foreach ($cart_check as $cat) {
                                                    $total = $cat['packagePrice'] + $total;
                                            ?>
                                                    <input type="hidden" name="vendorID" value="<?php echo $cat['vendorID']; ?>">
                                                    <input type="hidden" name="cartID[]" value="<?php echo $cat['cartID']; ?>">
                                                    <input type="hidden" name="packageID[]" value="<?php echo $cat['packageID']; ?>">
                                                    <input type="hidden" name="packagePrice[]" value="<?php echo $cat['packagePrice']; ?>">
                                                    <tr>
                                                        <td class="font-weight-bold">
                                                            <a href="packagedetails.php?packageID=<?php echo $cat['packageID'] ?>">
                                                                <img src="vendor/<?php echo $cat['coverphoto'] ?>" style="height:70px; width:70px;" alt="wedding venue" class="img-responsive"></a>
                                                        </td>
                                                        <td class="item">
                                                            <div class="pl-2" style="text-align:center;">
                                                                <?php echo $cat['packageName']; ?>
                                                            </div>
                                                        </td>

                                                        <td class="font-weight-bold">
                                                            INR <?php echo $cat['packagePrice']; ?>

                                                        </td>
                                                        <td class="font-weight-bold">
                                                            <a href="remove-cart.php?cartID=<?php echo $cat['cartID']; ?>">Remove</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td class="font-weight-bold">
                                                    </td>

                                                    <td class="item">
                                                        <div class="pl-2" style="text-align:center;">
                                                            No Package Found.
                                                        </div>
                                                    </td>

                                                    <td class="font-weight-bold">
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column justify-content-end align-items-end">
                                <?php
                                if ($total != 0) {
                                ?>
                                    <div class="d-flex px-3 pr-md-5 py-1 subtotal">
                                        <div class="px-4" style="text-align:right;padding:5px">Subtotal</div>
                                        <div class="h5 font-weight-bold px-md-2" style="text-align:right;padding:5px">INR <?php echo $total; ?></div>
                                        <button style="float:right" type="submit" id="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Checkout</button>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.shortcode -->
    </div>
    <div class="footer">
        <!-- Footer -->
        <?php
        include('footer.php');
        ?>
        <!-- /.Footer -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
</body>

</html>