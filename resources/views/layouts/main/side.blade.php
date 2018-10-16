<div id="actionsBox" class="actionsBox">
	<div id="actionsBoxMenu" class="menu">
		<span id="cntBoxMenu">0</span>
		<a class="button box_action">Archive</a>
		<a class="button box_action">Delete</a>
		<a id="toggleBoxMenu" class="open"></a>
		<a id="closeBoxMenu" class="button t_close">X</a>
	</div>
	<div class="submenu">
		<a class="first box_action">Move...</a>
		<a class="box_action">Mark as read</a>
		<a class="box_action">Mark as unread</a>
		<a class="last box_action">Spam</a>
	</div>
</div>
<div id="left_bar">
	<div id="primary_nav" class="g_blue">
		<ul>
			<li><a href="#" title="Dashboard"><span class="icon_block m_dashboard">Dashboard</span></a></li>
			<li><a href="#" title="Projects"><span class="icon_block m_projects">Projects</span></a></li>
			<li><a href="#" title="Events"><span class="icon_block m_events">Events</span></a></li>
			<li><a href="#" title="Address Book"><span class="icon_block p_book">Address Book</span></a></li>
			<li><a href="#" title="Media"><span class="icon_block m_media">Media</span></a></li>
			<li><a href="#" title="Settings"><span class="icon_block m_settings">Settings</span></a></li>
		</ul>
	</div>
@include('layouts.main.header')
	<div id="sidebar">
		<div id="secondary_nav">
			<ul id="sidenav" class="accordion_mnu collapsible">
				<li><a href="dashboard.html"><span class="nav_icon computer_imac"></span> Dashboard</a>
				</li>
				<li><a href="table.html"><span class="nav_icon blocks_images"></span> POS</a>
				<li><a href="#"><span class="nav_icon frames"></span> Products<span class="alert_notify blue">2</span><span class="up_down_arrow">&nbsp;</span></a>
					<ul class="acitem">
						<li><a href="form-elements.html"><span class="list-icon">&nbsp;</span>All Products</a></li>
						<li><a href="left-label-form.html"><span class="list-icon">&nbsp;</span>Add Product</a></li>
					</ul>
				</li>
				</li>
				
				<li><a href="#"><span class="nav_icon frames"></span>Category<span class="alert_notify blue">2</span><span class="up_down_arrow">&nbsp;</span></a>
				<ul class="acitem">
					<li><a href="content-grid.html"><span class="list-icon">&nbsp;</span>All Category</a></li>
					<li><a href="form-grid.html"><span class="list-icon">&nbsp;</span>Add Category</a></li>
				</ul>
				</li>
				<li><a href="chart.html"><span class="nav_icon chart_8"></span>Sales</a></li>
				<li><a href="gallery.html"><span class="nav_icon image2_2"></span>Purchase</a></li>
				<li><a href="calendar.html"><span class="nav_icon month_calendar"></span>Vendor</a></li>
				<li><a href="file-manager.html"><span class="nav_icon folder"></span>Customer</a></li>
				<li><a href="#"><span class="nav_icon bulls_eye"></span>Reports<span class="alert_notify blue">5</span><span class="up_down_arrow">&nbsp;</span></a>
				<ul class="acitem">
					<li><a href="403.html" target="_blank"><span class="list-icon">&nbsp;</span>403</a></li>
					<li><a href="404.html" target="_blank"><span class="list-icon">&nbsp;</span>404</a></li>
					<li><a href="405.html" target="_blank"><span class="list-icon">&nbsp;</span>405</a></li>
					<li><a href="500.html" target="_blank"><span class="list-icon">&nbsp;</span>500</a></li>
					<li><a href="503.html" target="_blank"><span class="list-icon">&nbsp;</span>503</a></li>
				</ul>
				</li>
				<li><a href="invoice.html"><span class="nav_icon money_2"></span>Invoice</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="container">
	<div id="header" class="blue_lin">
		<div class="header_left">
			<div class="logo">
				<img src="{{asset('pos/images/logo.png')}}" width="160" height="60" alt="Ekra">
			</div>
			<div id="responsive_mnu">
				<a href="#responsive_menu" class="fg-button" id="hierarchybreadcrumb"><span class="responsive_icon"></span>Menu</a>
				<div id="responsive_menu" class="hidden">
					<ul>
						<li><a href="#"> Dashboard</a>
						<ul>
							<li><a href="dashboard.html">Dashboard Main</a></li>
							<li><a href="dashboard-01.html">Dashboard 01</a></li>
							<li><a href="dashboard-02.html">Dashboard 02</a></li>
							<li><a href="dashboard-03.html">Dashboard 03</a></li>
							<li><a href="dashboard-04.html">Dashboard 04</a></li>
						</ul>
						</li>
						<li><a href="#"> Forms</a>
						<ul>
							<li><a href="form-elements.html">All Forms Elements</a></li>
							<li><a href="left-label-form.html">Left Label Form</a></li>
							<li><a href="top-label-form.html">Top Label Form</a></li>
							<li><a href="form-xtras.html">Additional Forms (3)</a></li>
							<li><a href="form-validation.html">Form Validation</a></li>
							<li><a href="signup-form.html">Signup Form</a></li>
							<li><a href="content-post.html">Content Post Form</a></li>
							<li><a href="wizard.html">wizard</a></li>
						</ul>
						</li>
						<li><a href="table.html"> Tables</a></li>
						<li><a href="ui-elements.html">User Interface Elements</a></li>
						<li><a href="buttons-icons.html">Butons And Icons</a></li>
						<li><a href="widgets.html">All Widgets</a></li>
						<li><a href="#">Pages</a>
						<ul>
							<li><a href="post-preview.html">Content</a></li>
							<li><a href="login-01.html" target="_blank">Login 01</a></li>
							<li><a href="login-02.html" target="_blank">Login 02</a></li>
							<li><a href="login-03.html" target="_blank">Login 03</a></li>
							<li><a href="forgot-pass.html" target="_blank">Forgot Password</a></li>
						</ul>
						</li>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="#">Grid</a>
						<ul>
							<li><a href="content-grid.html">Content Grid</a></li>
							<li><a href="form-grid.html">Form Grid</a></li>
						</ul>
						</li>
						<li><a href="chart.html">Chart/Graph</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="file-manager.html">File Manager</a></li>
						<li><a href="#">Error Pages</a>
						<ul>
							<li><a href="403.html" target="_blank">403</a></li>
							<li><a href="404.html" target="_blank">404</a></li>
							<li><a href="505.html" target="_blank">405</a></li>
							<li><a href="500.html" target="_blank">500</a></li>
							<li><a href="503.html" target="_blank">503</a></li>
						</ul>
						</li>
						<li><a href="invoice.html">Invoice</a></li>
						<li><a href="#">Email Templates</a>
						<ul>
							<li><a href="email-templates/forgot-pass-email-template.html" target="_blank">Forgot Password</a></li>
							<li><a href="email-templates/registration-confirmation-email-template.html" target="_blank">Registaion Confirmation</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_right">
			<div id="top_notification">
				<ul>
					<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle alert"><span class="icon"></span><span class="alert_notify orange">30</span></a>
					<div class="notification_list dropdown-menu pull-left blue_d">
						<div class="white_lin nlist_block">
							<ul>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Cras erat diam, consequat quis tincidunt nec, eleifend.</a>
								</div>
								</li>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Donec neque leo, ullamcorper eget aliquet sit amet.</a>
								</div>
								</li>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Nam euismod dolor ac lacus facilisis imperdiet.</a>
								</div>
								</li>
							</ul>
							<span class="btn_24_blue"><a href="#">View All</a></span>
						</div>
					</div>
					</li>
					<li class="inbox dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="icon"></span><span class="alert_notify blue">30</span></a>
					<div class="notification_list dropdown-menu blue_d">
						<div class="white_lin nlist_block">
							<ul>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Cras erat diam, consequat quis tincidunt nec, eleifend.</a>
								</div>
								</li>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Donec neque leo, ullamcorper eget aliquet sit amet.</a>
								</div>
								</li>
								<li>
								<div class="nlist_thumb">
									<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
								</div>
								<div class="list_inf">
									<a href="#">Nam euismod dolor ac lacus facilisis imperdiet.</a>
								</div>
								</li>
							</ul>
							<span class="btn_24_blue"><a href="#">View All</a></span>
						</div>
					</div>
					</li>
				</ul>
			</div>
			<div id="user_nav">
				<ul>
					<li class="user_thumb"><a href="#"><span class="icon"><img src="{{asset('pos/images/user_thumb.png')}}" width="30" height="30" alt="User"></span></a></li>
					<li class="user_info"><span class="user_name">Administrator</span><span><a href="#">Profile</a> &#124; <a href="#">Settings</a> &#124; <a href="#">Help&#63;</a></span></li>
					<li class="logout"><a href="#"><span class="icon"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page_title">
		<span class="title_icon"><span class="computer_imac"></span></span>
		<h3>Dashboard</h3>
		<div class="top_search">
			<form action="#" method="post">
				<ul id="search_box">
					<li>
					<input name="" type="text" class="search_input" id="suggest1" placeholder="Search...">
					</li>
					<li>
					<input name="" type="submit" value="" class="search_btn">
					</li>
				</ul>
			</form>
		</div>
	</div>
	<div class="switch_bar">
		<ul>
			<li>
			<a href="#"><span class="stats_icon current_work_sl"></span><span class="label">Analytics</span></a>
			</li>
			<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="stats_icon user_sl"><span class="alert_notify orange">30</span></span><span class="label"> Users</span></a>
			<div class="notification_list dropdown-menu blue_d">
				<div class="white_lin nlist_block">
					<ul>
						<li>
						<div class="nlist_thumb">
							<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
						</div>
						<div class="list_inf">
							<a href="#">Cras erat diam, consequat quis tincidunt nec, eleifend.</a>
						</div>
						</li>
						<li>
						<div class="nlist_thumb">
							<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
						</div>
						<div class="list_inf">
							<a href="#">Donec neque leo, ullamcorper eget aliquet sit amet.</a>
						</div>
						</li>
						<li>
						<div class="nlist_thumb">
							<img src="{{asset('pos/images/photo_60x60.jpg')}}" width="40" height="40" alt="img">
						</div>
						<div class="list_inf">
							<a href="#">Nam euismod dolor ac lacus facilisis imperdiet.</a>
						</div>
						</li>
					</ul>
					<span class="btn_24_blue"><a href="#">View All</a></span>
				</div>
			</div>
			</li>
			<li><a href="#"><span class="stats_icon administrative_docs_sl"></span><span class="label">Content</span></a></li>
			<li><a href="#"><span class="stats_icon finished_work_sl"><span class="alert_notify blue">30</span></span><span class="label">Task List</span></a></li>
			<li><a href="#"><span class="stats_icon config_sl"></span><span class="label">Settings</span></a></li>
			<li><a href="#"><span class="stats_icon archives_sl"></span><span class="label">Archive</span></a></li>
			<li><a href="#"><span class="stats_icon address_sl"></span><span class="label">Contact</span></a></li>
			<li><a href="#"><span class="stats_icon folder_sl"></span><span class="label">Media</span></a></li>
			<li><a href="#"><span class="stats_icon category_sl"></span><span class="label">Explorer</span></a></li>
			<li><a href="#"><span class="stats_icon calendar_sl"><span class="alert_notify orange">30</span></span><span class="label">Events</span></a></li>
			<li><a href="#"><span class="stats_icon lightbulb_sl"></span><span class="label">Support</span></a></li>
			<li><a href="#"><span class="stats_icon bank_sl"><span class="alert_notify blue">30</span></span><span class="label">Order List</span></a></li>
		</ul>
	</div>