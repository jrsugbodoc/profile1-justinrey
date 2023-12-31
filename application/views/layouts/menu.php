	<body class="app sidebar-mini light-mode default-sidebar">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="<?php echo base_url('assets/images/svgs/loader.svg'); ?>" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">

				<!--aside open-->
				<div class="app-sidebar app-sidebar2">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="<?php echo base_url('pages/index'); ?>">
							<img src="<?php echo base_url('assets/images/brand/logo.png'); ?>" class="header-brand-img desktop-lgo" alt="Rygel Dash logo">
							<img src="<?php echo base_url('assets/images/brand/logo1.png'); ?>" class="header-brand-img dark-logo" alt="Rygel Dash logo">
							<img src="<?php echo base_url('assets/images/brand/favicon.png'); ?>" class="header-brand-img mobile-logo" alt="Rygel Dash logo">
							<img src="<?php echo base_url('assets/images/brand/favicon1.png'); ?>" class="header-brand-img darkmobile-logo" alt="Rygel Dash logo">
						</a>
					</div>
				</div>
				<aside class="app-sidebar app-sidebar3">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="<?php echo base_url('assets/images/users/16.jpg'); ?>" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1 font-weight-bold">John Thomson</h5>
								<span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
							<span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="<?php echo base_url('pages/index'); ?>"><span>Dashboard 01</span></a></li>
								<li><a class="slide-item" href="<?php echo base_url('pages/index2'); ?>"><span>Dashboard 02</span></a></li>
								<li><a class="slide-item" href="<?php echo base_url('pages/index3'); ?>"><span>Dashboard 03</span></a></li>
								<li><a class="slide-item" href="<?php echo base_url('pages/index4'); ?>"><span>Dashboard 04</span></a></li>
								<li><a class="slide-item" href="<?php echo base_url('pages/index5'); ?>"><span>Dashboard 05</span></a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
							<span class="side-menu__label">Layouts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Horizontal</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/horizontal-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Horizontal-Centerlogo</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-light-centerlogo'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-dark-centerlogo'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-light-centerlogo-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/horizontal-dark-centerlogo-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Sidemenu-Icon</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icon-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-icon-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icon-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icon-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Sidemenu-Closed</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-closed-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-closed-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-closed-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-closed-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Sidemenu-Toggle</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-toggle-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-toggle-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Sidemenu-Icontext</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icontext-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-icontext-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icontext-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-icontext-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Sidemenu-Iconoverlay</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-iconoverlay-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-iconoverlay-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-iconoverlay-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-iconoverlay-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Menu-hoversubmenu</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-light'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Menu-hoversubmenu-1</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-light-style1'); ?>"><span>Light</span></a></li>
										<li><a class="sub-slide-item"  href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark-style1'); ?>"><span>Dark</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-light-style1-boxed'); ?>"><span>Light-Boxed</span></a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark-style1-boxed'); ?>"><span>Dark-Boxed</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
							<span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/chat'); ?>">Chat</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/chat2'); ?>">Chat 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/chat3'); ?>">Chat 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/contact-list'); ?>">Contact list</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/contact-list2'); ?>">Contact list 02</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/file-manager'); ?>">File Manager</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/file-manager-list'); ?>">File Manager 02</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/todo-list'); ?>">Todo List</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/todo-list2'); ?>">Todo List 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/todo-list3'); ?>">Todo List 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User List</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/users-list-1'); ?>">User List 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/users-list-2'); ?>">User List 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/users-list-3'); ?>">User List 03</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/users-list-4'); ?>">User List 04</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('pages/calendar'); ?>" class="slide-item"> Calendar</a></li>
								<li><a href="<?php echo base_url('pages/dragula'); ?>" class="slide-item"> Dragula Card</a></li>
								<li><a href="<?php echo base_url('pages/cookies'); ?>" class="slide-item"> Cookies</a></li>
								<li><a href="<?php echo base_url('pages/image-comparison'); ?>" class="slide-item"> Image Comparison</a></li>
								<li><a href="<?php echo base_url('pages/img-crop'); ?>" class="slide-item"> Image Crop</a></li>
								<li><a href="<?php echo base_url('pages/page-sessiontimeout'); ?>" class="slide-item"> Page-sessiontimeout</a></li>
								<li><a href="<?php echo base_url('pages/notify'); ?>" class="slide-item"> Notifications</a></li>
								<li><a href="<?php echo base_url('pages/sweetalert'); ?>" class="slide-item"> Sweet alerts</a></li>
								<li><a href="<?php echo base_url('pages/rangeslider'); ?>" class="slide-item"> Range slider</a></li>
								<li><a href="<?php echo base_url('pages/counters'); ?>" class="slide-item"> Counters</a></li>
								<li><a href="<?php echo base_url('pages/loaders'); ?>" class="slide-item"> Loaders</a></li>
								<li><a href="<?php echo base_url('pages/time-line'); ?>" class="slide-item"> Time Line</a></li>
								<li><a href="<?php echo base_url('pages/rating'); ?>" class="slide-item"> Rating</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
							<span class="side-menu__label">Widgets</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/widgets-1'); ?>" class="slide-item">Widgets</a></li>
								<li><a href="<?php echo base_url('pages/widgets-2'); ?>" class="slide-item">Chart Widgets</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
							<span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/form-elements'); ?>" class="slide-item"> Form Elements</a></li>
								<li><a href="<?php echo base_url('pages/advanced-forms'); ?>" class="slide-item"> Advanced Forms</a></li>
								<li><a href="<?php echo base_url('pages/form-wizard'); ?>" class="slide-item"> Form Wizard</a></li>
								<li><a href="<?php echo base_url('pages/wysiwyag'); ?>" class="slide-item"> Form Edit</a></li>
								<li><a href="<?php echo base_url('pages/form-sizes'); ?>" class="slide-item"> Form Element Sizes</a></li>
								<li><a href="<?php echo base_url('pages/form-treeview'); ?>" class="slide-item"> Form Treeview</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
							<span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/chart-chartist'); ?>" class="slide-item">Chartjs Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-morris'); ?>" class="slide-item"> Morris Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-apex'); ?>" class="slide-item"> Apex Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-peity'); ?>" class="slide-item"> Pie Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-echart'); ?>" class="slide-item"> Echart Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-flot'); ?>" class="slide-item"> Flot Charts</a></li>
								<li><a href="<?php echo base_url('pages/chart-c3'); ?>" class="slide-item">C3 Charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
							<span class="side-menu__label">Map</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/maps'); ?>" class="slide-item">Vector Maps</a></li>
								<li><a href="<?php echo base_url('pages/maps2'); ?>" class="slide-item">Leaflet Maps</a></li>
								<li><a href="<?php echo base_url('pages/maps3'); ?>" class="slide-item">Mapel Maps</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
							<span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/tables'); ?>" class="slide-item">Default table</a></li>
								<li><a href="<?php echo base_url('pages/datatable'); ?>" class="slide-item">Data Table</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
							<span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/accordion'); ?>" class="slide-item"> Accordion</a></li>
								<li><a href="<?php echo base_url('pages/alerts'); ?>" class="slide-item"> Alerts</a></li>
								<li><a href="<?php echo base_url('pages/avatars'); ?>" class="slide-item"> Avatars</a></li>
								<li><a href="<?php echo base_url('pages/badge'); ?>" class="slide-item"> Badges</a></li>
								<li><a href="<?php echo base_url('pages/breadcrumbs'); ?>" class="slide-item"> Breadcrumb</a></li>
								<li><a href="<?php echo base_url('pages/buttons'); ?>" class="slide-item"> Buttons</a></li>
								<li><a href="<?php echo base_url('pages/cards'); ?>" class="slide-item"> Cards</a></li>
								<li><a href="<?php echo base_url('pages/cards-image'); ?>" class="slide-item"> Card Images</a></li>
								<li><a href="<?php echo base_url('pages/carousel'); ?>" class="slide-item"> Carousel</a></li>
								<li><a href="<?php echo base_url('pages/dropdown'); ?>" class="slide-item"> Dropdown</a></li>
								<li><a href="<?php echo base_url('pages/footers'); ?>" class="slide-item"> Footers</a></li>
								<li><a href="<?php echo base_url('pages/headers'); ?>" class="slide-item"> Headers</a></li>
								<li><a href="<?php echo base_url('pages/jumbotron'); ?>" class="slide-item"> Jumbotron</a></li>
								<li><a href="<?php echo base_url('pages/list'); ?>" class="slide-item"> List</a></li>
								<li><a href="<?php echo base_url('pages/media-object'); ?>" class="slide-item"> Media Obejct</a></li>
								<li><a href="<?php echo base_url('pages/modal'); ?>" class="slide-item"> Modal</a></li>
								<li><a href="<?php echo base_url('pages/navigation'); ?>" class="slide-item"> Navigation</a></li>
								<li><a href="<?php echo base_url('pages/pagination'); ?>" class="slide-item"> Pagination</a></li>
								<li><a href="<?php echo base_url('pages/panels'); ?>" class="slide-item"> Panel</a></li>
								<li><a href="<?php echo base_url('pages/popover'); ?>" class="slide-item"> Popover</a></li>
								<li><a href="<?php echo base_url('pages/progress'); ?>" class="slide-item"> Progress</a></li>
								<li><a href="<?php echo base_url('pages/tabs'); ?>" class="slide-item"> Tabs</a></li>
								<li><a href="<?php echo base_url('pages/tags'); ?>" class="slide-item"> Tags</a></li>
								<li><a href="<?php echo base_url('pages/tooltip'); ?>" class="slide-item"> Tooltips</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
							<span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/icons'); ?>" class="slide-item"> Font Awesome</a></li>
								<li><a href="<?php echo base_url('pages/icons2'); ?>" class="slide-item"> Material Design Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons3'); ?>" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons4'); ?>" class="slide-item"> Feather Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons5'); ?>" class="slide-item"> Ionic Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons6'); ?>" class="slide-item"> Flag Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons7'); ?>" class="slide-item"> pe7 Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons8'); ?>" class="slide-item"> Themify Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons9'); ?>" class="slide-item">Typicons Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons10'); ?>" class="slide-item">Weather Icons</a></li>
								<li><a href="<?php echo base_url('pages/icons11'); ?>" class="slide-item">Material Icons</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
							<span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/profile-1'); ?>">Profile 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/profile-2'); ?>">Profile 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/profile-3'); ?>">Profile 03</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('pages/editprofile'); ?>" class="slide-item"> Edit Profile</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Email</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/email-compose'); ?>">Email Compose</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/email-inbox'); ?>">Email Inbox</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/email-read'); ?>">Email Read</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/pricing'); ?>">Pricing 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/pricing-2'); ?>">Pricing 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/pricing-3'); ?>">Pricing 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-list'); ?>">Invoice list</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-1'); ?>">Invoice 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-2'); ?>">Invoice 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-3'); ?>">Invoice 03</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-add'); ?>">Add Invoice</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/invoice-edit'); ?>">Edit Invoice</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/blog'); ?>">Blog 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/blog-2'); ?>">Blog 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/blog-3'); ?>">Blog 03</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/blog-styles'); ?>">Blog Styles</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('pages/gallery'); ?>" class="slide-item"> Gallery</a></li>
								<li><a href="<?php echo base_url('pages/faq'); ?>" class="slide-item"> FAQS</a></li>
								<li><a href="<?php echo base_url('pages/terms'); ?>" class="slide-item"> Terms</a></li>
								<li><a href="<?php echo base_url('pages/empty'); ?>" class="slide-item"> Empty Page</a></li>
								<li><a href="<?php echo base_url('pages/search'); ?>" class="slide-item"> Search</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
							<span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/shop'); ?>" class="slide-item"> Products</a></li>
								<li><a href="<?php echo base_url('pages/shop-des'); ?>" class="slide-item">Product Details</a></li>
								<li><a href="<?php echo base_url('pages/cart'); ?>" class="slide-item"> Shopping Cart</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
							<span class="side-menu__label">Basic Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/element-colors'); ?>" class="slide-item"> Colors</a></li>
								<li><a href="<?php echo base_url('pages/element-flex'); ?>" class="slide-item"> Flex Items</a></li>
								<li><a href="<?php echo base_url('pages/element-height'); ?>" class="slide-item"> Height</a></li>
								<li><a href="<?php echo base_url('pages/elements-border'); ?>" class="slide-item"> Border</a></li>
								<li><a href="<?php echo base_url('pages/elements-display'); ?>" class="slide-item"> Display</a></li>
								<li><a href="<?php echo base_url('pages/elements-margin'); ?>" class="slide-item"> Margin</a></li>
								<li><a href="<?php echo base_url('pages/elements-paddning'); ?>" class="slide-item"> Padding</a></li>
								<li><a href="<?php echo base_url('pages/element-typography'); ?>" class="slide-item"> Typhography</a></li>
								<li><a href="<?php echo base_url('pages/element-width'); ?>" class="slide-item"> Width</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
							<span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Login</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/login-1'); ?>">Login 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/login-2'); ?>">Login 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/login-3'); ?>">Login 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Register</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/register-1'); ?>">Register 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/register-2'); ?>">Register 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/register-3'); ?>">Register 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Forget Password</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/forgot-password-1'); ?>">Forget Password 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/forgot-password-2'); ?>">Forget Password 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/forgot-password-3'); ?>">Forget Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/reset-password-1'); ?>">Reset Password 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/reset-password-2'); ?>">Reset Password 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/reset-password-3'); ?>">Reset Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/lockscreen-1'); ?>">Lock Screen 01</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/lockscreen-2'); ?>">Lock Screen 02</a></li>
										<li><a class="sub-slide-item" href="<?php echo base_url('pages/lockscreen-3'); ?>">Lock Screen 03</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url('pages/construction'); ?>" class="slide-item"> Under Construction</a></li>
								<li><a href="<?php echo base_url('pages/coming'); ?>" class="slide-item"> Coming Soon</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
							<span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?php echo base_url('pages/error400'); ?>" class="slide-item"> 400</a></li>
								<li><a href="<?php echo base_url('pages/error401'); ?>" class="slide-item"> 401</a></li>
								<li><a href="<?php echo base_url('pages/error403'); ?>" class="slide-item"> 403</a></li>
								<li><a href="<?php echo base_url('pages/error404'); ?>" class="slide-item"> 404</a></li>
								<li><a href="<?php echo base_url('pages/error500'); ?>" class="slide-item"> 500</a></li>
								<li><a href="<?php echo base_url('pages/error503'); ?>" class="slide-item"> 503</a></li>
							</ul>
						</li>
						<li class="slide ">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
							<span class="side-menu__label">Submenus</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level1</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="#">Level01</a></li>
										<li><a class="sub-slide-item" href="#">Level02</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="app-sidebar-help">
						<div class="dropdown text-center">
							<div class="help d-flex">
								<a href="#" class="nav-link p-0 help-dropdown" data-toggle="dropdown">
									<span class="font-weight-bold">Help Info</span> <i class="fa fa-angle-down ml-2"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow p-4">
									<div class="border-bottom pb-3">
										<h4 class="font-weight-bold">Help</h4>
										<a class="text-primary d-block" href="#">Knowledge base</a>
										<a class="text-primary d-block" href="#">Contact@info.com</a>
										<a class="text-primary d-block" href="#">88 8888 8888</a>
									</div>
									<div class="border-bottom pb-3 pt-3 mb-3">
										<p class="mb-1">Your Fax Number</p>
										<a class="font-weight-bold" href="#">88 8888 8888</a>
									</div>
									<a class="text-primary" href="#">Logout</a>
								</div>
								<div class="ml-auto">
									<a class="nav-link icon p-0" href="#">
										<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path></svg>
										<span class="pulse "></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<!--aside closed-->

				<div class="app-content main-content">
					<div class="side-app">

						<!--app header-->
						<div class="app-header header top-header">
							<div class="container-fluid">
								<div class="d-flex">
									<a class="header-brand" href="<?php echo base_url('pages/index'); ?>">
										<img src="<?php echo base_url('assets/images/brand/logo.png'); ?>" class="header-brand-img desktop-lgo" alt="Rygel Dash logo">
										<img src="<?php echo base_url('assets/images/brand/logo1.png'); ?>" class="header-brand-img dark-logo" alt="Rygel Dash logo">
										<img src="<?php echo base_url('assets/images/brand/favicon.png'); ?>" class="header-brand-img mobile-logo" alt="Rygel Dash logo">
										<img src="<?php echo base_url('assets/images/brand/favicon1.png'); ?>" class="header-brand-img darkmobile-logo" alt="Rygel Dash logo">
									</a>
									<div class="dropdown side-nav">
										<div class="app-sidebar__toggle" data-toggle="sidebar">
											<a class="open-toggle" href="#">
												<svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
											</a>
											<a class="close-toggle" href="#">
												<svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
											</a>
										</div>
									</div>
									<div class="dropdown  header-option">
										<a class="nav-link icon p-0" data-toggle="dropdown">
											<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
												<path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"	></path>
											</svg>
											 <span class="nav-span">Projects <i class="fa fa-angle-down ml-1 fs-18"></i></span>
										</a>
										<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow animated">
											<a class="dropdown-item" href="#">
												App Design Projects
											</a>
											<a class="dropdown-item" href="#">
												Web Design Projects
											</a>
											<a class="dropdown-item" href="#">
												App Development Projects
											</a>
											<a class="dropdown-item" href="#">
												Back-End Projects
											</a>
											<div class="text-left pr-5 pl-5 p-2 border-top">
												<a href="#" class="">View Projects</a>
											</div>
										</div>
									</div>
									<div class="d-flex order-lg-2 ml-auto">
										<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
											<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
											</svg>
										</a>
										<div class="mt-1">
											<form class="form-inline">
												<div class="search-element">
													<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
													<button class="btn btn-primary-color" type="submit">
														<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
															<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
														</svg>
													</button>
												</div>
											</form>
										</div><!-- SEARCH -->
										<div class="dropdown   header-fullscreen pl-5" >
											<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
												<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M7,14 L5,14 L5,19 L10,19 L10,17 L7,17 L7,14 Z M5,10 L7,10 L7,7 L10,7 L10,5 L5,5 L5,10 Z M17,17 L14,17 L14,19 L19,19 L19,14 L17,14 L17,17 Z M14,5 L14,7 L17,7 L17,10 L19,10 L19,5 L14,5 Z"></path></svg>
											</a>
										</div>
										<div class="dropdown header-notify pl-4">
											<a class="nav-link icon p-0" data-toggle="dropdown">
												<svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path></svg>
												<span class="pulse "></span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
												<a href="#" class="dropdown-item d-flex pb-3">
													<svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg>
													<div>
														<div class="font-weight-bold">Message Sent.</div>
														<div class="small text-muted">3 hours ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
													<div>
														<div class="font-weight-bold"> Order Placed</div>
														<div class="small text-muted">5  hour ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M5 8h14V6H5z" opacity=".3"/><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"/>
													</svg>
													<div>
														<div class="font-weight-bold"> Event Started</div>
														<div class="small text-muted">45 mintues ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 13h5v7h-5z" opacity=".3"/><path d="M23 11.01L18 11c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-9c0-.55-.45-.99-1-.99zM23 20h-5v-7h5v7zM2 4h18v5h2V4c0-1.11-.9-2-2-2H2C.89 2 0 2.89 0 4v12c0 1.1.89 2 2 2h7v2H7v2h8v-2h-2v-2h2v-2H2V4zm9 2l-.97 3H7l2.47 1.76-.94 2.91 2.47-1.8 2.47 1.8-.94-2.91L15 9h-3.03z"/></svg>
													<div>
														<div class="font-weight-bold">Your Admin lanuched</div>
														<div class="small text-muted">1 daya ago</div>
													</div>
												</a>
												<div class=" text-center p-2 border-top">
													<a href="#" class="">View All Notifications</a>
												</div>
											</div>
										</div>
										<div class="dropdown profile-dropdown">
											<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="<?php echo base_url('assets/images/users/16.jpg'); ?>" alt="img" class="avatar avatar-md brround">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<div class="text-center">
													<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">John Thomson</a>
													<span class="text-center user-semi-title">App Developer</span>
													<div class="dropdown-divider"></div>
												</div>
												<a class="dropdown-item d-flex" href="#">
													<svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/>
													</svg>
													<div class="mt-1">Profile</div>
												</a>
												<a class="dropdown-item d-flex" href="#">
													<svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
														<path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"	></path>
													</svg>
													<div class="mt-1">Settings</div>
												</a>
												<a class="dropdown-item d-flex" href="#">
													<svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
													</svg>
													<div class="mt-1">Messages</div>
												</a>
												<?php if($this->session->userdata('logged_in')): ?>
												<a class="dropdown-item d-flex" href="<?php echo base_url('users/logout'); ?>">
													<svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
														<path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3" />
														<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.10 0-2 .90-2 2v10c0 1.10.90 2 2 2h12c1.10 0-2-.90-2-2V10c0-1.10-.90-2-2-2zM8.9 6c0-1.71 1.39-3.10 3.1-3.10 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z" />
													</svg>
													<div class="mt-1">Sign Out</div>
												</a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>