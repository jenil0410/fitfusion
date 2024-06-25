<?php
//session_start();
//error_reporting(0);
//include('includes/config.php');
$con = mysqli_connect('localhost','root','','gymfitness');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
if(isset($_POST['submit']))
  {
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO contact VALUES('$id','$name','$email','$message')";
$query=mysqli_query($con,$sql);
if($query){
header("Location:index.php");}
  }
// if($sql)
// {
// $msg="Query Sent. We will contact you shortly";
// }
// else 
// {
// $error="Something went wrong. Please try again";
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>The Fit Coach</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <span style="color:red;">Fit </span>Fusion</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Workout</a>
                    </li>
                    <li class="nav-item">
                        <a href="#diet" class="nav-link smoothScroll">Training Program</a>
                    </li>
                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="register.php" class= "nav-link " >My Details</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="login1.php" class= "nav-link " >Login in</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class= "nav-link " >Sign up</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">New way to build a healthy lifestyle!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Unlock your potential, Transform your health with The <span style="font-family:Mistral; color:red;">Fit Fusion</span></h1>

                                    <h6 data-aos="fade-up" data-aos-delay="300">To Access Full website Please Login.</h6>
                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to The Fit Fusion?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE (1500/- per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">"The Fit Fusion is your trusted companion on your journey to a healthier, happier you. We're here to guide you through the intricate world of nutrition, dieting, and fitness, offering personalized strategies and expert insights to help you reach your wellness goals. Our comprehensive resources and expert advice will empower you to make sustainable lifestyle changes, discover the best nutrition practices, and embrace fitness routines that work for you. Get ready to take control of your health and become the best version of yourself with The Fit Fusion!"</p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are The Fit Coach Team</h2>

                                <p data-aos="fade-up" data-aos-delay="400">At The Fit Fusion, we are more than just a website; we are your dedicated partner in the pursuit of a balanced, vibrant life. Our mission is to inspire and empower individuals from all walks of life to take charge of their well-being. Whether you're aiming to shed a few pounds, gain muscle, or simply improve your overall health, our platform offers a wealth of resources. From personalized meal plans and workout routines to evidence-based articles and inspiring success stories, we provide the knowledge and motivation you need.
                                </p>

                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding  <span style="background-color: rgb(0, 208, 255);">The Fit Fusion</span>
                                    , you can <a rel="nofollow" href="#contact">For any queries contact</a> immediately. Thank you.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Mary Yan</h3>
                                        <span>Yoga Instructor</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Dr.Mikel</h3>
                                        <span>Dietician</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <!-- <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Perfect Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Workout plans</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <video src="images/video/mixkit-silhouette-of-a-woman-doing-yoga-at-sunset-4420-medium.mp4"muted loop class="video" alt="Class"></video>

                                    <div class="class-info">
                                        <h3 class="mb-1">Yoga</h3>

                                        <span><strong>**********</strong></span>

                                        <span class="class-price">790/-</span>

                                        <p class="mt-3">"Join us for a rejuvenating yoga experience that will help you find balance and inner peace. Our yoga class is suitable for all levels, from beginners to experienced practitioners"</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <video src="images/video/mixkit-woman-doing-aerobics-on-at-the-nature-48943-medium.mp4" muted loop class="video" alt="Class"></video>

                                    <div class="class-info">
                                        <h3 class="mb-1">Areobic</h3>

                                        <span><strong>***************</strong></span>
                                        <span class="class-price">790/-</span>

                                        <p class="mt-3">Get ready to boost your energy and fitness levels with our dynamic aerobic class! Our high-energy, heart-pumping workout is designed to help you burn calories, improve cardiovascular endurance, and have a blast while doing it</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <video src="images/video/mixkit-athlete-doing-cardio-to-lose-weight-9255-medium.mp4"muted loop class="video" alt="Class"></video>

                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio</h3>

                                        <span><strong>*************</strong></span>

                                        <span class="class-price">790/-</span>

                                        <p class="mt-3">Get your heart racing and calories melting in our heart-pounding cardio class! This exhilarating workout is designed to boost your cardiovascular fitness and help you achieve your fitness goals</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section> -->

 <!-- DIET PLAN -->
     <!-- <section class="class section" id="diet">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Healthy Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Traning Program</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <video src="images/video/mixkit-man-training-on-the-bars-in-the-gym-23450-medium.mp4"muted loop class="video" alt="Class"></video>
                                    <div class="class-info">
                                        
                                            <div class="dropdown">
                                                <button><h3>Weight Gain</h3></button>
                                                <div class="dropdown-content">
                                                <a href="wgb.html">Beginner</a>
                                                <a href="wgi.html">Intermediate</a>
                                                <a href="wga.html">Advanced</a>
                                                </div>
                                              </div>
                                        <p class="mt-3">Our team of experts, including nutritionists and fitness trainers, will craft a tailored plan that considers your unique needs, dietary preferences, and fitness level. We'll guide you through a structured nutrition and exercise regimen that promotes muscle gain and overall well-being</p>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <video src="images/video/mixkit-man-jumping-the-rope-at-the-gym-23056-medium.mp4"muted loop class="video" alt="Class"></video>

                                    <div class="class-info">
                                        <div class="dropdown">
                                            <button><h3>Weight Loss</h3></button>
                                            
                                            <div class="dropdown-content">
                                            <a href="wlb.html">Beginner</a>
                                            <a href="wli.html">Intermediate</a>
                                            <a href="wla.html">Advanced</a>
                                            </div>
                                          </div>
                                      
                                      

                                        <p class="mt-3">With our weight loss program, you'll embark on a journey to better health, increased energy, and a more confident you. Let's take the first step together towards your weight loss goals! Get ready to boost your confidence and vitality while working towards your ideal weight.</p>
                                    </a>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
     </section> -->

     <!-- SCHEDULE -->
     <!-- <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>
     </section> -->


     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="name" placeholder="Name">

                            <input type="email" class="form-control" name="email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>  SAL Institute Of Technology And Engineering Research</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.359410977004!2d72.4925085760376!3d23.08393541403413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9d7f9269e3af%3A0x6f044ed8c2d7e3a0!2sSal%20institute%20of%20technology%20and%20engineering%20research!5e0!3m2!1sen!2sin!4v1711617766630!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; The Fit Coach
                        
                        
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@company.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form" action="logpay.php" method="POST">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="1234567890" pattern="[0-9]{10}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit1">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>