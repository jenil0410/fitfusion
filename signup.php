<?php
session_start();
include("dbconnect.php");

	$name_err = "";
	$email_err = "";
	$pass_err = "";
	$name ="";
	$email ="";
	$password = "";

if(isset($_POST["sub"]))
{
	// $name_err = "";
	// $email_err = "";
	// $password_err = "";
	function checkErrors() {
        global $name_err, $email_err, $pass_err, $name, $email, $password;
    
		if(empty($_POST["name"])){
		$name_err = "Enter a Username";
		}
			elseif(!preg_match("/[a-zA-z\d]/", $_POST["name"])){
				$name_err = "USERNAME MUST CONTAIN ALPHANUMERIC VALUES";
			}
		
				if(empty($_POST["mail"])){
					$email_err = "Enter a Valid Email Address";
				}
					elseif(!preg_match("/(?=.*@)[@.]/", $_POST["mail"])){
						$email_err = "Email Must Contain @";
					}
						if(empty($_POST["pass"])){
							$pass_err = "Create A Password";}
									elseif (!preg_match("/(?=.*\W)(?=.*\d)[a-zA-z\d\W]/", $_POST["pass"]))
									{
									$pass_err = "USE SPECIAL CHARACTER OR ALPHANUMERIC VALUES";
									}

									if(strlen($_POST["pass"]) >=12 ){
										$pass_err = 'MAXIMUM 8 CHARACTERS PASSWORD';
									}
										if(empty($name_err) && empty($email_err) && empty($pass_err)){
											$name = $_POST["name"];
											$email = $_POST["mail"];
											$password = $_POST["pass"];
											return true;}
											else{
												return false;
											}
	}
		if(checkErrors() == true) {
		$name = $_POST["name"];
		$email = $_POST["mail"];
		$password = $_POST["pass"];
						// $pass = password_hash($password, PASSWORD_BCRYPT);
						$query = "SELECT * FROM signup WHERE email='$email'";
						$check = mysqli_query($conn, $query);
							if(mysqli_num_rows($check)==0){
								$data = "INSERT INTO signup (name , email , password) VALUE('$name', '$email', '$password')";
										$result = mysqli_query($conn, $data);
										

										if($result){
											$_SESSION["signup"] = "USER REGISTERED SUCCESFULLY";
											echo "<script> alert('USER REGISTERED SUCCESFULLY')</script>";
											?>
											<meta http-equiv = "refresh" content = "0; url = http://localhost/fitfusion/login1.php"/>
											<?php
										
												}
										else{
											echo "<script> alert('REGISTRATION INCOMPLETE')</script>";

										}
														}
								else{
								echo "<script>alert('USER ALREADY EXISTS')</script>";
								}
			}
	
		
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
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			<div class="signup-box">
				<input type="text"
					class="name ele"
					placeholder="Enter your name" name="name" >
					<p style="color:red;"><?php echo $name_err; ?></p>
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com" name="mail" >
					<p style="color:red;"><?php  echo $email_err; ?></p>
				<input type="password"
					class="password ele"
					placeholder="password" name="pass">
					<p style="color:red;"><?php echo $pass_err;?></p>

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

