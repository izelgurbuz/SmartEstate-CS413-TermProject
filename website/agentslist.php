<?php 
require('database/init.php');
require_once "header.php";
?>

<body>

<!-- Wrapper -->
<div id="wrapper">


<?php

require_once "compare.php";
require_once "header_menu.php";
$query = "SELECT * FROM `agents`";
$result2 = mysqli_query($con,$query);
$rows = mysqli_num_rows($result2);
$fetch = mysqli_fetch_array($result2, MYSQLI_ASSOC);

?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Agents</h2>
				<span>List of Our Agents</span>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Listings</li>
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
			<!-- Main Search Input -->
			<div class="main-search-input margin-bottom-40">
				<input type="text" class="ico-01" placeholder="Type an agent name or location" value=""/>
				<button class="button">Search</button>
			</div>
		</div>


		<div class="col-md-12">
			<div class="row">

				<!-- Agents Container -->
				<div class="agents-grid-container">

					<?php foreach ($result2 as $f) {?>
						
					
					<!-- Agent -->
					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="agents.php?id=<?php echo $f['id'];?>">
									<img src="<?php echo $f['picture'];?>" alt="">
									<span class="view-profile-btn">View Profile</span>
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="agent-page.html"><?php echo $f['name'];?></a></h4>
									<span>Agent In <?php echo $f['city'];?></span>
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i><?php echo $f['phonenum'];?></li>
									<li><i class="fa fa-envelope-o "></i><a href="mailto:<?php echo $f['email'];?>"><span ><?php echo $f['email'];?></span></a></li>
								</ul>

								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- Agent / End -->
					<?php }?>
	


				</div>
				<!-- Agents Container / End -->

			</div>
		</div>


		<div class="col-md-12">
			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
<?php 
require_once "footer.php";
?>

