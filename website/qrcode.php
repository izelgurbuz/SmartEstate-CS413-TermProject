
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

				<h2>My Messages</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Messages</li>
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
			<div class="col-md-6  my-profile">
				<div class="videoWrapper">
					<iframe allow="camera" frameborder="0" src="https://karamusluk.github.io/QR-Scanner/" ></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="notification notice">
					<p>	You can scan the QR codes that you can find easily on the houses frontdoor that can directly take you to the
					detailed page of that home. And you can easily learn about the land.</p>	There is a example QR code below.
				</div>
				<div class="edit-profile-photo" style="margin-top: -4%;margin-left: 8%;">
					<img src="images/QRCode.png" alt="placeholder+image" centered>
				</div>
				<div class="notification notice">
					<p>	You can scan that though your camera and see what happens.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 520px;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
	
</style>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


<?php
require_once "footer.php";
?>