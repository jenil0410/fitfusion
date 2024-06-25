<?php

 if(isset($_POST['submit']))
 {
    $con = mysqli_connect('localhost','root','','gymfitness');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
    //$submit = $_GET['submit'];
    //if(!isset($submit)){$submit = '-';}
    //$db=mysqli_select_db($con,"login");
    $Userid = $_POST['Userid'];
    $fname = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Pass'];
    $Conpass= $_POST['Con_Pass'];
    $Address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $city = $_POST['city'];
    $age = $_POST['Age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $date = $_POST['DOB'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $a==1;
    }

    $check = "SELECT * FROM user where Email= '$email'";
    $query=mysqli_query($con,$check);
    $count=mysqli_num_rows($query);
    if($count>0)
    {
      echo "Current Email already has an account";   
    }
 else{
    $insert="INSERT INTO user values('$Userid','$fname','$email','$pass','$Conpass','$Address','$phone','$city','$age','$height','$weight','$date')";
    if(mysqli_query($con,$insert))
    {
      header("Location:index.php?register=".$fname);
    }    
  }
 }
 
?>
<?php include_once 'dbcon.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
    <style>
                 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 40px;
  background-color: #045de9;
background-image: linear-gradient(315deg, red, black);
  animation: change 10s ease-in infinite;
}

@keyframes change{
    0%{
        background-position: 0 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0 50%;
    }
}
.container{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  border-radius: 50px;
}
.container .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #ff0000, #001aff, #c401ff);
  -webkit-background-clip: text; 
  -webkit-text-fill-color: transparent;
  
}
.container .text .background :hover { 
    animation: spin 3s linear infinite;
}


.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgb(56, 47, 47);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background:  #0400ff;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  right: -100%;
  background: -webkit-linear-gradient(left, #ff0000 , #0400ff ,#00ff0d);
  transition: all 0.7s;
}
button:hover:after .inner{
  animation:spin 3s linear infinite;
}
@keyframes spin{
    100%{
        transform: rotate(360deg);
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 50% 0;
 
    }
}
 .submit-btn .input-data:hover .inner{
  left: 0; 
  right: 0;
} 
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}
.glow-on-hover {
    width: 120px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    bottom: 10px;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    /* background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000); */
    background: -webkit-linear-gradient(left, #ff0000 , #0400ff ,#00ff0d);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.head{
  position: relative;
  bottom: 300px;
  right: 270px;
}
    </style>
    </head>
    <body>
    <div class="head">
   <a href="home.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
     </div>
    <div class="container">
      <div class="text">
      My Details
      </div>
      <form action="#" method="post">
      <input type="number" name="Userid" hidden>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="Name" required>
               <div class="underline"></div>
               <label for="">Name</label>
            </div>
            <div class="input-data">
               <input type="email" name="Email" required>
               <div class="underline"></div>
               <label for="">Email Address</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="password" name="Pass" required>
               <div class="underline"></div>
               <label for="">Password</label>
            </div>
            <div class="input-data">
               <input type="password" name="Con_Pass" required> 
               <div class="underline"></div>
               <label for="">Confirm Password</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="date" name="DOB"required>
               <div class="underline"></div>
               <label for=""></label>
            </div>
            <div class="input-data">
               <input type="tel" name="Phone" required>
               <div class="underline"></div>
               <label for="">Phone</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="city"required>
               <div class="underline"></div>
               <label for="">City</label>
            </div>
            <div class="input-data">
               <input type="number" name="Age" required min="0" max="100">
               <div class="underline"></div>
               <label for="">Age</label>
            </div>
         </div>  <div class="form-row">
            <div class="input-data">
               <input type="number" name="height"required min="0">
               <div class="underline"></div>
               <label for="">Height in cm</label>
            </div>
            <div class="input-data">
               <input type="number" name="weight" required min="0">
               <div class="underline"></div>
               <label for="">Weight in kgs</label>
            </div>
         </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Address">
                    <div class="underline"></div>
                    <label for="">Address(optional)</label>
                </div>
            </div>
            <!-- `		h<div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" name="feedback" required></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">FEEDBACK</label>
                    <br />-->
                    <div class="form-row submit-btn">
                        <div class="input-data">
                          <div class="inner"></div><a href="index.html" style="color: #ff3333; text-decoration: none;">
                          <input type="submit" name="submit" value="submit"></a>
                        </div>
                        <!-- <p style=" margin-left: 10px; margin-top: 15px;">Already registered? <a href="login.php" style="color: #ff3333;">Login</a></p> -->
                    </div> 
         </div>
         </div></form>
    </div>
    </body>
</html>