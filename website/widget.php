		<!-- Widget -->
		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="bookmarks.php"><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
						<li><a href="calendar.php?id=<?php echo $_SESSION['userID'];?>"><i class="sl sl-icon-notebook"></i> My Meetings/Reservations</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="properties.php"><i class="sl sl-icon-docs"></i> My Properties</a></li>
						<li><a href="submit_property.php"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
					</ul>

					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Messages</li>
						<li><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> View/Compose Messages</a></li>
					</ul>

					<ul class="my-account-nav">
						<li class="sub-nav-title">Scan QR Codes on the Houses</li>
						<li><a href="qrcode.php"><i class="sl sl-icon-lock"></i> Scan QR Code</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="change_password.php"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="logout.php"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>