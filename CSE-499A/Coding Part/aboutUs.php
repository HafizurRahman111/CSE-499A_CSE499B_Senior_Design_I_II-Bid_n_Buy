

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Buy & Sell</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="Eshan" content="" />

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
  
  
  
  <style>
  
  
  *{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

.team-section{
	overflow: hidden;
	text-align: center;
	background: #34495e;
	padding: 60px;
}

.team-section h1{
	text-transform: uppercase;
	margin-bottom: 20px;
	color: white;
	font-size: 30px;
}

.border{
	display: block;
	margin: auto;
	width: 600px;
	height: 5px;
	background: #3498db;
	margin-bottom: 40px;
}

.ps{
	margin-bottom: 35px;
}

.ps a {
	display: inline-block;
	margin: 30px;
	width: 180px;
	height: 180px;
	overflow: hidden;
	border-radius: 50%
}

.ps a img{
	width: 100%;
	filter: grayscale(100%);
	transition: 0.4s all;
}

.ps a:hover > img{
	filter: none;
}

.section{
	width: 600px;
	margin: auto;
	font-size:25px;
	color: white;
	text-align: justify;
	margin-bottom: 35px;
}

.section:target {
	height: auto;	
}

.name{
	display: block;
	margin-bottom: 30px;
	text-align: center;
	text-transform: uppercase;

}
  
  
  
  </style>
  
  
  
  
  
  
  
  
  
  

</head>


<body>

  <div id="wrapper">

    <!-- start header -->
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
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
               
              </ul>

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
                    <li>
                      <a href="index.php">Home
                      </a>
                    </li>

                    <li>
                      <a href="buyProduct.php">Buy Products</a>
                    </li>

                    <li>
                      <a href="sellProduct.php">Sell Products</a>
                    </li>
					
					<li>
                      <a href="contactUs.php">Contact Us </a>
                    </li>

                    <li class="active">
                      <a href="aboutUs.php">About Us</a>
                    </li>

                    

              
                  <li>	  
				 
				  <!--Log In Pop Up--> 
				  
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
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->


	  
		  
			
  </div>


  <div class="team-section">
    


    <h2 class="ser-title">Meet Our Team!</h2>
   
    <span class="border"></span>
		  		 				
   <div class="ps">
  
   <a href="#p1"><img src="kmm_sir.jpg" alt="face"></a>
   <a href="#p3"><img src="himel.jpg" alt="face"></a>
   <a href="#p2"><img src="barua.jpg" alt="face"></a>
   
   <a href="#p4"><img src="samanta.jpg" alt="face"></a>
   <a href="#p4"><img src="ashik.jpg" alt="face"></a>
	  
  
  </div>
  
  
  <div class="section" id="p1">
  	   <span class="name">Dr. Mohammad Monirujjaman Khan</span>
  	      <span class="border"></span>
  	       <p>
  	      	Project Supervisor<br> 
  	                 	CSE-499 <br>	       	
  	      </p>
  </div>
  
  
    <div class="section" id="p2">
  	   <span class="name">Md. Hafizur Rahman</span>
  	      <span class="border"></span>
          <p>
  	      	Currently Studying at North South University(CSE)<br> 
  	      	       Developer<br>
  	      	
  	      </p>
		  
     </div>



   <div class="section" id="p3">
  	   <span class="name">Eshan Barua</span>
  	      <span class="border"></span>
  	      <p>
  	      	Currently Studying at North South University(CSE)<br>
  	      	 Developer<br>	  

  	      </p>
  </div>
  
  
   <div class="section" id="p4">
  	   <span class="name">Samanta Afrin</span>
  	      <span class="border"></span>
  	      <p>
  	      	Currently Studying at North South University(CSE)<br>
  	      	Developer<br> 
  	      	
  	      </p>
  </div>
  
  
  
    <div class="section" id="p4">
  	   <span class="name">  Ashiqur Rahman</span>
  	      <span class="border"></span>
  	      <p>
  	      	Currently Studying at North South University(EEE)<br>
  	      	Developer<br> 
			
  	      	
  	      </p>
		  
		       
		  
   </div>
  

  </div>
		  
		  
		  
		 
             
          
		  </div>

        </div>
      </div>
    </section>
	
	


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



 <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
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






