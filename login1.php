<?php
session_start();
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"
		href="custom.css">
    
    <title>Login</title>

</head>
<body>


        <div class="container">
        <div class="btn">
			<button class="login">User Login</button>
			<!-- <button class="signup">Signup</button> -->
		</div>
            <div class="form-section">

<!-- login form -->
<form method="post">
<div class="login-box">
    <input type="email"
        class="email ele"
        placeholder="youremail@email.com" name="mail" required>
    <input type="password"
        class="password ele"
        placeholder="password" name="pass">
    <input type="submit" class="clkbtn" value="login" name="log" required>
                <div>
					<h2>if not registered</h2>    
					<a href="signup.php" style="text-decoration:none;">signup?</a>
				</div>
</div>
</form>
</div>
        </div>
<script src="customm.js"></script>
</body>
</html>


<?php
if(isset($_POST["log"]))
{
    $email = $_POST["mail"];
    $password = $_POST["pass"];
    

        $data = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $data);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            $_SESSION["login"] = "LOGIN SUCCESSFUL";
            // echo"<script>alert('LOGIN SUCCESSFUL')</script>";
            header('location:http://localhost/fitfusion/home.php');
        
        }
        else{
            echo "<script>alert('LOGIN CRADENTIALS ARE INCORRECT')</script>";
        }
    }

?>
        