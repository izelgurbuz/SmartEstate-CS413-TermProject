<?php 
require_once "header.php";
?>

<body>

<!-- Wrapper -->
<div id="wrapper">

<?php


require_once "compare.php";
require_once "header_menu.php";
?>



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Comparing Properties</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Comparing Properties</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>



<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<!-- Compare List -->
			<div class="compare-list-container">
				<ul id="compare-list">

					<li class="compare-list-properties">
						<div class="blank-div"></div>
						<div>
							<a href="#">
								<div class="clp-img">
									<img src="images/listing-01.jpg" alt="">
									<span class="remove-from-compare"><i class="fa fa-close"></i></span>
								</div>

								<div class="clp-title">
									<h4>Eagle Apartments</h4>
									<span>$275,000</span>
								</div>
							</a>
						</div>

						<div>
							<a href="#">
								<div class="clp-img">
									<img src="images/listing-04.jpg" alt="">
									<span class="remove-from-compare"><i class="fa fa-close"></i></span>
								</div>
								<div class="clp-title">
									<h4>Selway Apartments</h4>
									<span>$420,000</span>
								</div>
							</a>
						</div>

						<div>
							<a href="#">
								<div class="clp-img">
									<img src="images/listing-05.jpg" alt="">
									<span class="remove-from-compare"><i class="fa fa-close"></i></span>
								</div>
								<div class="clp-title">
									<h4>Oak Tree Villas</h4>
									<span>$535,000</span>
								</div>
							</a
						</div>
					</li>
					
					<li>
						<div>Area</div>
						<div>1450 sq m</div>
						<div>1220 sq m</div>
						<div>1780 sq m</div>
					</li>

					<li>
						<div>Rooms</div>
						<div>3</div>
						<div>3</div>
						<div>4</div>
					</li>

					<li>
						<div>Bedrooms</div>
						<div>1</div>
						<div>2</div>
						<div>2</div>
					</li>

					<li>
						<div>Bathrooms</div>
						<div>1</div>
						<div>1</div>
						<div>2</div>
					</li>

					<li>
						<div>Air Conditioning</div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
					</li>

					<li>
						<div>Swimming Pool</div>
						<div><span class="not-available"></span></div>
						<div><span class="not-available"></span></div>
						<div><span class="available"></span></div>
					</li>

					<li>
						<div>Laundry Room</div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
					</li>
					
					<li>
						<div>Window Covering</div>
						<div><span class="not-available"></span></div>
						<div><span class="available"></span></div>
						<div><span class="not-available"></span></div>
					</li>

					<li>
						<div>Gym</div>
						<div><span class="available"></span></div>
						<div><span class="not-available"></span></div>
						<div><span class="not-available"></span></div>
					</li>

					<li>
						<div>Internet</div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
						<div><span class="available"></span></div>
					</li>

					<li>
						<div>Alarm</div>
						<div><span class="not-available"></span></div>
						<div><span class="available"></span></div>
						<div><span class="not-available"></span></div>
					</li>


					<li>
						<div>Building Age</div>
						<div>0 - 1 Year</div>
						<div>2 - 5 Years</div>
						<div>2 - 5 Years</div>
					</li>

					<li>
						<div>Heating</div>
						<div>Forced Air</div>
						<div>Gas</div>
						<div>Forced Air</div>
					</li>

					<li>
						<div>Parking</div>
						<div>Attached Garage</div>
						<div><span class="not-available"></span></div>
						<div><span class="not-available"></span></div>
					</li>
					<li>
						<div>Sewer</div>
						<div>Public</div>
						<div>Public</div>
						<div>Public</div>
					</li>

				</ul>
			</div>
			<!-- Compare List / End -->

		</div>
	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Property</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Agents</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="432c25252a202603263b222e332f266d202c2e">[email&#160;protected]</span></a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<?php
require_once "footer.php";
?>