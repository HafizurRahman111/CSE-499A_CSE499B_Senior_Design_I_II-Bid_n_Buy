
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

  <!-- google font -->

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="nav.css">


  <!-- Theme skin -->

  <link href="color/default.css" rel="stylesheet" />

  <title>Buyer Signup</title>


  <style>

      .c11{
          margin-top: 20px;
        }
      .box-1{
          padding:30px;
        }
      .box-1 h1{
          font-family: 'Josefin Sans', sans-serif;
        }
      .v2 h1{
          font-family: 'Josefin Sans', sans-serif;
        }
      .v2{
          text-align: center;
          margin-top: 65px;
          border: 1px solid deepskyblue;
          border-radius: 10px;
          padding: 20px;
          background-color: #f2f2f2;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px deepskyblue;
        }


      .form-control{
          border:none;
          border-bottom: 2px solid green;
          border-radius: 10px;
        }
      .form-control:focus {
          border-color: deepskyblue;
          box-shadow: none;
        }
      @media only screen and (max-width:767px){
        .s2{
            display: none;
        }
      }

  </style>


 </head>


   <body>

     <div id="wrapper">

    <!---------------- Start Header -------------->

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
                
                
              </ul>

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


                    <li class="active">
                    <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Sign Up</a>

                    <!-------------- Popup for Sign Up --------------->

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
				  
				  
				  
			    <li>	  
				 
				  <!---------------  Log In Pop Up  ---------------> 
				  
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

              <!-------------------   End Navigation   -------------------->

            </div>
          </div>
        </div>
      </div>

    </header>

      <!--------------------------   End Header  ---------------------->



  <?php
  ini_set( "display_errors", 0);
  ?>


     <!------------------   Registration Form  ------------------->

   <section id="buyersignup"> 
  
	  <div class="c11 container">
      <div class="row">

        <div class="card" id="Registration">
          <h5 class="card-header" class="py-5 text-center font-weight-bold">Sign Up : <b>Buyer</b></h5>

		       <div class="row" class="card-body">

             <div class="col-md-8 box-1">

               <form method="post" enctype="multipart/form-data">

                 <div class="text"></div>

                  <div class="form-group">
                   <input type="text" required class="form-control" placeholder="First Name" name="fname">
                  </div>

                  <div class="form-group">
                   <input type="text" required class="form-control" placeholder="Last Name" name="lname">
                  </div>

                  <div class="form-group">
                   <input type="text" required class="form-control" placeholder="Username" name="uname">
                  </div>
 
                  <div class="form-group">
                    <input type="text" required class="form-control" placeholder="Enter Phone Number" name="phone">
                  </div>

                  <div class="form-group">
                    <input type="password" required class="form-control" placeholder="Password" name="pass">
                  </div>

                  <br>

                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

				        </form>


     <!------------- PHP Code Started for Buyer Registration ---------------->


    <?php
        
        include_once("connection.php");


         if(isset($_POST['submit']))
       {

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $uname = $_POST['uname'];
          $phone = $_POST['phone'];
          $pass = $_POST['pass'];


          $buyer_signup_table = "INSERT INTO buyer_signup(firstname,lastname,username,phone,password)
                  VALUES('$fname','$lname','$uname','$phone','$pass')";

          
                 if(empty($fname) || empty($lname) || empty($uname) || empty($pass) || empty($phone) )
                {

                  echo"<script>swal({
                      title: 'Complete all the fields',
                      text: 'Thank You',
                      icon: 'error',
                      timer: 4000,
                      button: false,
                      });</script>";
                  }

                   elseif(!$res = mysqli_query($conn,$buyer_signup_table))
                  {
                     echo"<script>swal({
                      title: 'Error Occured. Please Try again.',
                      text: 'Thank You',
                      icon: 'error',
                      timer: 4000,
                      button: false,
                      });</script>";
                  }


                   else
                  {

                    $res = mysqli_query($conn,$buyer_signup_table);
                    echo"<script>swal({
                      title: 'Congratulation! Your Information Added Successfully',
                      text: 'Registration Complete as a Buyer.Thank You',
                      icon: 'success',
                      timer: 6000,
                      button: false,
                      });

                      window.location='buyer_login.php'</script>";
                      

                   $lastInsertId = $conn->insert_id;

         
                   $for_buyer_profile = 'INSERT INTO buyer_profile (b_id,username) VALUES (?, ?)';

                   $statement = $conn->prepare( $for_buyer_profile);

                   $statement->bind_param('is', $lastInsertId, $uname);

                   $statement->execute();

                   $statement->close();
        

                  }

                }

    ?>



              </div>

            </div>
          </div>

      </div>

   </section>

        
  <!-----------------------  Footer Part Start------------------>


      <footer>

        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="widget">

                <h5 class="widgetheading">Browse pages</h5>

                <ul class="link-list">
                  <li><a href="#">Buy Products</a></li>
                  <li><a href="#">Sell Products</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact</a></li>
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


   <!---------------------  Footer Part End  ------------------->


 <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!--------------------------    javascript    --------------------->

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


