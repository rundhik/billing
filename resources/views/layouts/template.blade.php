<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ config('app.name', 'Tes Billing') }} -  @yield('judul')</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/datepicker3.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/datatables.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('js/modernizr.js') }}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="{{ route('home') }}" class="logo">
						<img src="{{ asset('images/logo.png') }}" height="35" alt="Tes Billing" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
						
					<span class="separator"></span>				
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{ asset('images/!logged-user.jpg') }}" alt="{{ Auth::user()->name }}" class="img-circle" data-lock-picture="{{ asset('images/!logged-user.jpg') }}" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="{{ Auth::user()->email }}">
								<span class="name">{{ Auth::user()->name }}</span>
								<span class="role">{{ Auth::user()->email }}</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
                                        <a href="{{ route('home') }}">
                                            
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
                                        <a href="{{ route('cust.index') }}">
                                            
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Customer</span>
										</a>
									</li>
									<li>
                                        <a href="{{ route('fare.index') }}">
                                            
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>Tarif</span>
										</a>
									</li>
									<li>
                                        <a href="{{ route('usage.index') }}">
                                            
											<i class="fa fa-tachometer" aria-hidden="true"></i>
											<span>Meter penggunaan</span>
										</a>
									</li>
									<li>
                                        <a href="{{ route('bill.index') }}">
                                            
											<i class="fa fa-file-text" aria-hidden="true"></i>
											<span>Tagihan</span>
										</a>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Porto HTML5 Template</a></li>
										<li><a href="#">Tucson Template</a></li>
										<li><a href="#">Porto Admin</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->
                <section role="main" class="content-body">

                    <header class="page-header">
                            <h2>@yield('judul')</h2>
                    </header>

                    @yield('konten')
                    
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/nanoscroller.js') }}"></script>
		<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('js/magnific-popup.js') }}"></script>
		<script src="{{ asset('js/jquery.placeholder.js') }}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('js/select2.js') }}"></script>
		<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('js/dataTables.tableTools.min.js') }}"></script>
		<script src="{{ asset('js/datatables.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('js/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>


		<!-- Examples -->
		@stack('data-table')
	</body>
</html>