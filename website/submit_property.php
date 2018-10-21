
<?php

require_once "header.php";
if(!isset($_SESSION['fullName']) || $_SESSION['uType'] !== "agent" ){
		echo '<script type="text/javascript">
        window.location.href = "index.php";	</script>';
}
?>
<body>

<!-- Wrapper -->
<div id="wrapper">


<?php

require_once "header_menu.php";

?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Property</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		<!--<div class="notification notice small margin-bottom-55">
			<h4>Don't Have an Account?</h4>
			<p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
		</div> -->

		<!-- Section -->
		<h3>Basic Information</h3>
		<div class="submit-section">

			<!-- Title -->
			<div class="form">
				<h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" value="" name="name" />
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					<h5>Status</h5>
					<select class="chosen-select-no-single" name="forWhat" >
						<option label="blank"></option>	
						<option value="sale">For Sale</option>
						<option value="rent">For Rent</option>
					</select>
				</div>

				<!-- Type -->
				<div class="col-md-6">
					<h5>Type</h5>
					<select class="chosen-select-no-single" name="what">
						<option label="blank"></option>		
						<option value="aparment">Apartment</option>
						<option value="house">House</option>
						<option value="commercial">Commercial</option>
						<option value="garage">Garage</option>
						<option value="lot">Lot</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-4">
					<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="USD" name="price" >
					</div>
				</div>
				
				<!-- Area -->
				<div class="col-md-4">
					<h5>Area</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Sq m" name="area">
					</div>
				</div>

				<!-- Rooms -->			
				<div class="col-md-4">
					<h5>Rooms</h5>
					<select class="chosen-select-no-single" name="room">
						<option label="blank"></option>	
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="7">More than 5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Gallery</h3>
		<div class="submit-section">
			<form action="http://www.vasterad.com/file-upload" class="dropzone" ></form>
		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-6">
					<h5>Address</h5>
					<input type="text" name="address">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City</h5>
					<input type="text" name="city">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>State</h5>
					<input type="text" name="state">
				</div>

				<!-- Zip-Code -->
				<div class="col-md-6">
					<h5>Zip-Code</h5>
					<input type="text" name="zip">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true" ></textarea>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-4">
					<h5>Building Age <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name="age">
						<option label="blank"></option>	
						<option value="1">1 Year</option>
						<option value="2">2 Years</option>
						<option value="3">3 Years</option>
						<option value="4">4 Years</option>
						<option value="5">5 Years</option>
						<option value="7">10 + Years</option>
					</select>
				</div>

				<!-- Beds -->
				<div class="col-md-4">
					<h5>Bedrooms </h5>
					<select class="chosen-select-no-single" name="bedroom">
						<option label="blank"></option>	
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>

				<!-- Baths -->
				<div class="col-md-4">
					<h5>Bathrooms </h5>
					<select class="chosen-select-no-single" name="bathroom">
						<option label="blank"></option>	
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->


			<!-- Checkboxes -->
			<h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
			<div class="checkboxes in-row margin-bottom-20">
		
				<input id="check-2" type="checkbox" name="air">
				<label for="check-2">Air Conditioning</label>

				<input id="check-3" type="checkbox" name="swim">
				<label for="check-3">Swimming Pool</label>

				<input id="check-4" type="checkbox" name="heat" >
				<label for="check-4">Central Heating</label>

				<input id="check-5" type="checkbox" name="laundry">
				<label for="check-5">Laundry Room</label>	


				<input id="check-6" type="checkbox" name="gym">
				<label for="check-6">Gym</label>

				<input id="check-7" type="checkbox" name="alarm">
				<label for="check-7">Alarm</label>

				<input id="check-8" type="checkbox" name="cover">
				<label for="check-8">Window Covering</label>
		
			</div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Contact Details</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Name -->
				<div class="col-md-4">
					<h5>Name</h5>
					<input type="text">
				</div>

				<!-- Email -->
				<div class="col-md-4">
					<h5>E-Mail</h5>
					<input type="text">
				</div>

				<!-- Name -->
				<div class="col-md-4">
					<h5>Phone <span>(optional)</span></h5>
					<input type="text">
				</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<div class="divider"></div>
		<a href="#" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>

</div>
</div>
<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<?php
require_once "footer.php";
?>