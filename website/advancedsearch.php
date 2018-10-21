<?php 
require_once "header.php";
?>
<body class="overflow-hidden">

<!-- Wrapper -->
<div id="wrapper">


<?php

require_once "header_menu.php";
?>

<!-- Content
================================================== -->
<div class="fs-container">

	<div class="fs-inner-container">

		<!-- Map -->
		<div id="map-container">
		    <div id="map" data-map-zoom="4" data-map-scroll="true">
		        <!-- map goes here -->
		    </div>

		    <!-- Map Navigation -->
			<a href="#" id="geoLocation" title="Your location"></a>
			<ul id="mapnav-buttons" class="top">
			    <li><a href="#" id="prevpoint" title="Previous point on map">Prev</a></li>
			    <li><a href="#" id="nextpoint" title="Next point on mp">Next</a></li>
			</ul>
		</div>

	</div>


	<div class="fs-inner-container">
		<div class="fs-content">

			<!-- Search -->
			<section class="search margin-bottom-30">

				<div class="row">
					<div class="col-md-12">

						<!-- Title -->
						<h4 class="search-title">Find Your Home</h4>

						<!-- Form -->
						<div class="main-search-box no-shadow">


							<!-- Row With Forms -->
							<div class="row with-forms">

								<!-- Main Search Input -->
								<div class="col-fs-6">
									<input type="text" placeholder="Enter address e.g. street, city or state" value=""/>
								</div>

								<!-- Status -->
								<div class="col-fs-3">
									<select data-placeholder="Any Status" class="chosen-select-no-single" >
										<option>Any Status</option>	
										<option>For Sale</option>
										<option>For Rent</option>
									</select>
								</div>

								<!-- Property Type -->
								<div class="col-fs-3">
									<select data-placeholder="Any Type" class="chosen-select-no-single" >
										<option>Any Type</option>	
										<option>Apartments</option>
										<option>Houses</option>
										<option>Commercial</option>
										<option>Garages</option>
										<option>Lots</option>
									</select>
								</div>

							</div>
							<!-- Row With Forms / End -->


							<!-- Row With Forms -->
							<div class="row with-forms">

								<!-- Min Price -->
								<div class="col-fs-3">
									
									<!-- Select Input -->
									<div class="select-input disabled-first-option">
										<input type="text" placeholder="Min Area" data-unit="Sq Ft">
										<select>	
											<option>Min Area</option>
											<option>300</option>
											<option>400</option>
											<option>500</option>
											<option>700</option>
											<option>800</option>
											<option>1000</option>
											<option>1500</option>
										</select>
									</div>
									<!-- Select Input / End -->

								</div>

								<!-- Max Price -->
								<div class="col-fs-3">
									
									<!-- Select Input -->
									<div class="select-input disabled-first-option">
										<input type="text" placeholder="Max Area" data-unit="Sq Ft">
										<select>	
											<option>Max Area</option>
											<option>300</option>
											<option>400</option>
											<option>500</option>
											<option>700</option>
											<option>800</option>
											<option>1000</option>
											<option>1500</option>
										</select>
									</div>
									<!-- Select Input / End -->

								</div>


								<!-- Min Price -->
								<div class="col-fs-3">
									
									<!-- Select Input -->
									<div class="select-input disabled-first-option">
										<input type="text" placeholder="Min Price" data-unit="USD">
										<select>		
											<option>Min Price</option>
											<option>1 000</option>
											<option>2 000</option>	
											<option>3 000</option>	
											<option>4 000</option>	
											<option>5 000</option>	
											<option>10 000</option>	
											<option>15 000</option>	
											<option>20 000</option>	
											<option>30 000</option>
											<option>40 000</option>
											<option>50 000</option>
											<option>60 000</option>
											<option>70 000</option>
											<option>80 000</option>
											<option>90 000</option>
											<option>100 000</option>
											<option>110 000</option>
											<option>120 000</option>
											<option>130 000</option>
											<option>140 000</option>
											<option>150 000</option>
										</select>
									</div>
									<!-- Select Input / End -->

								</div>


								<!-- Max Price -->
								<div class="col-fs-3">
									
									<!-- Select Input -->
									<div class="select-input disabled-first-option">
										<input type="text" placeholder="Max Price" data-unit="USD">
										<select>		
											<option>Max Price</option>
											<option>1 000</option>
											<option>2 000</option>	
											<option>3 000</option>	
											<option>4 000</option>	
											<option>5 000</option>	
											<option>10 000</option>	
											<option>15 000</option>	
											<option>20 000</option>	
											<option>30 000</option>
											<option>40 000</option>
											<option>50 000</option>
											<option>60 000</option>
											<option>70 000</option>
											<option>80 000</option>
											<option>90 000</option>
											<option>100 000</option>
											<option>110 000</option>
											<option>120 000</option>
											<option>130 000</option>
											<option>140 000</option>
											<option>150 000</option>
										</select>
									</div>
									<!-- Select Input / End -->

								</div>

							</div>
							<!-- Row With Forms / End -->


							<!-- Search Button -->
							<button class="button fs-map-btn">Update</button>

							<!-- More Search Options -->
							<a href="#" class="more-search-options-trigger margin-top-20" data-open-title="More Options" data-close-title="Less Options"></a>

							<div class="more-search-options relative">
								<div class="more-search-options-container margin-top-30">

									<!-- Row With Forms -->
									<div class="row with-forms">

										<!-- Age of Home -->
										<div class="col-fs-3">
											<select data-placeholder="Age of Home" class="chosen-select-no-single" >
												<option label="blank"></option>	
												<option>Age of Home (Any)</option>	
												<option>0 - 1 Years</option>
												<option>0 - 5 Years</option>
												<option>0 - 10 Years</option>
												<option>0 - 20 Years</option>
												<option>0 - 50 Years</option>
												<option>50 + Years</option>
											</select>
										</div>

										<!-- Rooms Area -->
										<div class="col-fs-3">
											<select data-placeholder="Rooms" class="chosen-select-no-single" >
												<option label="blank"></option>	
												<option>Rooms (Any)</option>	
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>

										<!-- Min Area -->
										<div class="col-fs-3">
											<select data-placeholder="Beds" class="chosen-select-no-single" >
												<option label="blank"></option>	
												<option>Beds (Any)</option>	
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>

										<!-- Max Area -->
										<div class="col-fs-3">
											<select data-placeholder="Baths" class="chosen-select-no-single" >
												<option label="blank"></option>	
												<option>Baths (Any)</option>	
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>

									</div>
									<!-- Row With Forms / End -->


									<!-- Checkboxes -->
									<div class="checkboxes in-row">
								
										<input id="check-2" type="checkbox" name="check">
										<label for="check-2">Air Conditioning</label>

										<input id="check-3" type="checkbox" name="check">
										<label for="check-3">Swimming Pool</label>

										<input id="check-4" type="checkbox" name="check" >
										<label for="check-4">Central Heating</label>

										<input id="check-5" type="checkbox" name="check">
										<label for="check-5">Laundry Room</label>	


										<input id="check-6" type="checkbox" name="check">
										<label for="check-6">Gym</label>

										<input id="check-7" type="checkbox" name="check">
										<label for="check-7">Alarm</label>

										<input id="check-8" type="checkbox" name="check">
										<label for="check-8">Window Covering</label>
								
									</div>
									<!-- Checkboxes / End -->

								</div>

							</div>
							<!-- More Search Options / End -->


						</div>
						<!-- Box / End -->
					</div>
				</div>

			</section>
			<!-- Search / End -->



			<!-- Sorting / Layout Switcher -->
			<div class="row fs-switcher">

				<div class="col-md-6">
					<!-- Showing Results -->
					<p class="showing-results">2 Results Found </p>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
					</div>
				</div>
			</div>



			<!-- Listings -->
			<div class="listings-container grid-layout row fs-listings">

				<!-- Listing Item -->
				<div class="listing-item">

					<a href="property.php?pid=1" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Featured</span>
							<span>For Sale</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<div class="listing-carousel">
							<div><img src="images/listing-01.jpg" alt=""></div>
							<div><img src="images/listing-01b.jpg" alt=""></div>
							<div><img src="images/listing-01c.jpg" alt=""></div>
						</div>
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="property.php?pid=1">Camlik Sitesi E2 Blok</a></h4>
							<a href="https://maps.google.com/maps?q=Albatros+Cd.+%C3%9Cniversiteler+Mh.+06800+%C3%87ankaya&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								Kat: 24 No: 120, Albatros Cd. Üniversiteler Mh. 06800 Çankaya
							</a>

							<a href="property.php?pid=1" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
							<li>City View</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Yonca Yunatci</a>
							<span><i class="fa fa-calendar-o"></i> 1 week ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="property.php?pid=2" class="listing-img-container">

						<div class="listing-badges">
							<span>For Rent</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$900 <i>monthly</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>

						<img src="images/listing-02.jpg" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="property.php?pid=2">Park Sitesi F1 Blok</a></h4>
							<a href="https://maps.google.com/maps?q=Bilkent+Park+Sitesi+%C3%9Cniversiteler+Mh.+06800+%C3%87ankaya&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								Kat10 No:80, Bilkent Park Sitesi Üniversiteler Mh. 06800 Çankaya
							</a>

							<a href="property.php?pid=2" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>440 sq ft</li>
							<li>1 Bedroom</li>
							<li>1 Room</li>
							<li>1 Bathroom</li>
							<li>Forest View</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Yonca Yunatci</a>
							<span><i class="fa fa-calendar-o"></i> 2 days ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				


			

		</div>
	</div>

</div>




<!-- Scripts
================================================== -->
<script src="http://www.vasterad.com/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBhRoqUsSCm4fIN1VIKIX-ReMCwmY8WGdA&amp;sensor=false&amp;language=en"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>

</div>
<!-- Wrapper / End -->


</body>

<!-- Mirrored from www.vasterad.com/themes/findeo_html/listings-half-map-grid-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2017 16:56:46 GMT -->
</html>