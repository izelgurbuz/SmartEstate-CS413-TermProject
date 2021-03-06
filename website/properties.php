
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

				<h2>My Properties</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Properties</li>
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
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Expiration Date</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-02.jpg" alt="">
						<div class="title">
							<h4><a href="#">Serene Uptown</a></h4>
							<span>6 Bishop Ave. Perkasie, PA </span>
							<span class="table-property-price">$900 / monthly</span>
						</div>
					</td>
					<td class="expire-date">December 30, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #2 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-05.jpg" alt="">
						<div class="title">
							<h4><a href="#">Oak Tree Villas</a></h4>
							<span>71 Lower River Dr. Bronx, NY</span>
							<span class="table-property-price">$535,000</span>
						</div>
					</td>
					<td class="expire-date">December 12, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #3 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-04.jpg" alt="">
						<div class="title">
							<h4><a href="#">Selway Apartments</a></h4>
							<span>33 William St. Northbrook, IL </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="expire-date">December 04, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

				<!-- Item #4 -->
				<tr>
					<td class="title-container">
						<img src="images/listing-06.jpg" alt="">
						<div class="title">
							<h4><a href="#">Old Town Manchester</a></h4>
							<span> 7843 Durham Avenue, MD  </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="expire-date">November 27, 2016</td>
					<td class="action">
						<a href="#"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>

			</table>
			<a href="submit-property.html" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


<?php
require_once "footer.php";
?>