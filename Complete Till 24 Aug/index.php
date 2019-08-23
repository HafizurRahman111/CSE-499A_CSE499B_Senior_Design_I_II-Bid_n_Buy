<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Buy & Sell</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Client-vendor platform" />
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
            <div class="logo" id="logo">
              <a href="index.php"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
            </div>
          </div>
          <div class="span9">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
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
                      <a href="aboutUs.php">About Us</a>
                    </li>

                    <li>
                      <a href="contactUs.php">Contact </a>
                    </li>

                    <li>
                    <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Sign Up</a>

                    <!-- popup for login -->

                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >


                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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

    <!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Now you can easily <span class="colored"> Buy & Sell</span> your products</strong></h2>
                  <p class="animated fadeInUp"> Now it's easy to buy and sell your products to your client/ vendor.</p>
                  <a href="buyProduct" class="btn btn-success btn-large animated fadeInUp">
											<i class="icon-download"></i> Buy Product
										</a>
                  <a href="#" class="btn btn-theme btn-large animated fadeInUp">
											<i class="icon-upload"></i> Sell Product
										</a>
                </div>
                <div class="span6">
                  <img src="img/slides/camera/slide1/buynsell.jpg" alt="image loading failed" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="img/slides/camera/slide2/subscribe.jpg" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Subscribe to get <span class="colored">the lastest product updates</span></strong></h2>
                  <p class="animated fadeInUp"> you can subscribe to get E-mail alert for your desired product updates.</p>
                  <form>
                    <div class="input-append">
                      <input class="span3 input-large" type="text">
                      <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- slideshow end here -->

    </section>
    <!-- /section featured -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-star active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>High <strong> Quality </strong></h4>
                    <p>
                      We ensure high quality original products for you.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-dropbox active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Lower <strong> Price </strong></h4>
                    <p>
                    You can get your desired products from here in a lowest rate from the vendors.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Bid to <strong>sell</strong> your products </h4>
                    <p>
                      Bid to sell your products to your clients on their desire card.
                      </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
</section>


    <section id="productRequests">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4 class="title">Recent <strong>Product Requests</strong></h4>
            <div class="row">

              <div class="grid cs-style-4">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/works/iphone.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="img/works/iphone.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/works/home.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="img/works/home.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>

                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/works/car.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="img/works/car.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>

                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/works/protine.png" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="img/works/protine.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


        <section id="sellerPosts">
          <div class="container">
            <div class="row">
              <div class="span12">
                <h4 class="title">Recent <strong>Seller Posts</strong></h4>
                <div class="row">

                  <div class="grid cs-style-4">
                    <div class="span3">
                      <div class="item">
                        <figure>
                          <div><img src="img/works/iphone.png" alt="" /></div>
                          <figcaption>
                            <div>
                              <span>
    								<a href="img/works/iphone.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                              <span>
    								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    <div class="span3">
                      <div class="item">
                        <figure>
                          <div><img src="img/works/home.png" alt="" /></div>
                          <figcaption>
                            <div>
                              <span>
    								<a href="img/works/home.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                              <span>
    								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>

                    <div class="span3">
                      <div class="item">
                        <figure>
                          <div><img src="img/works/car.png" alt="" /></div>
                          <figcaption>
                            <div>
                              <span>
    								<a href="img/works/car.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                              <span>
    								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>

                    <div class="span3">
                      <div class="item">
                        <figure>
                          <div><img src="img/works/protine.png" alt="" /></div>
                          <figcaption>
                            <div>
                              <span>
    								<a href="img/works/protine.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                              <span>
    								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
    								</span>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
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
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Buy Products</a></li>
                <li><a href="#">Sell Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
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
