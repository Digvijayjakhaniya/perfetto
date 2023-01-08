<!doctype html>
<html lang="en" dir="ltr">
	
<head>
				
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – PHP Bootstrap5  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, crypto, crypto dashboard, sales dashboard, bootstrap 5 admin template, ecommerce template, ecommerce dashboard, responsive dashboard, admin panel, bootstrap 5 admin dashboard, cryptocurrency dashboard, bootstrap dashboard, multi dashboard, html, responsive, responsive admin, bootstrap admin template, dashboard template, bootstrap">
        
		<?php include('layout/head.php')?>

		<!-- TITLE -->
		<title>Zanex – PHP Bootstrap5 Admin & Dashboard Template</title>
	</head>

	<body class="app sidebar-mini ltr light-mode">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- APP-HEADER -->
				<div class="app-header header sticky">
					<div class="container-fluid main-container">
						<div class="d-flex align-items-center">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
							<div class="responsive-logo">
								<a href="index.php" class="header-logo">
									<img src="assets/images/brand/logo-3.png" class="mobile-logo logo-1" alt="logo">
									<img src="assets/images/brand/logo.png" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<!-- sidebar-toggle-->
							<a class="logo-horizontal " href="index.php">
								<img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
								<img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
									alt="logo">
							</a>
							<!-- LOGO -->
							<div class="main-header-center ms-3 d-none d-lg-block">
								<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
									</button>
								<div class="navbar navbar-collapse responsive-navbar p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<div class="d-flex order-lg-2">
											<div class="dropdown d-block d-lg-none">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
													<i class="fe fe-search"></i>
												</a>
												<div class="dropdown-menu header-search dropdown-menu-start">
													<div class="input-group w-100 p-2">
														<input type="text" class="form-control" placeholder="Search....">
														<div class="input-group-text btn btn-primary">
															<i class="fa fa-search" aria-hidden="true"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="dropdown d-md-flex">
												<a class="nav-link icon theme-layout nav-link-bg layout-setting">
													<span class="dark-layout"><i class="fe fe-moon"></i></span>
													<span class="light-layout"><i class="fe fe-sun"></i></span>
												</a>
											</div>
											<!-- Theme-Layout -->
											<div class="dropdown d-md-flex">
												<a class="nav-link icon full-screen-link nav-link-bg">
													<i class="fe fe-minimize fullscreen-button"></i>
												</a>
											</div>
											<!-- FULL-SCREEN -->
											<div class="dropdown d-md-flex notifications">
												<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
													</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
													<div class="drop-heading border-bottom">
														<div class="d-flex">
															<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
															<div class="ms-auto">
																<span class="badge bg-success rounded-pill">3</span>
															</div>
														</div>
													</div>
													<div class="notifications-menu">
														<a class="dropdown-item d-flex" href="chat.php">
                                                            <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                                <i class="fe fe-message-square"></i>
                                                            </div>
                                                            <div class="mt-1 wd-80p">
																<h5 class="notification-label mb-1">New review received</h5>
																<span class="notification-subtext">2 hours ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="chat.php">
															<div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
																<i class="fe fe-mail"></i>
															</div>
															<div class="mt-1 wd-80p">
																<h5 class="notification-label mb-1">New Mails Received</h5>
																<span class="notification-subtext">1 week ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="cart.php">
															<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
																<i class="fe fe-shopping-cart"></i>
															</div>
															<div class="mt-1 wd-80p">
																<h5 class="notification-label mb-1">New Order Received</h5>
																<span class="notification-subtext">1 day ago</span>
															</div>
														</a>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a href="notify.php" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
												</div>
											</div>
											<!-- NOTIFICATIONS -->
											<div class="dropdown d-md-flex message">
												<a class="nav-link icon text-center" data-bs-toggle="dropdown">
													<i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<div class="drop-heading border-bottom">
														<div class="d-flex">
															<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
															<div class="ms-auto">
																<span class="badge bg-danger rounded-pill">4</span>
															</div>
														</div>
													</div>
													<div class="message-menu">
														<a class="dropdown-item d-flex" href="chat.php">
															<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/1.jpg"></span>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-1">Madeleine</h5>
																	<small class="text-muted ms-auto text-end">
																			3 hours ago
																		</small>
																</div>
																<span>Hey! there I' am available....</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="chat.php">
															<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/12.jpg"></span>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-1">Anthony</h5>
																	<small class="text-muted ms-auto text-end">
																			5 hour ago
																		</small>
																</div>
																<span>New product Launching...</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="chat.php">
															<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/4.jpg"></span>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-1">Olivia</h5>
																	<small class="text-muted ms-auto text-end">
																			45 mintues ago
																		</small>
																</div>
																<span>New Schedule Realease......</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="chat.php">
															<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/15.jpg"></span>
															<div class="wd-90p">
																<div class="d-flex">
																	<h5 class="mb-1">Sanderson</h5>
																	<small class="text-muted ms-auto text-end">
																			2 days ago
																		</small>
																</div>
																<span>New Schedule Realease......</span>
															</div>
														</a>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a href="chat.php" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
												</div>
											</div>
											<!-- MESSAGE-BOX -->
											<div class="dropdown d-md-flex profile-1">
												<a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">
													<span>
															<img src="assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
														</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<div class="drop-heading">
														<div class="text-center">
															<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
															<small class="text-muted">Administrator</small>
														</div>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a class="dropdown-item" href="profile.php">
														<i class="dropdown-icon fe fe-user"></i> Profile
													</a>
													<a class="dropdown-item" href="email.php">
														<i class="dropdown-icon fe fe-mail"></i> Inbox
														<span class="badge bg-secondary float-end">3</span>
													</a>
													<a class="dropdown-item" href="emailservices.php">
														<i class="dropdown-icon fe fe-settings"></i> Settings
													</a>
													<a class="dropdown-item" href="faq.php">
														<i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
													</a>
													<a class="dropdown-item" href="login.php">
														<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
													</a>
												</div>
											</div>
											<div class="dropdown d-md-flex header-settings">
												<a href="javascript:void(0);" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
													<i class="fe fe-menu"></i>
												</a>
											</div>
											<!-- SIDE-MENU -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /APP-HEADER -->

				<!--APP-SIDEBAR-->
				<div class="sticky">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <aside class="app-sidebar">
                        <div class="side-header">
                            <a class="header-brand1" href="index.php">
                                <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                                <img src="assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                                <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                            </a>
                            <!-- LOGO -->
                        </div>
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Main</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Widgets</h3>
                                </li>
                                <li>
                                    <a class="side-menu__item" href="widgets.php"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Elements</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Components</a></li>
                                        <li><a href="cards.php" class="slide-item"> Cards design</a></li>
                                        <li><a href="calendar.php" class="slide-item"> Default calendar</a></li>
                                        <li><a href="calendar2.php" class="slide-item"> Full calendar</a></li>
                                        <li><a href="chat.php" class="slide-item"> Default Chat</a></li>
                                        <li><a href="notify.php" class="slide-item"> Notifications</a></li>
                                        <li><a href="sweetalert.php" class="slide-item"> Sweet alerts</a></li>
                                        <li><a href="rangeslider.php" class="slide-item"> Range slider</a></li>
                                        <li><a href="scroll.php" class="slide-item"> Content Scroll bar</a></li>
                                        <li><a href="loaders.php" class="slide-item"> Loaders</a></li>
                                        <li><a href="counters.php" class="slide-item"> Counters</a></li>
                                        <li><a href="rating.php" class="slide-item"> Rating</a></li>
                                        <li><a href="timeline.php" class="slide-item"> Timeline</a></li>
                                        <li><a href="treeview.php" class="slide-item"> Treeview</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Elements</a></li>
                                        <li><a href="alerts.php" class="slide-item"> Alerts</a></li>
                                        <li><a href="buttons.php" class="slide-item"> Buttons</a></li>
                                        <li><a href="colors.php" class="slide-item"> Colors</a></li>
                                        <li><a href="avatarsquare.php" class="slide-item"> Avatar-Square</a></li>
                                        <li><a href="avatar-round.php" class="slide-item"> Avatar-Rounded</a></li>
                                        <li><a href="avatar-radius.php" class="slide-item"> Avatar-Radius</a></li>
                                        <li><a href="dropdown.php" class="slide-item"> Drop downs</a></li>
                                        <li><a href="list.php" class="slide-item"> List</a></li>
                                        <li><a href="tags.php" class="slide-item"> Tags</a></li>
                                        <li><a href="pagination.php" class="slide-item"> Pagination</a></li>
                                        <li><a href="navigation.php" class="slide-item"> Navigation</a></li>
                                        <li><a href="typography.php" class="slide-item"> Typography</a></li>
                                        <li><a href="breadcrumbs.php" class="slide-item"> Breadcrumbs</a></li>
                                        <li><a href="badge.php" class="slide-item"> Badges</a></li>
                                        <li><a href="panels.php" class="slide-item"> Panels</a></li>
                                        <li><a href="thumbnails.php" class="slide-item"> Thumbnails</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Advanced Elements</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Advanced Elements</a></li>
                                        <li><a href="mediaobject.php" class="slide-item"> Media Object</a></li>
                                        <li><a href="accordion.php" class="slide-item"> Accordions</a></li>
                                        <li><a href="tabs.php" class="slide-item"> Tabs</a></li>
                                        <li><a href="chart.php" class="slide-item"> Charts</a></li>
                                        <li><a href="modal.php" class="slide-item"> Modal</a></li>
                                        <li><a href="tooltipandpopover.php" class="slide-item"> Tooltip and popover</a></li>
                                        <li><a href="progress.php" class="slide-item"> Progress</a></li>
                                        <li><a href="carousel.php" class="slide-item"> Carousels</a></li>
                                        <li><a href="headers.php" class="slide-item"> Headers</a></li>
                                        <li><a href="footers.php" class="slide-item"> Footers</a></li>
                                        <li><a href="users-list.php" class="slide-item"> User List</a></li>
                                        <li><a href="search.php" class="slide-item">Search</a></li>
                                        <li><a href="crypto-currencies.php" class="slide-item"> Crypto-currencies</a></li>
                                    </ul>
                                </li>
                                <li class="sub-category">
                                    <h3>Charts & Tables</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                        <li><a href="chart-chartist.php" class="slide-item">Chart Js</a></li>
                                        <li><a href="chart-flot.php" class="slide-item"> Flot Charts</a></li>
                                        <li><a href="chart-echart.php" class="slide-item"> ECharts</a></li>
                                        <li><a href="chart-morris.php" class="slide-item"> Morris Charts</a></li>
                                        <li><a href="chart-nvd3.php" class="slide-item"> Nvd3 Charts</a></li>
                                        <li><a href="charts.php" class="slide-item"> C3 Bar Charts</a></li>
                                        <li><a href="chart-line.php" class="slide-item"> C3 Line Charts</a></li>
                                        <li><a href="chart-donut.php" class="slide-item"> C3 Donut Charts</a></li>
                                        <li><a href="chart-pie.php" class="slide-item"> C3 Pie charts</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-clipboard"></i><span class="side-menu__label">Tables</span><span class="badge bg-secondary side-badge">2</span><i class="angle fa fa-angle-right hor-rightangle"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Tables</a></li>
                                        <li><a href="tables.php" class="slide-item">Default table</a></li>
                                        <li><a href="datatable.php" class="slide-item"> Data Tables</a></li>
                                    </ul>
                                </li>
                                <li class="sub-category">
                                    <h3>Pages</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                        <li><a href="profile.php" class="slide-item"> Profile</a></li>
                                        <li><a href="editprofile.php" class="slide-item"> Edit Profile</a></li>
                                        <li><a href="email.php" class="slide-item"> Mail-Inbox</a></li>
                                        <li><a href="emailservices.php" class="slide-item"> Mail-Compose</a></li>
                                        <li><a href="gallery.php" class="slide-item"> Gallery</a></li>
                                        <li><a href="about.php" class="slide-item"> About Company</a></li>
                                        <li><a href="services.php" class="slide-item"> Services</a></li>
                                        <li><a href="faq.php" class="slide-item"> FAQS</a></li>
                                        <li><a href="terms.php" class="slide-item"> Terms</a></li>
                                        <li><a href="invoice.php" class="slide-item"> Invoice</a></li>
                                        <li><a href="pricing.php" class="slide-item"> Pricing Tables</a></li>
                                        <li><a href="empty.php" class="slide-item"> Empty Page</a></li>
                                        <li><a href="construction.php" class="slide-item"> Under Construction</a></li>
                                    	<li><a href="switcher.php" class="slide-item"> Theme Style</a></li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a href="blog.php" class="sub-slide-item">Blog</a></li>
                                                <li><a href="blog-details.php" class="sub-slide-item">Blog Details</a></li>
                                                <li><a href="blog-post.php" class="sub-slide-item">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Maps</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a href="maps1.php" class="sub-slide-item">Leaflet Maps</a></li>
                                                <li><a href="maps2.php" class="sub-slide-item">Mapel Maps</a></li>
                                                <li><a href="maps.php" class="sub-slide-item">Vector Maps</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">E-Commerce</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a href="shop.php" class="sub-slide-item">Shop</a></li>
                                                <li><a href="shop-description.php" class="sub-slide-item">Shopping Details</a></li>
                                                <li><a href="cart.php" class="sub-slide-item">Shopping Cart</a></li>
                                                <li><a href="wishlist.php" class="sub-slide-item">Wishlist</a></li>
                                                <li><a href="checkout.php" class="sub-slide-item">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a href="file-manager.php" class="sub-slide-item">File Manager</a></li>
                                                <li><a href="filemanager-list.php" class="sub-slide-item">File Manager List</a></li>
                                                <li><a href="filemanager-details.php" class="sub-slide-item">File Details</a></li>
                                                <li><a href="file-attachments.php" class="sub-slide-item">File Attachments</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-category">
                                    <h3>Custom & Error Pages</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Custom Pages</a></li>
                                        <li><a href="login.php" class="slide-item"> Login</a></li>
                                        <li><a href="register.php" class="slide-item"> Register</a></li>
                                        <li><a href="forgot-password.php" class="slide-item"> Forgot Password</a></li>
                                        <li><a href="lockscreen.php" class="slide-item"> Lock screen</a></li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a class="sub-slide-item" href="400.php">400</a></li>
                                                <li><a class="sub-slide-item" href="401.php">401</a></li>
                                                <li><a class="sub-slide-item" href="403.php">403</a></li>
                                                <li><a class="sub-slide-item" href="404.php">404</a></li>
                                                <li><a class="sub-slide-item" href="500.php">500</a></li>
                                                <li><a class="sub-slide-item" href="503.php">503</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                                        <i class="side-menu__icon fe fe-sliders"></i>
                                        <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenus</a></li>
                                        <li><a href="javascript:void(0);" class="slide-item">Level-1</a></li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.1</a></li>
                                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.2</a></li>
                                                <li class="sub-slide2">
                                                    <a class="sub-side-menu__item2" href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                                    <ul class="sub-slide-menu2">
                                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.1</a></li>
                                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.2</a></li>
                                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.4</a></li>
                                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-category">
                                    <h3>Forms & Icons</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span><span class="badge bg-success side-badge">5</span><i class="angle fa fa-angle-right hor-rightangle"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                                        <li><a href="form-elements.php" class="slide-item"> Form Elements</a></li>
                                        <li><a href="form-advanced.php" class="slide-item"> Form Advanced</a></li>
                                        <li><a href="wysiwyag.php" class="slide-item"> Form Editor</a></li>
                                        <li><a href="form-wizard.php" class="slide-item"> Form Wizard</a></li>
                                        <li><a href="form-validation.php" class="slide-item"> Form Validation</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                        <li><a href="icons.php" class="slide-item"> Font Awesome</a></li>
                                        <li><a href="icons2.php" class="slide-item"> Material Design Icons</a></li>
                                        <li><a href="icons3.php" class="slide-item"> Simple Line Icons</a></li>
                                        <li><a href="icons4.php" class="slide-item"> Feather Icons</a></li>
                                        <li><a href="icons5.php" class="slide-item"> Ionic Icons</a></li>
                                        <li><a href="icons6.php" class="slide-item"> Flag Icons</a></li>
                                        <li><a href="icons7.php" class="slide-item"> pe7 Icons</a></li>
                                        <li><a href="icons8.php" class="slide-item"> Themify Icons</a></li>
                                        <li><a href="icons9.php" class="slide-item">Typicons Icons</a></li>
                                        <li><a href="icons10.php" class="slide-item">Weather Icons</a></li>
                                        <li><a href="icons11.php" class="slide-item">Bootstrap Icons</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </aside>
                </div>
				<!--/APP-SIDEBAR-->

				<!-- APP-CONTENT OPEN -->
				<div class="main-content app-content mt-0">
					<div class="side-app">

						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Theme Style</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">Theme Style</li>
									</ol>
								</div>
								<div class="ms-auto pageheader-btn">
									<a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
										<span>
											<i class="fe fe-plus"></i>
										</span> Add Account
									</a>
									<a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
										<span>
											<i class="fe fe-log-in"></i>
										</span> Export
									</a>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

                            <!-- ROW -->
                            <div class="container">
                                <div class="row row-sm">
                                    <div class="col-xl-6 m-auto">
                                        <div class="card sidebar-right1">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Theme Style</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch7"
                                                                id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Dark Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch7"
                                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Theme Color</h6>
                                                </div>
                                                <div class="switch_section">
													<div class="switch-toggle d-flex">
														<span class="me-auto">Primary Color</span>
														<div class="">
															<input class=" input-color-picker color-primary-light"
																value="#6259ca" id="colorID" oninput="changePrimaryColor()" type="color"
																data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" name="lightPrimary">
														</div>
													</div>
													<div class="switch-toggle d-flex mt-2">
														<span class="me-auto">Background Color</span>
														<div class="">
															<input class="input-bg-picker background-primary-light"
																value="#30304d" id="bgID" oninput="changeBackgroundColor()"
																type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
														</div>
													</div>
												</div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Navigation Style</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Vertical Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Click Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Hover Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">LTR and RTL VERSIONS</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">LTR Version</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch8"
                                                                id="myonoffswitch4" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">RTL Version</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch8"
                                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body menu-style">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Header Styles</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle lightHeader d-flex">
                                                        <span class="me-auto">Light Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch8" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                                        <span class="me-auto">Color Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch9" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                                        <span class="me-auto">Dark Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>

                                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                                        <span class="me-auto">Gradient Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch11" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body menu-style">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Menu Styles</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle lightMenu d-flex">
                                                        <span class="me-auto">Light Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch12" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                                        <span class="me-auto">Color Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch13" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                                        <span class="me-auto">Dark Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                                        <span class="me-auto">Gradient Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Layout Width Styles</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Full Width</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                                id="myonoffswitch16" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Boxed</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Layout Positions</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Fixed</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                                id="myonoffswitch18" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Scrollable</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body leftmenu-styles">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Sidemenu layout Styles</h6>
                                                </div>
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch20" class="onoffswitch2-checkbox default-menu" checked>
                                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon with Text</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch22" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch22" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon Overlay</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch21" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch21" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Closed Sidemenu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch23" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu Style 1</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-3">Reset All Styles</h6>
                                                </div>
                                                <div class="switch_section text-center px-0">
                                                    <div class="btn-list">
                                                        <button class="btn btn-success w-lg">Save Settings</button>
                                                        <button class="btn btn-danger" onclick="localStorage.clear();
                                                            document.querySelector('php').style = '';
                                                            names() ;
                                                            resetData() ;" type="button">Reset All
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
				<!-- APP-CONTENT CLOSED -->
			</div>

			<?php include('layout/footer.php')?>

		</div>

				
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<?php include('layout/script.php')?>
	

	</body>
</html>