


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Buy & Sell</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
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

  <!----------------------------   Start Header   ------------------------------>

    <header>

      <div class="top">
        <div class="container">
          <div class="row">

            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +880 1675695322</p>
            </div>

            <div class="span6">

            

            </div>

          </div>
        </div>
      </div>


      <div class="container">

        <div class="row nomargin">
          <div class="span3">

            <div class="logo">
              <a href="#"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
            </div>

          </div>

          <div class="span9">
            <div class="navbar navbar-static-top">
              <div class="navigation">

                <nav>
                  <ul class="nav topnav">

                    <li >
                      <a href="index.php">Home</a>
                    </li>

                    

                   <li>	  
				 
				  <!-----------------   Log In Pop Up  ------------------> 

				  
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
                </nav>
              </div>

       <!----------------   End navigation    --------------->

            </div>
          </div>
        </div>
      </div>

    </header>

       <!-----------------------     End header     ------------------>

    <br>

     
    <!-------------------  PHP Code Start and Data Inserted Into Databse contact_us Table  ------------->  

 <?php
        
     include 'config.php' ;
     include_once("connection.php");

     $conn = mysqli_connect("localhost","root","","cse_499a");

     $Saved = FALSE;


     if(isset($_POST['post']))
    {

       $Nname = isset($_POST['name']) ? $_POST['name'] : '';
       $Eemail = isset($_POST['email']) ? $_POST['email'] : '';
       $Ssubject = isset($_POST['subject']) ? $_POST['subject'] : '';
      

      
        if ( empty ($Nname) ) 
       {
         $errors[] = 'Please Enter Your Name';

       }

        if ( empty ($Eemail) )  
       {
         $errors[] = 'Please Enter Your Email';

       }

        if ( empty ($Ssubject) ) 
       {
         $errors[] = 'Please Enter Your Subject';
       }

      

      
     
       if ( !isset($errors) ) 
     {

        $contact_us_table = 'INSERT INTO contact_us (name,email,subject,message) VALUES (?,?,?,?)' ;
        
        $st = $conn->prepare($contact_us_table) ;

        $st->bind_param('ssss',$Nname,$Eemail,$Ssubject,$Mmessage) ;


        echo "<script>alert('Your Query Send Sucessfully'); 
                  window.location='index.php'</script>";

        
        $st->execute();
        $st->close();
        $conn->close();

        $Saved = TRUE;
       
     }


      else{
              echo "<script>alert('Error Occured. Complete All The Input Fields Properly and Try Again'); 
                      window.location='contactUs.php'</script>";
          }


      }



  ?>



  <!-------------------  PHP Code END and Data Inserted Into Databse contact_us Table  ------------->  



 <!-----------------------    Form     ------------------>

  <br>
  <h5 align="center"><b>Verify Your Account</b></h5>

  <div class="card text-center">
    <div class="card-body">
     <hr>
      <div class="col-md-8 col-sm-8 marb20">
        <div class="contact-info">
          <div class="space">
             
    
              <form method="post" action="contactUs.php" class="contactForm" enctype="multipart/form-data">
              
              
                <input type="text" name="name" required placeholder="Username" value="<?php echo isset($Nname) ? $Nname : ''; ?>">

                <input type="text" name="phone" required placeholder="Phone" value="<?php echo isset($Eemail) ? $Eemail : ''; ?>">
           
                <input type="email" name="email" required placeholder="Email" value="<?php echo isset($Ssubject) ? $Ssubject : ''; ?>">

                

              
                <button type="submit" id="post" name="post" class="btn btn-form">SEND</button>
                 <br></br>
           
            
              </form>

            </div>

          </div>
        </div>
     </div>
  </div>


  <br>
         

  <!-------------------  End of The form and Data Insertion Complete   ---------------->
        

  <!-------------------  Footer Start  ------------->

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
    							<strong>Buy & Sell</strong><br>Bashundhara Residential Area<br>Dhaka, Bangladesh
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
                    <a>Designed for CSE499</a>
                  </div>

                </div>

              </div>
            </div>
          </div>

        </footer>

        <!-------------------  Footer End  --------------->

  </div>

  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>



  <!--------------------- javascript ------------------------->
  

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

  <!---------- Template Custom JavaScript File ---------->

  <script src="js/custom.js"></script>


  </body>

 </html>


 

