<body>

		<!-- Main Container Fluid -->
	<div class="container-fluid fluid menu-left">

		<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
		<div class="navbar main hidden-print">

			<!-- Wrapper -->
			<div class="wrapper">


								<!-- Menu Toggle Button -->
			   	<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->


				<!-- Top Menu Right -->
				<ul class="topnav pull-right">

					<!-- Language menu -->
					<li class="hidden-phone dropdown dd-1 dd-flags" id="lang_nav">
						<a href="#" data-toggle="dropdown"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/en.png" alt="en" /></a>
				    	<ul class="dropdown-menu pull-left">
				      		<li class="active"><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=en" title="English"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/en.png" alt="English"> English</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=ro" title="Romanian"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=it" title="Italian"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=fr" title="French"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/fr.png" alt="French"> French</a></li>
				      		<li><a href="?page=blank&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light&amp;lang=pl" title="Polish"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/common/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
				    	</ul>
					</li>
					<!-- // Language menu END -->

					<!-- Dropdown -->
					<li class="dropdown dd-1 visible-desktop">
						<a href="" data-toggle="dropdown" class="glyphicons shield"><i></i>Get Help <span class="caret"></span></a>
						<ul class="dropdown-menu pull-right">

							<li class="dropdown submenu">
	                    		<a href="#" class="dropdown-toggle glyphicons bell" data-toggle="dropdown"><i></i>Level 2</a>
								<ul class="dropdown-menu submenu-show submenu-hide pull-left">
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.1</a>
										<ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.1.1</a></li>
	                                    	<li><a href="#">Level 2.1.2</a></li>
	                                    	<li><a href="#">Level 2.1.3</a></li>
	                                    	<li><a href="#">Level 2.1.4</a></li>
			                            </ul>
			                        </li>
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.2</a>
			                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.2.1</a></li>
			                                <li><a href="#">Level 2.2.2</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </li>

			                <li><a href="" class="glyphicons settings"><i></i>Some option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Some other option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Other option</a></li>

						</ul>
					</li>
					<!-- // Dropdown END -->

					<!-- Profile / Logout menu -->
					<li class="account dropdown dd-1">
												<a data-toggle="dropdown" href="" class="glyphicons logout lock"><span class="hidden-phone"><?php echo $fname; ?> <?php echo $lname; ?></span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="/user/my_account" class="glyphicons cogwheel">Settings<i></i></a></li>
							<li><a href="/user/my_account" class="glyphicons camera">My Photos<i></i></a></li>
							<li class="profile">
								<span>
									<span class="heading">Profile <a href="/user/my_account" class="pull-right">edit</a></span>
									<span class="img"></span>
									<span class="details">
										<a href="."><?php echo $fname; ?> <?php echo $lname; ?></a>
										<?php echo $email; ?>
									</span>
									<span class="clearfix"></span>
								</span>
							</li>
							<li>
								<span>
									<a class="btn btn-default btn-mini pull-right" href="/auth/logout">Sign Out</a>
								</span>
							</li>
						</ul>
											</li>
					<!-- // Profile / Logout menu END -->

				</ul>
				<!-- // Top Menu Right END -->


				<div class="clearfix"></div>
			</div>
			<!-- // Wrapper END -->

			<span class="toggle-navbar-hidden"></span>
		</div>
		<!-- Top navbar END -->

				<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">

		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-phone hidden-print">

			<!-- Brand -->
			<a href="/" class="appbrand">LogicPSA <span>Automate Your IT</span></a>

			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">


  			<!-- Sidebar Profile -->
			<span class="profile">
				<p>Welcome <?php echo $fname; ?> <?php echo $lname; ?><a href="my_account"></a></p>
				<a class="img" href="/user/my_account"><img src="http://<?php  echo $_SERVER['HTTP_HOST']; ?>/public/files/avatar/<?php echo $avatar; ?>" alt="Avatar" /></a>
				<span>
					<ul>
						<li><a href="/user/my_account" class="glyphicons lock"><i></i>Account</a></li>
						<li><a href="/auth/logout" class="glyphicons eject"><i></i>Logout</a></li>
					</ul>
				</span>
			</span>
			<!-- // Sidebar Profile END -->

			<!-- Regular Size Menu -->

<ul class="menu-0">

								<!-- Blank page template menu example -->
				<!-- Menu Regular Item (add class active to LI for an active menu item) -->
				<li class="glyphicons right_arrow active"><a href="#"><i></i><span>Dashboard</span></a></li>

				<!-- Submenu Level 1 (closed) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-1"><i></i><span>Company</span></a>
					<ul class="collapse" id="submenu-1">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="/company/viewAll"><span>List Companies</span></a></li>
						<li><a href="/company/add"><span>Add Company</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>
				</li>
				<!-- // Submenu Level 1 END -->

				<!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-2"><i></i><span>Contacts</span></a>
					<ul class="collapse in" id="submenu-2">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>List Contacts</span></a></li>
						<li><a href="#"><span>Add Contact</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>
				</li>
				<!-- // Submenu Level 1 (active) END -->
				<!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-3"><i></i><span>Work Orders</span></a>
					<ul class="collapse in" id="submenu-3">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>Open Work Orders</span></a></li>
						<li><a href="#"><span>Closed Work Orders</span></a></li>
						<li><a href="#"><span>Pending Work Orders</span></a></li>
						<li><a href="#"><span>View All Work Orders</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>

				</li>
				<!-- // Submenu Level 1 (active) END -->
                				<!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-4"><i></i><span>Help Desk</span></a>
					<ul class="collapse in" id="submenu-4">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>List Contacts</span></a></li>
						<li><a href="#"><span>Add Contact</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>

				</li>
				<!-- // Submenu Level 1 (active) END -->
                				<!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-5"><i></i><span>Marketing</span></a>
					<ul class="collapse in" id="submenu-5">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>New Marketing Campaign</span></a></li>
						<li><a href="#"><span>Mass Email</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>

				</li>
				<!-- // Submenu Level 1 (active) END -->
                <!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-6"><i></i><span>Finance</span></a>
					<ul class="collapse in" id="submenu-6">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>Pending Work Orders</span></a></li>
						<li><a href="#"><span>Unpaid Invoices</span></a></li>
						<li><a href="#"><span>Paid Invoices</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->

					</ul>

				</li>
				<!-- // Submenu Level 1 (active) END -->
                <!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-7"><i></i><span>Knowledgebase</span></a>
					<ul class="collapse in" id="submenu-7">

						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>Notes</span></a></li>

						<!-- // Submenu Level 1 Regular Items END -->

					</ul>

				</li>
				<!-- // Submenu Level 1 (active) END -->


				<!-- // Blank page template menu example END -->


			</ul>
            			<div class="clearfix"></div>

			<!-- // Regular Size Menu END -->

			<ul class="menu-1">
				<li class="hasSubmenu active">
					<a class="glyphicons wifi_alt" href="#menu-recent-stats" data-toggle="collapse"><i></i><span>Recent stats</span></a>
					<ul class="collapse in" id="menu-recent-stats">
						<li><a class="glyphicons envelope" href="#"><i></i><span>5 New Emails</span></a></li>
						<li><a class="glyphicons chat" href="#"><i></i><span>New Message on 19 Jan</span></a></li>
						<li><a class="glyphicons user_add" href="#"><i></i><span>10 Users Subscribed</span></a></li>
						<li><a class="glyphicons cart_in" href="#"><i></i><span>2 Orders worth of &dollar;239</span></a></li>
						<li><a class="glyphicons single circle_plus" href="#"><i></i><span>View all</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
			<div class="separator bottom"></div>

			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->

		</div>
		<!-- // Sidebar Menu END -->
        <br>