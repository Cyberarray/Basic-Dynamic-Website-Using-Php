<?php
require'config.php';
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php

$query = mysqli_query($con,"SELECT * FROM  viscount");
$rows=mysqli_fetch_array($query);

 if(is_null($rows['Services']) && is_null($rows['ContactUs']) && is_null($rows['Portfolio']) && is_null($rows['AboutUs']))
 {
 	 $sql = "INSERT INTO viscount (Services,ContactUs,Portfolio,AboutUs) VALUES (0,0,0,0)";
 	 $result = mysqli_query($con, $sql);
 }
 $val=  $_GET['value']; 
 if($val == 1)
 {
 	 	$sql = "UPDATE viscount SET Services = Services+1 WHERE 1";
    	$result = mysqli_query($con, $sql);
    	header('location:Services.html'); 

 }
 elseif ($val == 2) 
 {
 	 	$sql = "UPDATE viscount SET ContactUs = ContactUs+1 WHERE 1";
    	$result = mysqli_query($con, $sql);
    	header('location:ContactUs.html');
 }
  elseif ($val == 3)
  {
  	 	$sql = "UPDATE viscount SET Portfolio = Portfolio+1 WHERE 1";
    	$result = mysqli_query($con, $sql);
    	header('location:Portfolio.html');
  } 
  elseif ($val == 4)
  {
  	 	$sql = "UPDATE viscount SET AboutUs = AboutUs+1 WHERE 1";
    	$result = mysqli_query($con, $sql);
    	header('location:abut.html');
  }
  ?>