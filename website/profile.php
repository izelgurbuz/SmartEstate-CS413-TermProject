
<?php

require_once "header.php";
if(!isset($_SESSION['fullName']) && $_SESSION['fullName'] == ""){
		echo '<script type="text/javascript">
        window.location.href = "index.php";	</script>';
}
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

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Profile</li>
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


		<?php
		require_once "widget.php";
		?>


		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

					<label>Your Name</label>
					<input value="<?php echo $_SESSION['fullName'];?>" type="text">

					<label>Your Title</label>
					<input value="<?php echo $_SESSION['uTitle'];?>" type="text">

					<label>Phone</label>
					<input value="<?php echo $_SESSION['uPhone'];?>" type="text">

					<label>Email</label>
					<input value="<?php echo $_SESSION['uEmail'];?>" type="text">


					<h4 class="margin-top-50 margin-bottom-25">About Me</h4>
					<textarea name="about" id="about" cols="30" rows="10"><?php echo $_SESSION['uAbout'];?></textarea>
				

					<h4 class="margin-top-50 margin-bottom-0">Social</h4>

					<label><i class="fa fa-twitter"></i> Twitter</label>
					<input value="<?php echo $_SESSION['utwitter'];?>" type="text">

					<label><i class="fa fa-facebook-square"></i> Facebook</label>
					<input value="<?php echo $_SESSION['ufacebook'];?>" type="text">

					<label><i class="fa fa-google-plus"></i> Google+</label>
					<input value="<?php echo $_SESSION['ugoogle'];?>" type="text">

					<label><i class="fa fa-linkedin"></i> Linkedin</label>
					<input value="https://www.linkedin.com/" type="text">


					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="<?php echo $_SESSION['uPicture'];?>" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


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