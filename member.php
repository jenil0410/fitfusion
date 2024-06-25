<?php
include("dbconnect.php");
if(isset($_POST['submit1'])){

	$name = $_POST['cf-name'];
	$mail = $_POST['cf-email'];
	$phone = $_POST['cf-phone'];
	$message = $_POST['cf-message'];

		$data= "INSERT INTO membership (name, email ,phone , msg) values('$name', '$mail', '$phone', '$message')";
		$result = mysqli_query($conn ,$data);
		

			if($data){
				echo "Data Entered Successfuly";
				header('location: home.php');
				
			}
			else{
				echo 'failed';
			}
      }
