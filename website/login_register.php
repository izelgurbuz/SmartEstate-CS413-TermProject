
<?php
require('database/init.php');
require_once "header.php";
// $url should be an absolute url
function redirect_func($url){
    if (headers_sent()){
      echo '<script type="text/javascript">window.setTimeout(function(){
        window.location.href = "' . $url . '";}, 2000);	</script>';
    }else{
      header("refresh: 2; url=$url");
      die();
    }    
}
?>

<body>

<!-- Wrapper -->
<div id="wrapper">


<?php

require_once "compare.php";
require_once "header_menu.php";


if(isset($_POST['register']) && $_POST['register'] == "Register"){
	if(isset($_POST['username2']) && $_POST['username2'] !== "" && isset($_POST['fullname']) && isset($_POST['email2']) && isset($_POST['password1']) && isset($_POST['password2'])){
		$username = stripslashes($_POST['username2']);
        $username = mysqli_real_escape_string($con,$username);
        
        $email = stripslashes($_POST['email2']);
        $email = mysqli_real_escape_string($con,$email);

        $fullname = stripslashes($_POST['fullname']);
        $fullname = mysqli_real_escape_string($con,$fullname);
        
        $password = stripslashes($_POST['password1']);
        $password = mysqli_real_escape_string($con,$password);

        $repass = stripslashes($_POST['password2']);
        $repass = mysqli_real_escape_string($con,$repass);
        if($repass !== $password){
        	$error[] = 'Your passwords does not match';
        }else{
        	$query = "INSERT into `users` (username, fullname, password, email, picture)
                      VALUES ('$username', '$fullname' , '$password' ,'$email', 'http://w3.bilkent.edu.tr/www/wp-content/uploads/sites/5/2015/05/ing-amblemP.jpg')";

            $result = mysqli_query($con,$query);
            $success[] = "you succesfully registered. Please go to the login tab and login with your credentials.";
        }
	}
	else{
	$error[] = "There is an empty space.";
	}

}
elseif(isset($_POST['login']) && $_POST['login']=="Login"){
	if(isset($_POST['username']) && $_POST['username'] !== "" && isset($_POST['password']) && $_POST['password'] !== ""){
		$username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con,$password);
		$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
	    $result2 = mysqli_query($con,$query);
	    $rows = mysqli_num_rows($result2);
	    $fetch = mysqli_fetch_array($result2, MYSQLI_ASSOC);
	    if($rows==1){
	        $_SESSION['username'] = $username;
	        $_SESSION['userID'] = $fetch['id'];
	        $_SESSION['fullName'] = $fetch['fullname'];
	        $_SESSION['uEmail'] = $fetch['email'];
	        $_SESSION['uPicture'] = $fetch['picture'];
	        $_SESSION['uTitle'] = $fetch['title'];
	        $_SESSION['uPhone'] = $fetch['phone'];
	        $_SESSION['uAbout'] = $fetch['about'];
	        $_SESSION['uType'] = $fetch['type'];
	        $_SESSION['utwitter'] = $fetch['twitter'];
	        $_SESSION['ufacebook'] = $fetch['facebook'];
	        $_SESSION['ugoogle'] = $fetch['google'];
	        $success[] = "you will be redirected in 2 seconds to homepage...";
	        if($fetch['type'] === "admin")
	        	redirect_func('admin/index.php');
	        else
	        	redirect_func('index.php');
	    }
	    else{
	    	$error[] = "Sorry we cannot identify you. Contact with administration.";
	    }
	}
}

?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In & Register</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index-4.html">Home</a></li>
						<li>Log In & Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
	<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
	<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button>

	<?php 
	if(isset($error)){?>	
		<div class="notification error closeable">
		<p><span>Warning! </span> <?php echo $error[0];?></p>
		<a class="close" href="#"></a>
		</div>
		<?php 
	}
	if(isset($success)){
		?>
		<div class="notification success closeable">
		<p><span>Success </span> <?php echo $success[0];?></p>
		<a class="close" href="#"></a>
		</div>
		<?php 
	}?>
	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Log In</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>
	

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login" action="login_register.php">

					<p class="form-row form-row-wide">
						<label for="username">Username:
							<i class="im im-icon-Male"></i>
							<input type="text" class="input-text" name="username" id="username"/>
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="password"/>
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border margin-top-10" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" class="register" action="login_register.php">
					
				<p class="form-row form-row-wide">
					<label for="username2">Username:
						<i class="im im-icon-Male"></i>
						<input type="text" class="input-text" name="username2" id="username2" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="fullname">Full Name:
						<i class="im im-icon-Male"></i>
						<input type="text" class="input-text" name="fullname" id="fullname" />
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="im im-icon-Mail"></i>
						<input type="text" class="input-text" name="email2" id="email2" />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password1" id="password1"/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password2" id="password2"/>
					</label>
				</p>

				<p class="form-row form-row-wide hidden">
						<input class="input-text" type="text" name="register" id="register" value="register" />
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>

		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
<div class="margin-top-55"></div>


<?php
require_once "footer.php";
?>