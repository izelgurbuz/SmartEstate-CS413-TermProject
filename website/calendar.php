
<?php
require('database/init.php');
require_once "header.php";
if(!isset($_SESSION['fullName']) || $_SESSION['fullName'] == ""){
    echo '<script type="text/javascript">
        window.location.href = "index.php"; </script>';
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

        <h2>My Meetings/Reservations</h2>

        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li>My Meetings/Reservations</li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</div>


<!-- Content
================================================== -->
<div class="container">
  <div class="row" >


    
    <?php
    require_once "widget.php";

    $agentID = $_GET['id'];
    $uID = $_SESSION['userID'];
    $query = "SELECT `agents`.* FROM `agents` join `users` join `appointments` WHERE users.id = '$uID' and appointments.uid = users.id;";
    $result2 = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result2);
    $fetch = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    if($rows!=0){


    ?>

  
    <div class="col-md-8">
  
      <h4 class="headline margin-top-0 margin-bottom-30">Reservations</h4>

  
      <div class="agent agent-page">

        <div class="col-md-3" style="">
          <h4 class="headline margin-top-0 margin-bottom-30" style="text-align: center;position: relative;top: 50%;transform: translateY(-50%) ">Dec<br>19</h4>
        </div>

        <div class="col-md-9" style="padding: 10px 10px;">
          <div class="agent-name">
            <h4><font color="black">Agent Name: </font><?php echo $fetch['name'];?></h4>
            <span>Meeting Address:  <?php echo $fetch['address'];?></span>
          </div>

          <ul class="agent-contact-details">
            <li><i class="sl sl-icon-call-in"></i><?php echo $fetch['phonenum'];?></li>
            <li><i class="fa fa-envelope-o "></i><a href="mailto:<?php echo $fetch['email'];?>"><span><?php echo $fetch['email'];?></span></a></li>
          </ul>

          <ul class="social-icons" style="margin-top: 5px;">
            <li><a class="facebook" href="<?php echo $fetch['facebook'];?>"><i class="icon-facebook"></i></a></li>
            <li><a class="twitter" href="<?php echo $fetch['twitter'];?>"><i class="icon-twitter"></i></a></li>
            <li><a class="gplus" href="<?php echo $fetch['google'];?>"><i class="icon-gplus"></i></a></li>
            <li><a class="linkedin" href="<?php echo $fetch['linkedin'];?>"><i class="icon-linkedin"></i></a></li>
            <a href="http://www.google.com/calendar/event?
action=TEMPLATE
&text=Meeting with <?php echo $fetch['name'];?> for Real Estate, SmartEstate
&dates=20171219T130000Z/20171219T133000Z
&details=Meeting%20will%20be%20held%20on%20<?php echo $fetch['address'];?>
&location=<?php echo $fetch['address'];?>
&trp=true
&sprop=
&sprop=name:thesolutionsarchitect.net"
            class="button border" style="float:right;">Add to Calendar</a>
          </ul>
          <div class="clearfix"></div>
        </div>

      </div>
        

    </div>
<?php }else{

?>
  <div class="col-md-8">
  
      <h4 class="headline margin-top-0 margin-bottom-30">There is no reservation.</h4>
  </div>
  <?php }?>
  </div>
</div>

<style>
.videoWrapper {
  margin: 0;
  top: 0;
  background-color: white;
  background-image: radial-gradient(white, rgba(0, 0, 0, 0.2));
  font-family: "Open Sans", sans-serif;
}
.videoWrapper iframe {
  margin-top: 10px;
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