<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (+90) 123 456 78 90 </li>
					<li><i class="fa fa-envelope"></i> <a href="mailto:bilkent@bilkent.edu.tr">bilkent@bilkent.edu.tr</a></li>
					<!-- <li>
						<div class="top-bar-dropdown">
							<span>Dropdown Menu</span>
							<ul class="options">
								<li><div class="arrow"></div></li>
								<li><a href="#">Nice First Link</a></li>
								<li><a href="#">Second Link With Long Title</a></li>
								<li><a href="#">Third Link</a></li>
							</ul>
						</div>
					</li>-->
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->
	
<style>
.videoWrapper2 {
	
	padding-bottom: 10px; /* 16:9 */
	padding-top: -2px;
	padding-left: 5px;
	height: 60px;
}
.videoWrapper2 iframe {
	position: ;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
	
</style>

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					
					<div class="videoWrapper2">
					<iframe frameborder="0" src="logo/index.html" style="border: 0px none; height: 60px;width: 120px;"></iframe>
					</div>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1" style="margin-left: 14%;margin-top: -15%;">
					<ul id="responsive">

						<li><a href="index.php">Home</a>
						</li>

						<li><a href="listings.php">Listings</a>
						</li>

						<li><a href="#">My Account</a>
							<ul>
								<li><a href="profile.php">My Profile</a></li>
								<li><a href="bookmarks.php">Bookmarked Listings</a></li>
								<li><a href="properties.php">My Properties</a></li>
								<li><a href="change_password.php">Change Password</a></li>
							</ul>
						</li>

						<!--<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Single Properties</a>
									<ul>
										<li><a href="single-property-page-1.html">Property Style 1</a></li>
										<li><a href="single-property-page-2.html">Property Style 2</a></li>
										<li><a href="single-property-page-3.html">Property Style 3</a></li>
									</ul>
								</li>
								<li><a href="#">Search Styles</a>
									<ul>
										<li><a href="index-2.html">Home Search 1</a></li>
										<li><a href="index-3.html">Home Search 2</a></li>
										<li><a href="index-4.html">Home Search 3</a></li>
										<li><a href="listings-list-full-width.html">Advanced Style</a></li>
										<li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>
									</ul>
								</li>

								<li><a href="#">Agents</a>
									<ul>
										<li><a href="agents-list.html">Agents List</a></li>
										<li><a href="agent-page.html">Agent Page</a></li>
									</ul>
								</li>

								<li><a href="compare-properties.html">Compare Properties</a></li>
								<li><a href="submit-property.html">Submit Property</a></li>
							</ul>
						</li>
						-->

						<li><a href="advancedsearch.php">Advanced Search</a></li>
						<li><a href="contact.php">Contact</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					<?php if(!isset($_SESSION['userID'])){?><a href="login_register.php" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a><?php }elseif(isset($_SESSION['username'])){?>
					<a href="submit_property.php" class="button border">Submit Property</a><i class="tip" style="top:16px;left:2px;";><div class="tip-content" style="padding: 2px 2px;">You need to have Agent Account to send property<br>Plase contact with Administration</div></i>
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="<?php echo $_SESSION['uPicture'];?>" alt=""></span>Hi, <?php echo explode(' ', $_SESSION['fullName'])[0];?> !</div>
						<ul>
							<li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
							<li><a href="bookmarks.php"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
							<li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
							<li><a href="logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
					</div>
					<?php }?>

				</div>
				<!-- Header Widget / End -->

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->