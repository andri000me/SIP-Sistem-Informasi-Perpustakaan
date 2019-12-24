<?php 

if($this->session->userdata('status') != "login"){
	redirect(base_url("cuser_login"));
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Perpustakaan UMP</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?=base_url()?>assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
    <link rel="stylesheet" href="htp://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
	<link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- sweet alert -->
	<link rel="stylesheet" href="<?=base_url()?>assets/sweet-alert/sweetalert.min.css">
    <!-- data tables -->
    <link href="<?=base_url()?>assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/material/material.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="<?=base_url()?>assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?=base_url()?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
    <link href="<?=base_url()?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
    <!--tagsinput-->
    <link href="<?=base_url()?>assets/jquery-tags-input/jquery-tags-input.css" rel="stylesheet">
    <!--select2-->
    <link href="<?=base_url()?>assets/select2/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" /> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="<?=site_url()?>chome">
                    <!-- <span class="logo-icon fa fa-wifi"></span> -->
                    <span class="logo-default" ><i class="fa fa-book"></i> Perpus UMP</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <!-- <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form> -->
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="<?=base_url()?>assets/img/admin.png" />
                                <span class="username username-hide-on-mobile"> <?=$_SESSION["nama"]?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?=base_url()?>cuser_login/logout">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="fa fa-circle"></i>
	                        </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
				<li><p class="selector-title">Main Layouts</p></li>
				<li class="complete"><div class="theme-color layout-theme">
				<a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
			</div></li>	
				<li><p class="selector-title">Sidebar Color</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>
             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div>
		<!-- end color quick setting -->


<!-- start page container -->
<div class="page-container">
	<!-- start sidebar menu -->
	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
			<div id="remove-scroll" class="left-sidemenu">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
					data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>
					<li class="sidebar-user-panel">
						<div class="user-panel">
							<div class="pull-left image">
								<img src="<?=base_url()?>assets/img/admin.png" class="img-circle user-img-circle"
									alt="User Image" />
							</div>
							<div class="pull-left info">
								<p><?=$_SESSION["nama"]?> </p>
								<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
										Online</span></a>
							</div>
						</div>
					</li>
					<li class="nav-item  ">
						<a href="<?=site_url('chome')?>" class="nav-link nav-toggle"> <i class="fa fa-home"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="#" class="nav-link nav-toggle"> <i class="fa fa-group"></i>
							<span class="title">Data Member</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="<?=site_url('cmember')?>" class="nav-link "> <span class="title">Member</span>
								</a>
							</li>
							<li class="nav-item  ">
								<a href="<?=site_url('cmember/form/add')?>" class="nav-link "> <span class="title">Tambah
										Member</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item  ">
						<a href="#" class="nav-link nav-toggle"> <i class="fa fa-book"></i>
							<span class="title">Data Buku</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="<?=site_url('cbuku')?>" class="nav-link "> <span
										class="title">List Buku</span>
								</a>
							</li>
							<li class="nav-item  ">
								<a href="<?=site_url('cbuku/form/add')?>" class="nav-link "> <span class="title">Tambah
										Buku</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item  ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="fa fa-shopping-cart"></i>
							<span class="title">Data Peminjaman</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="<?=site_url('cpeminjaman')?>" class="nav-link ">
									<span class="title">List Peminjaman</span>
								</a>
							</li>
							<li class="nav-item  ">
								<a href="<?=site_url('cpeminjaman/form/add')?>" class="nav-link ">
									<span class="title">Tambah Peminjaman</span>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="nav-item  ">
						<a href="<?=site_url('cpengembalian')?>" class="nav-link nav-toggle">
							<i class="fa fa-refresh"></i>
							<span class="title">Data Pengembalian</span>
							
						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end sidebar menu -->