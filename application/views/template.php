
<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/starter-kit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 12:19:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/log.png">
    <title>Surya Motor App</title>

    
    
      <!-- select box CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/select2/dist/css/select2.min.css">

    <!-- range picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/daterangepicker/daterangepicker.css">

    <!-- Datetime Picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/src/assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">

    <!-- Toastr CSS -->
    <link href="<?php echo base_url()?>assets/src/assets/extra-libs/toastr/dist/build/toastr.min.css" rel="stylesheet">

    <!-- zoom -->
    <link href="<?php echo base_url()?>assets/src/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">

    <!-- Datatable -->
    <link href="<?php echo base_url()?>assets/src/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url()?>assets/images/log.png" style="height: 60px; width: 85px;" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <?php if ($this->session->userdata('foto') != null) { ?>
                                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" width="30" class="profile-pic rounded-circle"> 
                                <?php } else { ?>
                                    <img src="<?=base_url('assets/no_image.jpg')?>"  width="30" class="profile-pic rounded-circle" > 
                                <?php } ?>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                                <ul class="dropdown-user list-style-none">
                                    <li>
                                        <div class="dw-user-box p-3 d-flex">
                                            <div class="u-img">
                                                    <?php if ($this->session->userdata('foto') != null) { ?>
                                                        <img src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" class="rounded" width="80"> 
                                                    <?php } else { ?>
                                                        <img src="<?=base_url('assets/no_image.jpg')?>" class="rounded" width="80"> 
                                                    <?php } ?>
                                            </div>
                                            <div class="u-text ml-2">
                                                <h4 class="mb-0"><?php echo $this->session->userdata('username')?></h4>
                                                <p class="text-muted mb-1 font-14"><a href="#" class="__cf_email__" data-cfemail=""><?php echo $this->session->userdata('emailPsikolog')?></a></p>
                                                <a href="<?=site_url('users/myprofile')?>" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="<?=site_url('auth/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <div class="user-profile position-relative" style="background: url(<?php echo base_url()?>assets/src/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img">
                    <?php if ($this->session->userdata('foto') != null) { ?>
                        <img src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" class="rounded w-100"> 
                    <?php } else { ?>
                        <img src="<?=base_url('assets/no_image.jpg')?>" class="rounded" width="80"> 
                    <?php } ?>
                     </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class=" text-white d-block" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $this->session->userdata('namaPsikolog')?></a>
                        
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'dashboard' ? 'active' : null?>" href="<?=site_url('dashboard/dashboardAdmin')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Master Data</span>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'company' ? 'active' : null?>" href="<?=site_url('company/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">Profil Bengkel</span>
                            </a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'rekening' ? 'active' : null?>" href="<?=site_url('rekening/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">Rekening</span>
                            </a>
                        </li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'supplier' ? 'active' : null?>" href="<?=site_url('supplier/index')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-package"></i><span class="hide-menu">Supplier</span>
                            </a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Products </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="<?=site_url('unit')?>" class="sidebar-link <?=$active_menu == 'unit' ? 'active' : null?>">
                                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Units</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?=site_url('kategori')?>" class="sidebar-link <?=$active_menu == 'kategori' ? 'active' : null?>">
                                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Kategori</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?=site_url('barang')?>" class="sidebar-link <?=$active_menu == 'barang' ? 'active' : null?>">
                                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Products</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Transaksi</span>
                        </li>
                        <li class="sidebar-item <?=$active_menu == 'order' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'order' ? 'active' : null?>" href="<?=site_url('orders/allorder')?>" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i><span class="hide-menu">Sales</span>
                            </a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark <?=$active_menu == 'stock' ? 'active' : null?>"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Stock </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item ">
                                    <a href="<?=site_url('stock/inStockList')?>" class="sidebar-link ">
                                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Order Ke Supplier</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?=site_url('stock/outStockList')?>" class="sidebar-link">
                                        <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Out Stock</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Report</span>
                        </li>
                        <li class="sidebar-item <?=$active_menu == 'report' ? 'active' : null?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=$active_menu == 'report' ? 'active' : null?>" href="<?=site_url('orders/report')?>" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i><span class="hide-menu">Laporan Bulanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

       
       