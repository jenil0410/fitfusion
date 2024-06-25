<?php
session_start();
if (isset($_POST['forgot']))
{
  $em1=$_POST['Email'];
  header("Location:forgot.php?email=".$em1);
}
 if(isset($_POST['submit']))
 {
     $con = mysqli_connect('localhost','root','','gymfitness');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
     $em=$_POST['Email'];    
    $pwd=$_POST['Password'];
  
  $sql="SELECT Name FROM user WHERE Email='$em' AND Password='$pwd'";
  $query=mysqli_query($con,$sql);
  $count=mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);
  if($count==1)
  {
    $_SESSION['user']=$em;
   header("Location:index.php?username=".$row['Name']);
  
    
  }
  else
  {
    echo "This Email or Password is incorrect";
  }
  
 
  }
 
?>
<html>
    <head>
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
background-image: linear-gradient(315deg, black, red);
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
  width: 28%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 400%;
  position: absolute;
  right: -100%;
  background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
  transition: all 1.0s;
}
button:hover:after .inner{
  animation:spin 5s linear infinite;
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
.forgot-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 30%!important;
  position: absolute;
}
.forgot-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  right: -50%;
  background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);

  transition: all 0.7s;
}
button:hover:after .inner{
  animation:spin 3s linear infinite;
}

.forgot-btn .input-data input{
    background: none;
  border: none;
  color: white;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: absolute;
  z-index: 2;
}
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 100px 0 0 0;
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
  .forgot-btn .input-data{
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
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
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
   <a href="index.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
     </div>
    <div class="container">
      <div class="text">
         LOGIN
      </div>
      <form action="#" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="Email" required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
            <div class="input-data">
               <input type="password" name="Password" required>
               <div class="underline"></div>
               <label for="">Password</label>
            </div>
         </div>
         <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="submit">
               </div>
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="forgot" value="Forgot Password">
               </div>
            </div>
             
         </div>
         </div></form>
    </div>
    </body>
</html>
