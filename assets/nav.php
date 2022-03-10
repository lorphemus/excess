<header class="header-style-two">
	<div class="header-wrapper">
		<div class="header-top-area bg-gradient-color d-none d-lg-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left-part">
						<span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> <?php echo select("settings", "address"); ?></span>
						<span class="phone"><i class="webexflaticon flaticon-send"></i> <?php echo select("settings", "mail"); ?></span>
					</div>
					<div class="col-lg-6 header-top-right-part text-right">
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul>
						<div class="language">
							<a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> Language</a>
							<ul class="language-dropdown">
								<li><a href="#">English</a></li>
								<li><a href="#">Turkish</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bt_blank_nav"></div>
		<div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="navbar-brand logo f-left mrt-0 mrt-md-0" href="index.php">
							<img id="logo-image" class="img-center" src="images/logo.png" alt="">
						</a>
						<div class="mobile-menu-right"></div>
						<div class="header-searchbox-style-two d-none d-xl-block">
							<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
								<span class="bar1"></span>
								<span class="bar2"></span>
								<span class="bar3"></span>
							</div>
							<div class="show-searchbox">
								<a href="#"><i class="webex-icon-Search"></i></a>
							</div>
							<div class="toggle-searchbox">
								<form action="#" id="searchform-all" method="get">
									<div>
										<input type="text" id="s" class="form-control" placeholder="Search...">
										<div class="input-box">
											<input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="side-panel-content">
							<div class="close-icon">
								<button><i class="webex-icon-cross"></i></button>
							</div>
							<div class="side-panel-logo mrb-30">
								<a href="index.php">
									<img src="images/logo-sidebar-dark.png" alt="" />
								</a>
							</div>
							<div class="side-info mrb-30">
								<div class="side-panel-element mrb-25">
									<h4 class="mrb-10">Office Address</h4>
									<ul class="list-items">
										<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span><?php echo select("settings", "address"); ?></li>
										<li><span class="fas fa-envelope mrr-10 text-primary-color"></span><?php echo select("settings", "mail"); ?></li>
										<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><?php echo select("settings", "phone"); ?></li>
									</ul>
								</div>
								<div class="side-panel-element mrb-30">
									<h4 class="mrb-15">Pintarest</h4>
									<ul class="pintarest-list">
										<li><a href="#"><img class="img-full" src="images/side-panel/1.jpg" alt=""></a></li>
										<li><a href="#"><img class="img-full" src="images/side-panel/2.jpg" alt=""></a></li>
										<li><a href="#"><img class="img-full" src="images/side-panel/3.jpg" alt=""></a></li>
										<li><a href="#"><img class="img-full" src="images/side-panel/4.jpg" alt=""></a></li>
										<li><a href="#"><img class="img-full" src="images/side-panel/5.jpg" alt=""></a></li>
										<li><a href="#"><img class="img-full" src="images/side-panel/6.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
							<h4 class="mrb-15">Social List</h4>
							<ul class="social-list">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="main-menu f-right">
							<nav id="mobile-menu-right">
								<ul>
									<li>
										<a href="index.php">Anasayfa</a>
									</li>
									<li><a href="about.php">Hakkımızda</a></li>
									<li class="has-sub">
										<a href="#">Hizmetlerimiz</a>
										<ul class="sub-menu">
											<li class="has-sub-child">
												<a href="#">Our Team</a>
												<ul class="sub-menu right-view">
													<li><a href="page-our-team.html">All Members</a></li>
													<li><a href="page-single-team.html">Team Details</a></li>
												</ul>
											</li>
											<li><a href="page-pricing.html">Pricing</a></li>
											<li><a href="page-testimonials.html">Testimonials</a></li>
											<li><a href="page-contact-us.html">Contact Us</a></li>
											<li><a href="page-faqs.html">FAQs</a></li>
											<li><a href="404.html">Eror Page</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Projeler</a>
									</li>
									<li class="right-view">
										<a href="#">Blog</a>
									</li>
									<li class="right-view">
										<a href="#">İletişim</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>