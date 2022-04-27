<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/img/logo/favicon.png" />

	<link rel="canonical" href="<?php echo base_url('admin') ?>" />

	<title>EventTalk - <?php echo $page_title; ?></title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

	<link href="<?php echo base_url() ?>assets/admin/css/light.css" rel="stylesheet">
	<style>
		body {
			opacity: 0;
		}
	</style>
	<!-- END SETTINGS -->
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="<?php echo base_url('admin/dashboard') ?>">
					<img src="<?php echo base_url() ?>assets/admin/img/logo/logo.png" />
				</a>

				<div class="sidebar-user">
					<div class="d-flex justify-content-center">
						<div class="flex-shrink-0">
							<img src="<?php echo base_url() ?>assets/admin/img/avatars/avatar-5.png" class="avatar img-fluid rounded me-1" alt="Admin Photo" />
						</div>
						<div class="flex-grow-1 ps-2">
							<a class="sidebar-user-title" href="#" >
								<?php echo $this->session->userdata('admin_name') ?>
							</a>				
							<div class="sidebar-user-subtitle">System Administrator</div>
						</div>
					</div>
				</div>

				<ul class="sidebar-nav">				
					<li class="sidebar-item <?php if($page_title == "Dashboard"){echo "active" ;} ?>">
						<a href="<?php echo base_url('admin/dashboard') ?>" class="sidebar-link">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
						</a>
					</li>

					

					<li class="sidebar-item <?php if($page_title == "Event Participants"){echo "active" ;} ?>">
						<a class="sidebar-link" href="<?php echo base_url('admin/participants') ?>">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Participants</span>
						</a>
					</li>

		
                    <li class="sidebar-item">
						<a data-bs-target="#payments" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Payments</span>
						</a>
						<ul id="payments" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url('admin/approve_payments') ?>">Payment Approval</a>
                            </li>
							<li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url('admin/payments') ?>">Payments</a>
                            </li>
							
						</ul>
					</li>
                    <?php if($this->session->userdata('admin_id') == 1): ?>
                    <li class="sidebar-item <?php if($page_title == "Admins"){echo "active" ;} ?>">
						<a class="sidebar-link" href="<?php echo base_url('admin/admins') ?>">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Admins</span>
						</a>
					</li>
                    <?php endif; ?>

					
					<li class="sidebar-header">
						Event Components
					</li>

                    <!-- <li class="sidebar-item <?php if($page_title == "Schedule"){echo "active" ;} ?>">
						<a class="sidebar-link" href="<?php echo base_url('admin/admin') ?>">
							<i class="align-middle" data-feather="clock"></i> <span class="align-middle">Schedule</span>
						</a>
					</li> -->
						

					<li class="sidebar-item <?php if($page_title == "Speakers"){echo "active" ;} ?>">
						<a class="sidebar-link" href="<?php echo base_url('admin/speakers') ?>">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Speakers</span>
						</a>
					</li>
<!-- 
					<li class="sidebar-item <?php if($page_title == "Attendance"){echo "active" ;} ?>">
						<a class="sidebar-link" href="tables-bootstrap.html">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Attendance</span>
						</a>
					</li> -->

					<li class="sidebar-header">
						Help & Addons
					</li>
					
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Having troubles working here?</strong>
						<div class="mb-3 text-sm">
							Contact Tech Support @ SoftPath Tech
						</div>

						<div class="d-grid">
							<a href="mailto:info@softpathtech.net" class="btn btn-outline-primary" target="_blank">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<!-- <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li> -->
						
						<li class="nav-item">
							<a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
								<div class="position-relative">
									<i class="align-middle" data-feather="maximize"></i>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
								<img src="<?php echo base_url() ?>assets/admin/img/avatars/avatar-5.png" class="avatar img-fluid rounded" alt="Admin Photo" />
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
							
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings</a>
								<a class="dropdown-item" href="mailto:info@sofpathtech.net"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url('logout') ?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>