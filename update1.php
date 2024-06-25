
<?php
session_start();
include("dbconnect.php");

// Check if 'id' is set in $_GET
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id !== null) {
    $info = "SELECT * FROM signup WHERE id = '$id'";
    $fetch = mysqli_query($conn, $info);
    $tab = mysqli_fetch_assoc($fetch);
} else {
    // Handle case where 'id' is not provided in URL
    // You might want to redirect or show an error message
    echo "No ID provided.";
    exit; // Optionally exit if 'id' is mandatory
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
						initial-scale=1.0">
	<title>User Registration</title>
	<link rel="stylesheet"
		href="custom.css">
</head>

<body style="background-image: url(pic/logimg.webp) !important;">

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="btn">
			<!-- <button class="login">Login</button> -->
			<button class="signup">Signup</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

			<!-- signup form -->
            <form action="#" method="post">
			<div class="signup-box">
				<input type="text"
					class="name ele"
					placeholder="Enter your name" name="name" value="<?php echo $tab['id'] == $tab['name'];?>">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com" name="mail" value="<?php echo $tab['mail'];?>" >
				<input type="password"
					class="password ele"
					placeholder="password" name="pass">

				<input type="submit" class="clkbtn" value="signup" name="sub">
				<div>
					<h2>if already registered</h2>    
					<a href="login1.php" style="text-decoration:none;">login?</a>
				</div>
			</div>
            </form>
		</div>
	</div>
	
</body>
</html>

<?php

if(isset($_POST['sub'])){

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];


		$data= "UPDATE signup set name='$name', email='$mail', password='$pass' WHERE id = '$id'";
		$result = mysqli_query($conn,$data);
		

			if($data){
				$_SESSION["update"] = "DATA UPDATED SUCCESSFULLY";
                ?>
                <!-- <meta http-equiv = "refresh" content = "0; url = http://localhost/form/index.php"/> -->
                <?php
			}
			else{
				echo 'failed';
			}
      }
?>

