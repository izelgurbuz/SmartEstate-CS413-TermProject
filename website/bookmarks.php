
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

				<h2>Bookmarked Listings</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Bookmarked Listings</li>
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
			<table class="manage-table bookmarks-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-05.jpg" alt="">
						<div class="title">
							<h4><a href="#">Oak Tree Villas</a></h4>
							<span>71 Lower River Dr. Bronx, NY</span>
							<span class="table-property-price">$535,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>


				<!-- Item #2 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-06.jpg" alt="">
						<div class="title">
							<h4><a href="#">Old Town Manchester</a></h4>
							<span> 7843 Durham Avenue, MD  </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>

				<!-- Item #3 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-02.jpg" alt="">
						<div class="title">
							<h4><a href="#">Serene Uptown</a></h4>
							<span>6 Bishop Ave. Perkasie, PA </span>
							<span class="table-property-price">$900 / monthly</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>


				<!-- Item #4 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-04.jpg" alt="">
						<div class="title">
							<h4><a href="#">Selway Apartments</a></h4>
							<span>33 William St. Northbrook, IL </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>

			</table>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


<?php
require_once "footer.php";
?>