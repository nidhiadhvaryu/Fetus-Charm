<?php
include('connection.php');
session_start();
if (isset($_SESSION['un'])) {
} else {
  header("location:index.php");
}
$qry="select count(packageID) as vcount from packagetb where vendorID=".$_SESSION['vid'];
$res=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($res)){
	$pcount=$row['vcount'];
}
$qry="select count(orderproductID) as vcount from orderproducttb  where vendorID=".$_SESSION['vid'];
$res=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($res)){
	$orcount=$row['vcount'];
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
  <title>Fetus Charm Vendor - Dashboard</title>
  <link rel="stylesheet" href="css/vendors_css.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
  <div class="wrapper">
    <div id="loader"></div>
    <header class="main-header">
      <?php
      include('header.php');
      ?>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar position-relative">
        <?php
        include('sidebar.php');
        ?>
      </section>
    </aside>
    <div class="content-wrapper">
      <div class="container-full">
        <section class="content">
          <div class="row">
            <div class="col-xl-6 col-12">
              <div class="box">
                <div class="box-header no-border pb-0">
                  <h4 class="box-title">Fetus Charm Vendor Dashboard</h4>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="info-box bg-transparent no-shadow px-0 min-h-80">
                        <span class="info-box-icon bg-danger-light rounded-circle"><span class="icon-Ticket"></span></span>
                        <div class="info-box-content pb-0">
                          <p class="mb-0 fs-16">Total Package</p>
                          <h2 class="my-0 fw-500 text-danger"><?php echo $pcount ?></h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="info-box bg-transparent no-shadow px-0 min-h-80">
                        <span class="info-box-icon bg-success-light rounded-circle"><span class="icon-Ticket"></span></span>
                        <div class="info-box-content pb-0">
                          <p class="mb-0 fs-16">Total Order</p>
                          <h2 class="my-0 fw-500 text-success"><?php echo $orcount ?></h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="info-box bg-transparent no-shadow px-0 min-h-80">
                        <span class="info-box-icon bg-success-light rounded-circle"><span class="icon-Ticket"></span></span>
                        <div class="info-box-content pb-0">
                          <p class="mb-0 fs-16">Total Customer</p>
                          <h2 class="my-0 fw-500 text-success"><?php echo $orcount ?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <aside class="control-sidebar">
      <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
      <ul class="nav nav-tabs control-sidebar-tabs">
        <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
        <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
            <a href="javascript:void(0)" class="text-grey">
              <i class="ti-more"></i>
            </a>
            <p>Users</p>
            <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
          </div>
          <div class="lookup lookup-sm lookup-right d-none d-lg-block">
            <input type="text" name="s" placeholder="Search" class="w-p100">
          </div>
          <div class="media-list media-list-hover mt-20">
            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-success" href="#">
                <img src="images/avatar/1.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                </p>
                <p>Praesent tristique diam...</p>
                <span>Just now</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-danger" href="#">
                <img src="images/avatar/2.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Luke</strong></a>
                </p>
                <p>Cras tempor diam ...</p>
                <span>33 min ago</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-warning" href="#">
                <img src="images/avatar/3.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Evan</strong></a>
                </p>
                <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-primary" href="#">
                <img src="images/avatar/4.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Evan</strong></a>
                </p>
                <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-success" href="#">
                <img src="images/avatar/1.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                </p>
                <p>Praesent tristique diam...</p>
                <span>Just now</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-danger" href="#">
                <img src="images/avatar/2.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Luke</strong></a>
                </p>
                <p>Cras tempor diam ...</p>
                <span>33 min ago</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-warning" href="#">
                <img src="images/avatar/3.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Evan</strong></a>
                </p>
                <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
              </div>
            </div>

            <div class="media py-10 px-0">
              <a class="avatar avatar-lg status-primary" href="#">
                <img src="images/avatar/4.jpg" alt="...">
              </a>
              <div class="media-body">
                <p class="fs-16">
                  <a class="hover-primary" href="#"><strong>Evan</strong></a>
                </p>
                <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
            <a href="javascript:void(0)" class="text-grey">
              <i class="ti-more"></i>
            </a>
            <p>Todo List</p>
            <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
          </div>
          <ul class="todo-list mt-20">
            <li class="py-15 px-5 by-1">
              <input type="checkbox" id="basic_checkbox_1" class="filled-in">
              <label for="basic_checkbox_1" class="mb-0 h-15"></label>
              <span class="text-line">Nulla vitae purus</span>
              <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5">
              <input type="checkbox" id="basic_checkbox_2" class="filled-in">
              <label for="basic_checkbox_2" class="mb-0 h-15"></label>
              <span class="text-line">Phasellus interdum</span>
              <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5 by-1">
              <input type="checkbox" id="basic_checkbox_3" class="filled-in">
              <label for="basic_checkbox_3" class="mb-0 h-15"></label>
              <span class="text-line">Quisque sodales</span>
              <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5">
              <input type="checkbox" id="basic_checkbox_4" class="filled-in">
              <label for="basic_checkbox_4" class="mb-0 h-15"></label>
              <span class="text-line">Proin nec mi porta</span>
              <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5 by-1">
              <input type="checkbox" id="basic_checkbox_5" class="filled-in">
              <label for="basic_checkbox_5" class="mb-0 h-15"></label>
              <span class="text-line">Maecenas scelerisque</span>
              <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5">
              <input type="checkbox" id="basic_checkbox_6" class="filled-in">
              <label for="basic_checkbox_6" class="mb-0 h-15"></label>
              <span class="text-line">Vivamus nec orci</span>
              <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5 by-1">
              <input type="checkbox" id="basic_checkbox_7" class="filled-in">
              <label for="basic_checkbox_7" class="mb-0 h-15"></label>
              <span class="text-line">Nulla vitae purus</span>
              <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5">
              <input type="checkbox" id="basic_checkbox_8" class="filled-in">
              <label for="basic_checkbox_8" class="mb-0 h-15"></label>
              <span class="text-line">Phasellus interdum</span>
              <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5 by-1">
              <input type="checkbox" id="basic_checkbox_9" class="filled-in">
              <label for="basic_checkbox_9" class="mb-0 h-15"></label>
              <span class="text-line">Quisque sodales</span>
              <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li class="py-15 px-5">
              <input type="checkbox" id="basic_checkbox_10" class="filled-in">
              <label for="basic_checkbox_10" class="mb-0 h-15"></label>
              <span class="text-line">Proin nec mi porta</span>
              <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <div class="control-sidebar-bg"></div>
  </div>
  <script src="js/vendors.min.js"></script>
  <script src="js/pages/chat-popup.js"></script>
  <script src="assets/icons/feather-icons/feather.min.js"></script>
  <script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
  <script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/vendor_components/jvectormap/lib2/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/template.js"></script>
  <script src="js/pages/dashboard3.js"></script>

</body>

</html>