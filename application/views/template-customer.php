
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
                    <a class="navbar-brand" href="<?=base_url()?>">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url()?>assets/images/log.png" style="width: 100px; height: 60px;" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
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
                        
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-cart"></i>
                                <!-- <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div> -->
                                <span class="badge py-1 badge-danger ml-auto"><?=$this->cart->total_items()?? '' ?></span>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <h5 class="font-weight-small mb-0">Kamu punya <?=$this->cart->total_items()?? '' ?> item di keranjang</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="<?=site_url('cart/show')?>"> <b>Lihat Keranjang</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">

                            <?php if ($this->session->userdata('foto') != null) { ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" width="30" class="profile-pic rounded-circle"> 
                            </a>
                            <?php }  else { ?>
                                <!-- <li class="sidebar-item">  -->
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="<?=site_url('auth')?>" aria-expanded="false">
                                       Login
                                    </a>
                                <!-- </li> -->
                            <?php } ?>
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
                
                    <?php if ($this->session->userdata('foto') != null) { ?>
                <div class="user-profile position-relative" style="background: url(<?php echo base_url()?>assets/src/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img">
                        <img src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" class="rounded w-100"> 
                   
                     </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class=" text-white d-block" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $this->session->userdata('namaPsikolog')?></a>
                        
                    </div>
                </div>
                <?php } ?>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=site_url('dashboard')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">All Products</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') == 2) { ?>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=site_url('orders/myorderlist')?>" aria-expanded="false">
                                <i class="mr-2 mdi mdi-calendar-text"></i><span class="hide-menu">Pesanan Saya</span>
                            </a>
                        </li>
                        <?php } ?>
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

       
       