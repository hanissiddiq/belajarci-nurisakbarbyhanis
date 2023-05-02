<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description">
        <meta content="Themesbrand" name="author">
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <link href="<?php echo base_url();?>vendor2\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>vendor2\assets\css\metismenu.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

        <!-- Plugin select2 with box -->
        <link
			href="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\select2\css\select2.min.css"
			rel="stylesheet"
			type="text/css"
		/>
        <link
			href="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\bootstrap-touchspin\css\jquery.bootstrap-touchspin.min.css"
			rel="stylesheet"
		/>

        <link href="<?php echo base_url();?>vendor2\assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>vendor2\assets\css\style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="<?php echo base_url();?>vendor2\assets\images\logo-light.png" alt="" height="18"> 
                    </span>
                    <i>
                        <img src="<?php echo base_url();?>vendor2\assets\images\logo-sm.png" alt="" height="22">
                    </i>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search.."> 
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </li>
                
                <!-- language-->
                <!-- <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url();?>vendor2\assets\images\flags\us_flag.jpg" class="mr-2" height="12" alt=""> English 
                        <span class="mdi mdi-chevron-down"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right language-switch">
                        <a class="dropdown-item" href="#"><img src="<?php echo base_url();?>vendor2\assets\images\flags\germany_flag.jpg" alt="" height="16">
                        <span>German </span>
                    </a>
                    <a class="dropdown-item" href="#"><img src="<?php echo base_url();?>vendor2\assets\images\flags\italy_flag.jpg" alt="" height="16">
                    <span>Italian </span></a>
                    <a class="dropdown-item" href="#"><img src="<?php echo base_url();?>vendor2\assets\images\flags\french_flag.jpg" alt="" height="16">
                    <span>French </span></a>
                    <a class="dropdown-item" href="#"><img src="<?php echo base_url();?>vendor2\assets\images\flags\spain_flag.jpg" alt="" height="16">
                    <span>Spanish </span></a>
                    <a class="dropdown-item" href="#"><img src="<?php echo base_url();?>vendor2\assets\images\flags\russia_flag.jpg" alt="" height="16">
                    <span>Russian</span></a>
                </div>
                </li> -->
                
                <!-- full screen -->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                        <i class="mdi mdi-fullscreen noti-icon"></i>
                    </a>
                </li>
                
                <!-- notification -->
                <!-- <li class="dropdown notification-list list-inline-item">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i> 
                        <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg"> -->
                        <!-- item-->
                        <!-- <h6 class="dropdown-item-text">Notifications (258)</h6>
                        <div class="slimscroll notification-item-list"> -->
                            <!-- item--> 
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-cart-outline"></i>
                                </div>
                                <p class="notify-details">Your order is placed
                                    <span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                </p>
                            </a> -->
                            
                            <!-- item--> 
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </div>
                                <p class="notify-details">New Message received
                                    <span class="text-muted">You have 87 unread messages</span>
                                </p>
                            </a> -->
                            
                            <!-- item--> 
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-glass-cocktail"></i>
                                </div>
                                <p class="notify-details">Your item is shipped
                                    <span class="text-muted">It is a long established fact that a reader will</span>
                                </p>
                            </a> -->

                            <!-- item--> 
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-cart-outline"></i>
                                </div>
                                <p class="notify-details">Your order is placed
                                    <span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                </p>
                            </a> -->
                            
                            <!-- item--> 
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </div>
                                <p class="notify-details">New Message received
                                    <span class="text-muted">You have 87 unread messages</span>
                                </p>
                            </a>
                        </div> -->
                        
                        <!-- All--> 
                        <!-- <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all 
                            <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>!--> 
                <!-- end notification -->


                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url();?>vendor2\assets\images\users\user-4.jpg" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                        
                    <!-- item--> 
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-circle m-r-5"></i>
                    Profile
                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-wallet m-r-5"></i>
                     My Wallet
                    </a> 
                    
                    <a class="dropdown-item d-block" href="#">
                        <span class="badge badge-success float-right">11</span>
                        <i class="mdi mdi-settings m-r-5"></i>
                    Settings
                    </a> 
                    
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-lock-open-outline m-r-5"></i>
                    Lock screen
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="auth/logout">
						<i class="mdi mdi-power text-danger"></i>
						
                    Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
        
        <!-- <li class="d-none d-sm-block">
            <div class="dropdown pt-3 d-inline-block">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a> 
                    <a class="dropdown-item" href="#">Another action</a> 
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </li> -->
    </ul>
</nav>
</div>

<!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== --><div class="left side-menu"><div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li><a href="<?= base_url('index.php/dashboard') ?>" class="waves-effect">
                    <i class="ti-home"></i>
                    <span class="badge badge-primary badge-pill float-right">2</span>
                     <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/con_kategori') ?>" class="waves-effect"><i class="ti-view-grid"></i>
               <span> Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/con_barang') ?>" class="waves-effect"><i class="ti-package"></i>
               <span> Barang</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/con_operator') ?>" class="waves-effect"><i class="fas fa-users"></i>
               <span> Operator Sistem</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/con_transaksi') ?>" class="waves-effect"><i class="ti-receipt"></i>
               <span> Form Transaksi</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-clipboard-list"></i>
                <span> Laporan <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                <ul class="submenu">
                    <li><a href="<?= base_url('index.php/con_laporan') ?>">Lap. Pertransaksi</a></li>
                    <li><a href="<?= base_url('index.php/con_laporan/laporan_periode') ?>">Lap. Perperiode</a></li>
                    <li><a href="<?= base_url('index.php/con_laporan') ?>">Lap. Tahunan</a></li>
                </ul>
                </li>

                <li>
                    <a href="<?= base_url('index.php/auth/logout') ?>" class="waves-effect"><i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
                    </a>
                </li>
                
        </div>
                            
                            
                <!-- Sidebar --><div class="clearfix"></div></div>
                <!-- Sidebar -left --></div>
                <!-- Left Sidebar End -->
                <!-- ============================================================== -->
                    <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid">
							
                            <div class="page-title-box">
                                <!-- <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h4 class="page-title">Blank page</h4><ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Extra Pages</a></li>
                                            <li class="breadcrumb-item active">Blank page</li></ol></div>
                                            <div class="col-sm-6">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-settings mr-2"></i> Settings</button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Action</a> 
                                                                <a class="dropdown-item" href="#">Another action</a> 
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end row -->
                                    </div>
                                    <!-- container-fluid -->
                                </div>

                                <!-- content -->
								<!-- =================================== -->
								<div class="container">
									<?php echo $contents;?>
								</div>
								<!-- ==================================== -->
                                <!-- content -->

                                <footer class="footer">© 2019 Veltrix 
                                    <span class="d-none d-sm-inline-block">- Crafted with 
                                        <i class="mdi mdi-heart text-danger"></i> 
                                        by Themesbrand</span>.
                                    </footer>
                                </div>
                                <!-- ============================================================== -->
                                <!-- End Right content here -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- END wrapper -->
                            
    <!-- jQuery  -->
<script src="<?php echo base_url();?>vendor2\assets\js\jquery.min.js"></script>
<script src="<?php echo base_url();?>vendor2\assets\js\bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>vendor2\assets\js\metisMenu.min.js"></script>
<script src="<?php echo base_url();?>vendor2\assets\js\jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>vendor2\assets\js\waves.min.js"></script>

<!-- ================ tambahan plugin data table ============= -->
<!-- Required datatable js -->
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\jszip.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\pdfmake.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\vfs_fonts.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\buttons.print.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\datatables\dataTables.responsive.min.js"></script><script src="..\plugins\datatables\responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="<?php echo base_url();?>vendor2\assets\pages\datatables.init.js">
</script>

<!-- Plugin Js Select2 option -->
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\select2\js\select2.min.js"></script>
<script src="<?php echo base_url();?>vendor2\veltrixTemplate\veltrix\layouts\plugins\bootstrap-touchspin\js\jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url();?>vendor2\assets\pages\form-advanced.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>vendor2\assets\js\app.js"></script>
</script>

<!-- Myscript dataTable -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>

<!-- My Script Select2 searchbox -->
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

</body>
</html>
