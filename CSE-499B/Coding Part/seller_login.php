
<?php

     ob_start(); 

     include_once("connection.php");

    session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Seller Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Client-vendor platform" />
  <meta name="Himel" content="" />

  <!-- css -->

  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->

  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

</head>

<body>

  <div id="wrapper">

    <!------------- Start Header ----------->

    <header>

      <div class="top">
        <div class="container">
          <div class="row">

            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +880 1675695322</p>
            </div>

            <div class="span6">

              <ul class="social-network">

                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
               
            </div>
			
          </div>
        </div>
      </div>


    <div class="container">


     <div class="row nomargin">
      <div class="span3">

        <div class="logo" id="logo">
          <a href="index.php"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
        </div>

      </div>
        <div class="span9">
          <div class="navbar navbar-static-top">
            <div class="navigation">
                <nav>

                  <ul class="nav topnav">

                    <li>
                      <a href="index.php">Home</a>
                    </li>

                    <li>
                      <a href="buyProduct.php">Buy Products</a>
                    </li>

                    <li>
                      <a href="sellProduct.php">Sell Products</a>
                    </li>

                    <li>
                      <a href="contactUs.php">Contact Us</a>
                    </li>


                    <li>
                      <a href="aboutUs.php">About Us</a>
                    </li>

                 
				           <li>
                    <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Sign Up</a>

                    <!---------   Popup for Sign Up  ------------>

                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >


                    <div class="modal-header">
                      <button type="button" color="red" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3 id="myModalLabel">Sign Up</h3>
                   </div>

                    <div class="modal-body" "flip-card back">

                      <form action="index.php" method="post">

                        <label for="Type">Choose Your type</label>

                          <select onchange="location = this.options[this.selectedIndex].value;">

                              <option value="1" selected>Choose Here</option>
                              <option value="buyer_signup.php">Buyer</option>
                              <option value="seller_signup.php">Seller</option>

                          </select>​

                          <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>

                      </form>

                    </div>

                  </div>
					
                </li>
				  
			    <li class="active" >	  
				 
				  <!---------  Log In Pop Up  ---------> 
				  
             <a class="btn btn-large btn-primary" role="button" href="#" data-target="#login" data-toggle="modal">Log In</a>

               <div id="login" class="modal fade" role="dialog">
                 <div class="modal-dialog">
    
                    <div class="modal-content">
                      <div class="modal-body">
                                   							 
                          <h4>Log In</h4>
									  									  
                            <div class="modal-body" "flip-card back">

                              <form action="index.php" method="post">

                                <label for="Type">Choose Your type</label>

                                  <select onchange="location = this.options[this.selectedIndex].value;">

                                      <option value="1" selected>Choose Here</option>
                                      <option value="buyer_login.php">Buyer</option>
                                      <option value="seller_login.php">Seller</option>

                                  </select>​

                                  <div class="modal-footer">
																 								  
				                          <div class="form-group">
													
                                  <input name="recover-close" class="btn btn-lg btn-primary pull-left" value="Forgot Password" type="#">
													  
													     <button class="btn btn-secondary" data-dismiss="modal">Close</button>
													  
                                         </div>														                                       										         
                                      </div>
 
                                    </form>
											  
                                  </div>									 				  
									  
                               </div> 
                            </div>
                          </div>  
                        </div>
						
						
			      </li>	  
				  
				
              </ul>
           </ul>

                 </ul>
                </nav>
              </div>

              <!------------  End Navigation ------------>

            </div>
          </div>
        </div>
      </div>

    </header>

    <!-------------  End Header ------------->
	
	
	 <section id="sellerlogin">
	
     <div class="c1 container">
      <div class="row">
        <div class="col-md-8">

          <form method="post">
            <div class="im1">
				      			  
             <br><br><br>
					 
            <img class="img-responsive pull-left" src="seller_login.png" style="height:200px; width:190px;"> 
					  <h3>Login : <b>Seller</b></h3> 
					  
					   <div class="form-group">
                <input type="text" required class="form-control" placeholder="Username" name="username">
             </div>
					 				 
            <div class="form-group">
                <input type="password" required class="form-control" placeholder="Password" name="password">
            </div>
				   
				    <br>
				   
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      
            </div>
				  
                  
          </form>

			        <br><br><br>
					 
        </div>
		
      </div>
    </div>
  
  </section>

  
  <?php


     if(isset($_POST['submit']))
    {
          
        $user = $_POST['username'];
        $pass = $_POST['password'];
           
            
        $seller_login = "SELECT username,password FROM seller_signup
                           WHERE username='$user' AND password='$pass'";
            
        $res = mysqli_query( $conn,$seller_login ) ;
        $count=mysqli_num_rows( $res ) ;
            
         if($count == 1)
        {
            
           $_SESSION['user_name']=$user;
               
            echo "<script>alert('Login Successful. Welcome');
                   </script>";
               
            header("Location: http://localhost/cse_499a/seller_profile.php"); 

         }
            
          else{

               echo "<script>alert('Your Username or Password is Wrong. Please! Try Again');
                      </script>";
               
            }
            
        }
        
        
        ob_end_flush();

        
    ?>
		
		
		
	 <footer>

      <div class="container">
        <div class="row">
          <div class="span4">
		  
		  
           <div class="widget">
              <h5 class="widgetheading">Learn More</h5>
              <ul class="link-list">
			  
			          <li><a href="aboutUs.php">About Us</a></li>
			   	      <li><a href="contactUs.php">Contact Us</a></li>
                <li><a href="#">Membership</a></li>
			
                <li><a href="#">Promote Your Add</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#"></a></li>

              </ul>

            </div>
			
           </div>

          <div class="span4">
            <div class="widget">

              <h5 class="widgetheading">Get in touch</h5>

              <address>
							<strong>Buy & Sell</strong><br>
							Bashundhara Residential Area<br>
							Dhaka, Bangladesh
						 </address>

              <p>
                <i class="icon-phone"></i> +880 1675695322 <br>
                <i class="icon-envelope-alt"></i> buynsell@gmail.com
              </p>

            </div>
          </div>


          <div class="span4">
            <div class="widget">

              <h5 class="widgetheading">Subscribe for latest product updates</h5>

              <p>
                Keep track for new products Sell & Buy updates. Enter your e-mail and subscribe to our newsletter.
              </p>

              <form class="subscribe">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text">
                  <button class="btn btn-theme" type="submit">Subscribe</button>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>

      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">

              <div class="copyright">
                <p><span>&copy; Company. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">

              <div class="credits">
                Designed for CSE499</a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </footer>

  </div>


  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>


  <!-------------         javascript      ----------->


  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->

  <script src="js/custom.js"></script>	
		
		
		
  </body>

 </html>

 