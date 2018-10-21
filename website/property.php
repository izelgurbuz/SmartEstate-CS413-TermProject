<?php 
require('database/init.php');
require_once "header.php";
setlocale(LC_MONETARY, 'en_US.UTF-8');
?>

<body>

<!-- Wrapper -->
<div id="wrapper">

<?php


require_once "compare.php";
require_once "header_menu.php";
$agentID = -1;
$propertyName = '';$forwhat = '';$price = 0;$description = '';$bedroom = 0;$room = 0; $bathroom = 0;
$img1 ='';$img2 ='';$img3 ='';$img4 ='';$img5 ='';$img6 ='';
$BuildingAge ='';$Heating ='';$ExerciseRoom ='';$Parking ='';$Sewer ='';$StorageRoom ='';$Cooling ='';$Water ='';
$isAirConditioning = '';$isLaundryRoom = '';$isWindowCovering = '';$isSwimmingPool = '';$isGym = '';$isInternet = '';$isCentralHeating = '';$isAlarm = '';
$firstFloorPlan = '';$firstFloorArea = 0;$secondFloorPlan = '';$secondFloorArea = 0;$garage = '';$garageArea = 0;
$youtubeURL = ''; $location = '';
if(isset($_GET['pid'])){

	$pid = $_GET['pid'];
	$query = "SELECT * from properties WHERE pid = '$pid'";
	$result = mysqli_query($con,$query);
	$fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$rows = mysqli_num_rows($result);
	if($rows==1){
		$agentID = $fetch['agentID'];
		$propertyName = $fetch['name'];
		$forwhat = $fetch['forWhat'];
		$price = $fetch['price'];
		$description = $fetch['description'];
		$bedroom = $fetch['bedroom'];
		$room = $fetch['room'];
		$bathroom = $fetch['bathroom'];
		$area = $fetch['area'];
		$addDate = $fetch['addDate'];
		$address = $fetch['address'];
		$img1 = $fetch['img1'];
		$img2 = $fetch['img2'];
		$img3 = $fetch['img3'];
		$img4 = $fetch['img4'];
		$img5 = $fetch['img5'];
		$img6 = $fetch['img6'];
		$BuildingAge = $fetch['BuildingAge'];
		$Heating = $fetch['Heating'];
		$ExerciseRoom = $fetch['ExerciseRoom'];
		$Parking = $fetch['Parking'];
		$Sewer = $fetch['Sewer'];
		$StorageRoom = $fetch['StorageRoom'];
		$Cooling = $fetch['Cooling'];
		$Water = $fetch['Water'];
		$isAirConditioning = $fetch['isAirConditioning'];
		$isLaundryRoom = $fetch['isLaundryRoom'];
		$isWindowCovering = $fetch['isWindowCovering'];
		$isSwimmingPool = $fetch['isSwimmingPool'];
		$isGym = $fetch['isGym'];
		$isInternet = $fetch['isInternet'];
		$isCentralHeating = $fetch['isCentralHeating'];
		$isAlarm = $fetch['isAlarm'];
		$firstFloorPlan = $fetch['firstFloorPlan'];
		$firstFloorArea = $fetch['firstFloorArea'];
		$secondFloorPlan = $fetch['secondFloorPlan'];
		$secondFloorArea = $fetch['secondFloorArea'];
		$garage = $fetch['garage'];
		$garageArea = $fetch['garageArea'];
		$youtubeURL = $fetch['youtubeURL'];
		$location = $fetch['location'];


	}

?>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="advancedsearch.php" class="back-to-listings"></a>
				<div class="property-title">
					<h2><?php echo $propertyName;?><span class="property-badge"><?php echo $forwhat == "sale" ? "For Sale" : "For Rent";?></span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?php echo $address;?>
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price"> <?php echo $forwhat == "sale" ? money_format("%.0n",$price*1000) : money_format("%.0n",$price);?></div>
					<div class="sub-price"><?php echo $forwhat == "sale" ? money_format("%.0n",($price*1000)/$area)." / sq m" : " monthly";?></div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				<a href="<?php echo $img1;?>" data-background-image="<?php echo $img1;?>" class="item mfp-gallery"></a>
				<a href="<?php echo $img2;?>" data-background-image="<?php echo $img2;?>" class="item mfp-gallery"></a>
				<a href="<?php echo $img3;?>" data-background-image="<?php echo $img3;?>" class="item mfp-gallery"></a>
				<a href="<?php echo $img4;?>" data-background-image="<?php echo $img4;?>" class="item mfp-gallery"></a>
				<a href="<?php echo $img5;?>" data-background-image="<?php echo $img5;?>" class="item mfp-gallery"></a>
				<a href="<?php echo $img6;?>" data-background-image="<?php echo $img6;?>" class="item mfp-gallery"></a>
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<div class="item"><img src="<?php echo $img1;?>" alt=""></div>
				<div class="item"><img src="<?php echo $img2;?>" alt=""></div>
				<div class="item"><img src="<?php echo $img3;?>" alt=""></div>
				<div class="item"><img src="<?php echo $img4;?>" alt=""></div>
				<div class="item"><img src="<?php echo $img5;?>" alt=""></div>
				<div class="item"><img src="<?php echo $img6;?>" alt=""></div>
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Area <span><?php echo $area;?> sq m</span></li>
					<li>Rooms <span><?php echo $room;?></span></li>
					<li>Bedrooms <span><?php echo $bedroom;?></span></li>
					<li>Bathrooms <span><?php echo $bathroom;?></span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<?php echo $description;?>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>

				<!-- Details -->
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					<li>Building Age: <span><?php echo $BuildingAge;?></span></li>
					<li>Parking: <span><?php echo $Parking;?></span></li>
					<li>Cooling: <span><?php echo $Cooling;?></span></li>
					<li>Heating: <span><?php echo $Heating;?></span></li>
					<li>Sewer: <span><?php echo $Sewer;?></span></li>
					<li>Water: <span><?php echo $Water;?></span></li>
					<li>Exercise Room: <span><?php echo $ExerciseRoom;?></span></li>
					<li>Storage Room: <span><?php echo $StorageRoom;?></span></li>
				</ul>


				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				<ul class="property-features checkboxes margin-top-0">
					<?php

						if($isAirConditioning == 1)
							echo '<li> Air Conditioning </li>';
						if($isLaundryRoom == 1)
							echo '<li> Laundry Room </li>';
						if($isWindowCovering == 1)
							echo '<li> Window Covering </li>';
						if($isSwimmingPool == 1)
							echo '<li> Swimming Pool </li>';
						if($isGym == 1)
							echo '<li> Gym </li>';
						if($isInternet == 1)
							echo '<li> Internet </li>';
						if($isCentralHeating == 1)
							echo '<li> Air Central Heating </li>';
						if($isAlarm == 1)
							echo '<li> Alarm </li>';
					?>
				</ul>


				<!-- Floorplans -->
				<h3 class="desc-headline no-border">Floorplans</h3>
				<!-- Accordion -->
				<div class="style-1 fp-accordion">
					<div class="accordion">
						<?php if($firstFloorPlan !== ""){?>
							<h3>First Floor <span><?php echo $firstFloorArea;?> sq m</span> <i class="fa fa-angle-down"></i> </h3>
							<?php echo $firstFloorPlan;
						}?>
						<?php if($secondFloorPlan !== ""){?>
						<h3>Second Floor <span><?php echo $secondFloorArea;?> sq m</span> <i class="fa fa-angle-down"></i></h3>
						<?php echo $secondFloorPlan;
						}?>

						<?php if($garage !== ""){?>
						<h3>Garage <span><?php echo $garageArea;?> sq m</span> <i class="fa fa-angle-down"></i></h3>
						<?php echo $garage;
						}?>

					</div>
				</div>


				<!-- Video -->
				<h3 class="desc-headline no-border">Video</h3>
				<div class="responsive-iframe">
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?php echo $youtubeURL;?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>

				
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<?php echo $location;?>
					<a href="#" id="streetView">Street View</a>
				</div>


				<!-- Similar Listings Container -->
				<h3 class="desc-headline no-border margin-bottom-35 margin-top-60">Similar Properties</h3>

				<!-- Layout Switcher -->

				<div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a></div>
				<div class="listings-container list-layout">

					<!-- Listing Item -->
					<div class="listing-item">

						<a href="#" class="listing-img-container">

							<div class="listing-badges">
								<span>For Rent</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">$900 <i>monthly</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="images/listing-03.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="#">Park Sitesi F1 Blok</a></h4>
								<a href="https://maps.google.com/maps?q=Bilkent Park Sitesi Üniversiteler Mh. 06800 Çankaya&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									Kat10 No:80, Bilkent Park Sitesi Üniversiteler Mh. 06800 Çankaya
								</a>

								<a href="#" class="details button border">Details</a>
							</div>

							<ul class="listing-details">
								<li>800 sq m</li>
								<li>1 Bedroom</li>
								<li>2 Rooms</li>
								<li>2 Rooms</li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Izel Gurbuz</a>
								<span><i class="fa fa-calendar-o"></i> 2 days ago</span>
							</div>

						</div>
						<!-- Listing Item / End -->

					</div>
					<!-- Listing Item / End -->


					

				</div>
				<!-- Similar Listings Container / End -->

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-30">
					<button class="widget-button with-tip" data-tip-content="Print"><i class="sl sl-icon-printer"></i></button>
					<button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i class="fa fa-star-o"></i></button>
					<button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"><i class="icon-compare"></i></button>
					<div class="clearfix"></div>
				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<?php 
						$query = "SELECT agents.picture as picture, agents.name as name, agents.phonenum as phone from properties join agents WHERE properties.pid = '$pid' and properties.agentID = agents.id";
						$result = mysqli_query($con,$query);
						$fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);

					?>
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="<?php echo $fetch['picture'];?>" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#"><?php echo $fetch['name'];?></a></h4>
								<span><i class="sl sl-icon-call-in"></i><?php echo $fetch['phone'];?></span>
							</div>
							<div class="clearfix"></div>
						</div>

						
						<button onclick="window.location.href='messages.php';" class="button fullwidth margin-top-5">Send Message</button>
						<button onclick="window.location.href='calendar.php?id=<?php echo $_SESSION['userID'];?>';" class="button fullwidth margin-top-5">Make Appointment</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-30 margin-top-30">Mortgage Calculator</h3>
					
					<!-- Mortgage Calculator -->
					<form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="USD">
						<div class="calc-input">
							<div class="pick-price tip" data-tip-content="Set This Property Price"></div>
						    <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
						    <label for="amount" class="fa fa-usd"></label>
						</div>

						<div class="calc-input">
						    <input type="text" id="downpayment" placeholder="Down Payment">
						    <label for="downpayment" class="fa fa-usd"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="years" placeholder="Loan Term (Years)" required>
							<label for="years" class="fa fa-calendar-o"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="interest" placeholder="Interest Rate" required>
							<label for="interest" class="fa fa-percent"></label>
						</div>

						<button class="button calc-button" formvalidate>Calculate</button>
						<div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
					</form>
					<!-- Mortgage Calculator / End -->

				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Featured Properties</h3>

					<div class="listing-carousel outer">
						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title">Park Sitesi F1 Blok <i>$275,000</i></span>

										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>

									<img src="images/listing-01.jpg" alt="">
								</a>

							</div>
						</div>
						<!-- Item / End -->

						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title">Camlik Sitesi E2 Blok <i>$420,000</i></span>

										<ul class="listing-hidden-content">
											<li>Area <span>800 sq m</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>

									<img src="images/listing-02.jpg" alt="">
								</a>

							</div>
						</div>
						<!-- Item / End -->

						
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>
<?php }
else{
	echo "you have to give proper property id ";
	}?>

<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<?php
require_once "footer.php";
?>