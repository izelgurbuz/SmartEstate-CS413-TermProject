
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

			<div class="videoWrapper">
				<iframe frameborder="0" src="chat.php" ></iframe>
				</div>
		</div>

	</div>
</div>

<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 500px;
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