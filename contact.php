<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'db_contact_us');
//echo "success";
// get the post records
if(isset($_POST['subm'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$ename = $_POST['ename'];
$subject = $_POST['subject'];

// database insert SQL code
if(empty($firstname) || empty($lastname) || empty($ename) || empty($subject))
{
	echo "<script>alert('Please fill in all fields!');window.location.href='ContactUs.html';</script>";
}
else{
$sql = "INSERT INTO `tbl_contact_us`(`Id`, `fname`, `lname`, `email`, `message`) VALUES (0,'$firstname','$lastname','$ename','$subject')";
$result = mysqli_query($con, $sql);
// insert in database 

if($result)
{
	echo "<script>alert('Record was successfully submitted');window.location.href='ContactUs.html';</script>";
}
else
{
	echo "<script>alert('Submition was Unsuccessful');window.location.href='ContactUs.html';</script>";
}
}
}
?>