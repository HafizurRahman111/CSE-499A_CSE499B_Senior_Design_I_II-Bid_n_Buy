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
                <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>


      <div class="container">


        <div class="row nomargin">
          <div class="span3">
            <div class="logo">
              <a href="index.php"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
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

                    <li class="active">
                      <a href="#">Buy Products</a>
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
                    <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Log In</a>

                    <!-- popup for login -->

                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="align-content:center">


                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">User Login</h3>
                      </div>

                      <div class="modal-body">

                                  <form action="login.php" method="post">
                                   
                                    
                                    <div class="form-group">
                                    <label for="Type">Choose Your type</label>

                                     <select onchange="location = this.options[this.selectedIndex].value;">

                                         <option value="1" selected>Choose Here</option>
                                         <option value="buyer_login.php">Buyer Log In</option>
                                         <option value="seller_login.php">Seller Log In</option>

                                     </select>​
                                    </div>

                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      

                                  </form>
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
	

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Buy Product</li>
              </ul>
              <h2>Buy your desired Products</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span4">

            <aside class="left-sidebar">

              <div class="widget">
                <form>
                  <div class="input-append">
                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                    <button class="btn btn-theme" type="submit">Search</button>
                  </div>
                </form>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Categories</h5>

                <ul class="cat">
                  <li><i class="icon-angle-right"></i> <a href="#">Electronics</a><span> (20)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Cars/Bikes</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Real estate</a><span> (18)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Life Style</a><span> (18)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Food & Nutrition</a><span> (18)</span></li>

                </ul>
              </div>

              <div class="widget">
                <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
                    <li><a href="#two" data-toggle="tab">Recent</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one">
                      <ul class="popular">
                        <li>
                          <img src="img/recent/small/iphone.png" alt="" class="thumbnail pull-left" />
                          <p><a href="#">I phones for sell</a></p>
                          <span>20 June, 2019</span>
                        </li>
                        <li>
                          <img src="img/recent/small/home.png" alt="" class="thumbnail pull-left" />
                          <p><a href="#">Flat for sell</a></p>
                          <span>20 June, 2019</span>
                        </li>
                        <li>
                          <img src="img/recent/small/car.png" alt="" class="thumbnail pull-left" />
                          <p><a href="#">Honda vezel for sell</a></p>
                          <span>20 June, 2019</span>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane" id="two">

                      <ul class="recent">
                        <li>
                          <p><a href="#">Protine powders</a></p>
                        </li>
                        <li>
                          <p><a href="#">Leather jackets</a></p>
                        </li>
                        <li>
                          <p><a href="#">Givson Guitars</a></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="widget">

                <h5 class="widgetheading">Paid video ads for trending Products</h5>
                <div class="video-container">
              <iframe width="853" height="480" src="https://www.youtube.com/embed/yXyu7rqlpvs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Rules & Regulations</h5>
                <p>
                  Here we'll write some rules & regulations about our service.
                  </p>

              </div>
            </aside>
          </div>




          <div class="span8" >

            <div class="row">
              <div class="span8">
                <h4 class="title">Recent <strong>Seller Posts</strong></h4>

                <div class="row">

                  <div class="span4">
                    <div class="item">
                      <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
            </div>
            <div class="flip-card-back">
              <h1>Denim Jeans</h1>
              <p>Price: 800 BDT</p>
              <p>Quantity: 200 pcs</p>
              <p>Special Remarks: details</p>
              <p><button class="btn btn-warning">BID</button></p>

            </div>
          </div>
        </div>
                    </div>
                  </div>


                    <div class="span4">
                      <div class="item">
                        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back">
                <h1>Denim Jeans</h1>
                <p>Price: 800 BDT</p>
                <p>Quantity: 200 pcs</p>
                <p>Special Remarks: details</p>
                <p><button class="btn btn-warning">BID</button></p>

              </div>
            </div>
          </div>
                      </div>
                    </div>


                    <div class="span4">
                      <div class="item">
                        <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
                </div>
                <div class="flip-card-back">
                <h1>Denim Jeans</h1>
                <p>Price: 800 BDT</p>
                <p>Quantity: 200 pcs</p>
                <p>Special Remarks: details</p>
                <p><button class="btn btn-warning">BID</button></p>

                </div>
                </div>
                </div>
                      </div>
                    </div>




                    <div class="span4">
                      <div class="item">
                        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back">
                <h1>Denim Jeans</h1>
                <p>Price: 800 BDT</p>
                <p>Quantity: 200 pcs</p>
                <p>Special Remarks: details</p>
                <p><button class="btn btn-warning">BID</button></p>

              </div>
            </div>
          </div>
                      </div>
                    </div>



                    <div class="span4">
                      <div class="item">
                        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back">
                <h1>Denim Jeans</h1>
                <p>Price: 800 BDT</p>
                <p>Quantity: 200 pcs</p>
                <p>Special Remarks: details</p>
                <p><button class="btn btn-warning">BID</button></p>

              </div>
            </div>
          </div>
                      </div>
                    </div>


                    <div class="span4">
                      <div class="item">
                        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/jeans3.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back">
                <h1>Denim Jeans</h1>
                <p>Price: 800 BDT</p>
                <p>Quantity: 200 pcs</p>
                <p>Special Remarks: details</p>
                <p><button class="btn btn-warning">BID</button></p>

              </div>
            </div>
          </div>
          </div>
         </div>



</div>



            <br><br><hr><br>

            <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
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
