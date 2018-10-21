
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

?>



<!-- Map
================================================== -->
<div id="map-container">
    <div id="map">
        <!-- map goes here -->
    </div>

    <!-- Map Navigation -->
	<a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Enable Scrolling</a>
	<ul id="mapnav-buttons">
	    <li><a href="#" id="prevpoint" title="Previous point on map">Prev</a></li>
	    <li><a href="#" id="nextpoint" title="Next point on mp">Next</a></li>
	</ul>
</div>

<!-- Content
================================================== -->
<div class="container" id="listing">
	<div class="row sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			<div class="main-search-input margin-bottom-35" >
				<input type="text" class="ico-01" placeholder="Enter address e.g. street, city and state or zip" value=""/>
				<button class="button">Search</button>
			</div>

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout" >
				<?php 
				
				$res = mysqli_query($con,"SELECT * FROM properties");
				$r = mysqli_fetch_array($res, MYSQLI_ASSOC);
				$numrows = mysqli_num_rows($res);

				// number of rows to show per page
				$rowsperpage = 1;
				// find out total pages
				$totalpages = ceil($numrows / $rowsperpage);

				// get the current page or set a default
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
				   // cast var as int
				   $currentpage = (int) $_GET['currentpage'];
				} else {
				   // default page num
				   $currentpage = 1;
				} // end if

				// if current page is greater than total pages...
				if ($currentpage > $totalpages) {
				   // set current page to last page
				   $currentpage = $totalpages;
				} // end if
				// if current page is less than first page...
				if ($currentpage < 1) {
				   // set current page to first page
				   $currentpage = 1;
				} // end if

				// the offset of the list, based on current page 
				$offset = ($currentpage - 1) * $rowsperpage;



				$results = mysqli_query($con,"SELECT * FROM properties LIMIT $offset, $rowsperpage");
				$fetch = mysqli_fetch_array($results, MYSQLI_ASSOC);
				foreach ($results as $result) {?>
					

					<div class="listing-item">

						<a href="property.php?pid=<?php echo $result['pid']?>" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span><?php echo $result['forWhat'] == "sale" ? "For Sale" : "For Rent";?></span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price"><?php echo $result['forWhat'] == "sale" ? money_format("%.0n",$result['price']*1000). "<i>".money_format("%.0n",($result['price']*1000)/$result['area']). " / sq m</i>" : money_format("%.0n",$result['price']). "<i>monthly</i>";?></i></span>
								<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
								<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
							</div>

							<div class="listing-carousel">
								<div><img src="<?php echo $result['img1']?>" alt=""></div>
								<div><img src="<?php echo $result['img2']?>" alt=""></div>
								<div><img src="<?php echo $result['img3']?>" alt=""></div>
							</div>
						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="property.php?pid=<?php echo $result['pid']?>"><?php echo $result['name']?></a></h4>
								<a href="https://maps.google.com/maps?q=<?php echo $result['address']?>&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									<?php echo $result['address']?>
								</a>

								<a href="property.php?pid=<?php echo $result['pid']?>" class="details button border">Details</a>
							</div>

							<ul class="listing-details">
								<li><?php echo $result['area']?> sq m</li>
								<li><?php echo $result['bedroom']?> Bedroom(s)</li>
								<li><?php echo $result['room']?> Room(s)</li>
								<li><?php echo $result['bathroom']?> Bathroom(s)</li>
							</ul>

							<div class="listing-footer">
							<?php 
							$propertyID = $result['pid'];
							$query = "SELECT agents.name as name, agents.id as id from properties join agents WHERE properties.pid = '$propertyID' and properties.agentID = agents.id";
							$result = mysqli_query($con,$query);
							$fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);
							?>
								<a href="agents.php?id=<?php echo $fetch['id'];?>"><i class="fa fa-user"></i> <?php echo $fetch['name'];?></a>
								<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
							</div>

						</div>

					</div>


				<?php }

				/******  build the pagination links ******/
				// range of num links to show
				$range = 3;



				?>
				<!-- Listing Item -->
				
				<!-- Listing Item / End -->


			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<?php 
						// loop to show links to range of pages around current page
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						   // if it's a valid page number...
						   if (($x > 0) && ($x <= $totalpages)) {
						      // if we're on current page...
						      if ($x == $currentpage) {
						         // 'highlight' it but don't make a link
						      		echo ' <li><a href="#" class="current-page">'.$x.'</a></li>';
						        	//echo " [<b>$x</b>] ";
						      // if not current page...
						      } else {
						         // make it a link
						      		echo ' <li><a href="'.$_SERVER['PHP_SELF'].'?currentpage='.$x.'#listing">'.$x.'</a></li>';
						         //echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
						      } // end else
						   } // end if 
						} // end for
						?>
						
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<?php 

							// if not on page 1, don't show back links

							if ($currentpage > 1) {
							   // show << link to go back to page 1
								$self = $_SERVER['PHP_SELF'];
				   				echo '<li><a href="'.$self.'?currentpage=1#listing" class="first">First</a></li>';
				   				$prevpage = $currentpage - 1;
				   				echo '<li><a href="'.$self.'?currentpage='.$prevpage.'#listing" class="prev">Previous</a></li>';

				   			}
				   			// if not on last page, show forward and last page links        
							if ($currentpage != $totalpages) {

								// get next page
								$self = $_SERVER['PHP_SELF'];
   								$nextpage = $currentpage + 1;
   								echo '<li><a href="'.$self.'?currentpage='.$nextpage.'#listing" class="next">Next</a></li>';
   								echo '<li "><a href="'.$self.'?currentpage='.$totalpages.'#listing" class="last">Last</a></li>';
							}

						?>
						
					</ul>
				</nav>

			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>

					<!-- Row -->
					<div class="row with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<select data-placeholder="Any Status" class="chosen-select-no-single" id="status">
								<option id="any">Any Status</option>	
								<option id="sale">For Sale</option>
								<option id="rent">For Rent</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
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
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- States -->
						<div class="col-md-12">
							<select data-placeholder="All States" class="chosen-select" >
								<option>All States</option>	
								<option>Alabama</option>
								<option>Alaska</option>
								<option>Arizona</option>
								<option>Arkansas</option>
								<option>California</option>
								<option>Colorado</option>
								<option>Connecticut</option>
								<option>Delaware</option>
								<option>Florida</option>
								<option>Georgia</option>
								<option>Hawaii</option>
								<option>Idaho</option>
								<option>Illinois</option>
								<option>Indiana</option>
								<option>Iowa</option>
								<option>Kansas</option>
								<option>Kentucky</option>
								<option>Louisiana</option>
								<option>Maine</option>
								<option>Maryland</option>
								<option>Massachusetts</option>
								<option>Michigan</option>
								<option>Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Utah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option>Washington</option>
								<option>West Virginia</option>
								<option>Wisconsin</option>
								<option>Wyoming</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Brooklyn</option>
								<option>Queens</option>
								<option>Houston</option>
								<option>Manhattan</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>San Antonio</option>
								<option>Bronx</option>
								<option>San Diego</option>
								<option>Dallas</option>
								<option>San Jose</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">

						<!-- Min Area -->
						<div class="col-md-6">
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
						<div class="col-md-6">
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
					<!-- Row / End -->

					<br>

					<!-- Area Range -->
					<div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>

					<br>
					
					<!-- Price Range -->
					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div>



					<!-- More Search Options -->
					<a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Additional Features" data-close-title="Additional Features"></a>

					<div class="more-search-options relative">

						<!-- Checkboxes -->
						<div class="checkboxes one-in-row margin-bottom-10">
					
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
					<!-- More Search Options / End -->

					<button class="button fullwidth margin-top-30">Search</button>


				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


<?php
require_once "footer.php";
?>