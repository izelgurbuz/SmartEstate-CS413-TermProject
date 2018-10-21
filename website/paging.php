<?php 
require('database/init.php');
// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM properties";
$result = mysqli_query($con,"SELECT * FROM properties");
$r = mysqli_fetch_array($result, MYSQLI_ASSOC);
$numrows = mysqli_num_rows($result);

// number of rows to show per page
$rowsperpage = 1;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT pid, name FROM properties LIMIT $offset, $rowsperpage";
$result = mysqli_query($con, $sql);

// while there are rows to be fetched...
while ($list = $result->fetch_assoc()) {
   // echo data
   echo $list['pid'] . " : " . $list['name'] . "<br />";
} // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   $self = $_SERVER['PHP_SELF'];
   echo " <a href='".$self."?currentpage=1'> First </a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='".$self."?currentpage=".$prevpage."'> Prev </a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'> Next </a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'> Last </a> ";
} // end if
/****** end build pagination links ******/
?>