

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
  
  
  <style>
  
  h2{
    color:white;
  }
  
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


@import "https://fonts.googleapis.com/css?family=Josefin+Sans:100,200"

   #hexagons
     {
      max-width: 600px;
      margin: 1em auto 16em;
      font: normal 14px/18px Helvetica, Arial, sans-serif;
      padding-top: 4em;
      position: relative;

      }

      #categories
      {
      overflow:hidden;
      width: 100%;
      }

      .clr:after
      {
      content:"";
      display:block;
      clear:both;
      }

      #categories li
      {
      position:relative;
      list-style-type:none;
      width:32.33333333%; /* = (100- 3) / 3 */
      padding-bottom: 37.33641263%; /* =  width /0.866 */
      float:left;
      overflow:hidden;
      visibility:hidden;
      margin-left:0.5%;
      margin-right:0.5%;
      -webkit-transform: rotate(-60deg) skewY(30deg);
      -ms-transform: rotate(-60deg) skewY(30deg);
      transform: rotate(-60deg) skewY(30deg);
      cursor:pointer;
      }

       @media (min-width: 768px)
      {
       #categories li:nth-child(5n+4)
       {
         margin-left: 1%;
       }
        #categories li:nth-child(5n+4),
        #categories li:nth-child(5n+5)
        {
          margin-top: -8.083333333%;  /* = w / 4 */
          margin-bottom: -8.083333333%; /* = w / 4 */
          -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
          -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
           transform: translateX(50%) rotate(-60deg) skewY(30deg);
        }

         #categories li:nth-child(5n+6)
        {
           clear: left;    
          transform: translateX(0) rotate(-60deg) skewY(30deg);
        }
          #categories li:nth-child(5n+4):last-child,
          #categories li:nth-child(5n+5):last-child{
          margin-bottom: 0%;
         }
        }

        @media( max-width: 767px)
      {
       #categories li
      {
       width: 48.75%; /* = (100 -2.5) / 2 */
       padding-bottom: 56.29330254%; /* =  width /0.866 */
      }
          #categories li:nth-child(3n+3)
        {
         margin-left: 25.5%;
         clear: both;
         margin-top: -12.1875%; /* = w / 4 */
         margin-bottom: -12.1875%; /* = w / 4 */
        }
           #categories li:nth-child(3n+2)
          {
           float: right;       
          }
          #categories li:nth-child(3n+3):last-child{
           margin-bottom: 0%;
         }
          #categories li:nth-child(3n+4){
          clear: left;
          transform: translateX(0) rotate(-60deg) skewY(30deg);
         }
       }

        #categories li *{
      position:absolute;
      visibility:visible;
      overflow: hidden;
      }

      #categories li > div{
      width:100%;
      height:100%;
      text-align:center;
      color:#fff;
      overflow:hidden;
      -webkit-transform: skewY(-30deg) rotate(60deg);
      -ms-transform: skewY(-30deg) rotate(60deg);
      transform: skewY(-30deg) rotate(60deg);
      -webkit-backface-visibility:hidden;
      }

      /* HEX CONTENT */
      #categories li img{
      left: 50%;
      top: 50%;
      width: auto;
      margin: 0 auto;
      transform: translate(-50%,-50%);
      -webkit-border-radius: 20px; 
      -moz-border-radius: 20px; 
      border-radius:20px;
      }
      #categories li .flip-content{
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      color: #000;
      text-align: center;
      width: 100%;
      padding: 20px 3px;
      }
      #categories li .front .flip-content{
      font-size: 21px;
      }
      #categories li .flip-content *{
      position: static;
      }
      #categories li .flip-content{
      font-size: 19px; 
      line-height: 1.2;
      }
      #categories li .front{
      background-repeat: repeat;
      background-position: center;
      }
      #categories li .flip-content p{
      color: #666666;
      padding-bottom: 10px;
      }
      #categories li .flip-content.lg{
      font-size: 27px;
      }
      #categories li .flip-content.md{
      font-size: 24px;
      }
      #categories li .flip-content.title-xs{
      font-size: 38px;
      }
      #categories li .front .flip-content,
      #categories li .front .flip-content p{
      color: #fff;
      }
      #categories li .flip-content p:last-child{
      padding-bottom: 0;
      }
      #categories li .back .flip-content p a{
      background: #df5d53;
      display: inline-block;
      -webkit-border-radius: 18px; 
      -moz-border-radius: 18px; 
      border-radius: 18px;
      color: #fff;
      text-transform: uppercase;
      padding: 4px 6px 4px 11px;
      font-size: 12px;
      font-weight: 600;
      text-decoration:none;
      }
      #categories li .back  .flip-content p a i{
      font-size: 21px;
      vertical-align: middle;
      padding-left: 3px;
      }
      @media (max-width: 1024px){
      #news-month.style2{
      overflow: hidden;
      }
      #hexagons{
      margin-bottom: 15em;
      }
      }
      @media (max-width: 991px){
      #categories li .front .flip-content.title-xs{
      font-size: 29px;
      }
      #categories li .front .flip-content{
      font-size: 17px;
      }
      #categories li .flip-content.lg{
      font-size: 22px;
      }
      #categories li .flip-content.md{
      font-size: 18px;
      }
      #categories li .flip-content{
      font-size: 16px;
      }
      .initiative.style2 .initiative--title{
      font-size: 19px;
      }
      #hexagons{
      overflow: hidden;
      margin: 1em auto 0;
      padding-top: 3em;
      padding-bottom: 3em;
      }
      #categories{
      width: auto;
      padding: 0 12px;
      }
      #hexagons .el-bg.bg-11{
      top: 996px;
      }
      #hexagons .el-bg.bg-12{
      top: 1152px;
      }
      .page-template-our-impact .header{
      max-height: none;
      }
      }
      @media (max-width: 767px){
      #categories li .front .flip-content.title-xs{
      font-size: 32px;
      }
      #categories li .front .flip-content{
      font-size: 23px;
      }
      #categories li .flip-content.lg{
      font-size: 27px;
      }
      #categories li .flip-content.md{
      font-size: 26px;
      }
      #categories li .flip-content{
      font-size: 23px;
      }
      #hexagons .el-bg.bg-14{
      top: 1751px;
      }
      #categories li img{
      height: 100%;
      }
      .initiative.style2 a{
      padding-bottom: 20px;
      padding-top: 10px;
      }
      #news-month.style2 .news-figure{
      background-position:  0 0;
      padding: 20px 16px 20px;
      }
      .initiative.style2{
      padding-top: 20px;
      padding-bottom: 20px;
      }
      .page-template-our-impact .header{
      background-position: -62px;
      }
      }
      @media (max-width: 560px){
      #categories li .front .flip-content.title-xs{
      font-size: 22px;
      }
      #categories li .front .flip-content{
      font-size: 13px;
      }
      #categories li .flip-content.lg{
      font-size: 17px;
      }
      #categories li .flip-content.md{
      font-size: 16px;
      }
      #categories li .flip-content{
      font-size: 13px;
      }
      #categories{
      padding:0 8px;
      }
      #categories li .back .flip-content p a{
      font-size: 11px;
      padding: 0px 6px 0px 11px;
      }
      #categories li .back .flip-content p a i{
      font-size: 15px;
      line-height: 1.5;
      }
      }
      @media( max-width: 375px){
      .page-template-our-impact .header{
      background-position: -87px;
      }
      }
      @media (max-width: 320px){
      #categories li .front .flip-content.title-xs{
      font-size: 19px;
      }
      #categories li .front .flip-content{
      font-size: 12px;
      }
      #categories li .flip-content.lg{
      font-size: 13px;
      }
      #categories li .flip-content.md{
      font-size: 12px;
      }
      #categories li .flip-content{
      font-size: 11px;
      }
      #categories li .flip-content p{
      padding-bottom: 5px;
      }
      .page-template-our-impact .header{
      background-position: -104px;
      }
      }
      /* Flip EFFECT  */
      .flip-container {
      -webkit-perspective: 1000;
      -moz-perspective: 1000;
      -ms-perspective: 1000;
      perspective: 1000;
      -ms-transform: perspective(1000px);
      -moz-transform: perspective(1000px);
      -moz-transform-style: preserve-3d; 
      -ms-transform-style: preserve-3d; 
      }
      /*  UPDATED! flip the pane when hovered */
      .flip-container:hover{
      }
      .flip-container:hover .back {
      transform: rotateY(0deg);
      }
      .flip-container:hover .front {
      transform: rotateY(180deg);
      }
      .flip-container, .front, .back {
      width: 100%;
      height: 100%;
      }
      /* flip speed goes here */
      .flipper {
      width: 100%;
      height: 100%;
      -webkit-transition: 0.6s;
      -webkit-transform-style: preserve-3d;
      -ms-transition: 0.6s;
      -moz-transition: 0.6s;
      -moz-transform: perspective(1000px);
      -moz-transform-style: preserve-3d;
      -ms-transform-style: preserve-3d;
      transition: 0.6s;
      transform-style: preserve-3d;
      position: relative!important;
      }
      /* hide back of pane during swap */
      .front, .back {
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -ms-backface-visibility: hidden;
      backface-visibility: hidden;
      -webkit-transition: 0.6s;
      -webkit-transform-style: preserve-3d;
      -webkit-transform: rotateY(0deg);
      -moz-transition: 0.6s;
      -moz-transform-style: preserve-3d;
      -moz-transform: rotateY(0deg);
      -o-transition: 0.6s;
      -o-transform-style: preserve-3d;
      -o-transform: rotateY(0deg);
      -ms-transition: 0.6s;
      -ms-transform-style: preserve-3d;
      -ms-transform: rotateY(0deg);
      transition: 0.6s;
      transform-style: preserve-3d;
      transform: rotateY(0deg);
      position: absolute;
      top: 0;
      left: 0;
      }
      /*  UPDATED! front pane, placed above back */
      .front {
      -webkit-transform: rotateY(0deg);
      -ms-transform: rotateY(0deg);
      z-index: 2;
      }
      /* back, initially hidden pane */
      .back {
      -webkit-transform: rotateY(-180deg);
      -moz-transform: rotateY(-180deg);
      -o-transform: rotateY(-180deg);
      -ms-transform: rotateY(-180deg);
      transform: rotateY(-180deg);
      background: #eeeeee;
      }
  
  </style>
  

 </head>


<body>

  <div id="wrapper">

    <!--------------------------    Start Header  ----------------------->

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
                      <a href="index.php">Home</a>
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
				 
				  <!------------------  Log In Pop Up     ---------------> 
				  
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

              <!--------------   End Navigation  ------------->

            </div>
          </div>
        </div>
      </div>
    </header>

    <!------------------------   End Header   --------------------------->

  </div>

		<div class="team-section">

      <h2 class="set-title" ><u>Meet Our Team</h2></u>
       <br></br>
       <br></br>

        <div id="hexagons">

         <ul id="categories" class="clr">

        
        <li>

          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front" style="background-color: #1c87c9;" >
                <img src="himel.jpg">
              </div>

              <div class="back">
                <div class="flip-content md">
                     <span class="name">Md. Hafizur Rahman</span>
                       <span class="border"></span>
                       <p>
                         Currently Studying at North South University(CSE)<br> 
                         Developer<br>
            
                     </p>
                    
                </div>

              </div>
            </div>
          </div>


        </li>


        <li>

          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front" style="background-color: #ff6347;" >
                <img src="kmm_sir.jpg">
              </div>

              <div class="back">
                <div class="flip-content md">
                     <span class="name">Dr. Mohammad Monirujjaman Khan</span>
                       <span class="border"></span>
                        <p>Project Supervisor<br>CSE-499 <br></p>
                    
                </div>

              </div>
            </div>
          </div>


        </li>


         <li>

          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front" style="background-color: #8ebf42;" >
                <img src="barua.jpg">
              </div>

              <div class="back">
                <div class="flip-content md">
                     <span class="name">Eshan Barua</span>
                        <span class="border"></span>
                        <p>
                         Currently Studying at North South University(CSE)<br>
                         Developer<br>    

                       </p>
                    
                </div>

              </div>
            </div>
          </div>


        </li>



         <li>

          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front" style="background-color: #D754CB;" >
                <img src="samanta.jpg">
              </div>

              <div class="back">
                <div class="flip-content md">
                      <span class="name">Samanta Afrin</span>
                        <span class="border"></span>
                        <p>
                         Currently Studying at North South University(CSE)<br>
                         Developer<br>    

                       </p>
                    
                </div>

              </div>
            </div>
          </div>


        </li>

         
        <li>

          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front" style="background-color: #ffcc00;" >
                <img src="ashik.jpg">
              </div>

              <div class="back">
                <div class="flip-content md">
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


        </li>


      
      </ul>

        <br> </br>
        <br> </br>

    </div>

    </div>
    </div>
	

<!------------------------   Footer Start  --------------------------->

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






