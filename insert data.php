<?php
$connection=mysqli_connect("localhost","root","","db_contact1");
if(!$connection){
echo "Connection failed";
}

$txtName = $_POST['textName'];
$txtEmailId=$_POST['txtEmailId'];
$Mobileno=$_POST['Mobileno'];
$CollegeName=$_POST['CollegeName'];
$branch=$_POST['branch'];

$insert=mysqli_query($connection,"INSERT INTO register1( Name,EmailId,MobileNo,CollegeName,Branch) VALUES('$txtName','$txtEmailId','$Mobileno','$CollegeName','$branch')");
if($insert==1)
{
	echo "Record not inserted";
}

header('location:index.html');

$connection->close();
?>


