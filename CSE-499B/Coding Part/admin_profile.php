
 <!-- Profile session start after login -->

<?php
  
        session_start();

        $user = $_SESSION['username'];

        if($user == true)
       {
            
        }
        else{
            header("location:http://localhost/cse_499a/admin_login.php");
        } 

 
 ?>



<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <title>Buyer Profile</title>
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

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Profile Block and Others -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Theme skin -->

  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
   


   <!--------------   Real Time Show   --------------->

   <script type="text/javascript"> 

      function display_c()
     {
       var refresh=1000; // Refresh rate in milli seconds
       mytime=setTimeout('display_ct()',refresh)
     }

     function display_ct() 
    {
      var x = new Date()
      document.getElementById('ct').innerHTML = x;
      display_c();
    }


</script>


  <style>
  

 h4{
      color: white;
      text-shadow:3px 3px 8px #000000;
   }



 </style>





</head>

 <body>

   <!-----------------    Header Start   -------------->


  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">

          <div class="row">

            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +880 1675695322</p>
            </div>
            

       <ul class="social-network">

        <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
        <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
        <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
        <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
               

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


          <div class="span6">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>

                  <nav class="menu" role='navigation'>

                  <ul class="nav topnav">


                    <li><a href="index.php">Home</a></li>

                    <li><a href="buyProduct.php">Buy Products</a></li>

                    <li><a href="contactUs.php">Contact Us</a></li>
                      
                    <li> <a href="aboutUs.php">About Us</a></li>
                     
                    
                  <div class="w3-dropdown-hover">   

                  <button class="w3-button w3-green" style="font-size:13px">

                 <i class="fa fa-user-o" style="font-size:20px"></i>

      ADMIN</button>


                   <div class="w3-dropdown-content w3-bar-block w3-border">

                      
                      <a href="#" class="w3-dropdown-click-green w3-bar-item w3-button">My Products</a>
                      <a href="#" class="w3-bar-item w3-button">My Bid</a>
                      <a href="#" class="w3-bar-item w3-button">My Wishlist</a>
                      <a href="admin_profile_edit.php" class="w3-bar-item w3-button">Edit Profile</a>
                      <hr><a href="logout_admin.php" class="w3-bar-item w3-button w-3-padding-10px">Logout</a></hr>

                  </div>
                </div>
             </div>
                    

                      </div>
                   </div>

                 </ul>
        
        
              </ul>
        

                  </ul>
                </nav>
              </div>

              <!-------------  End navigation  ------------->


            </div>
          </div>
        </div>
      </div>
    </header>

    <!----------------   End Header    --------------->

  

   <!-----------------  Page Container  --------------->


 <div class="w3-container w3-content" style="max-width:1450px;margin-top:30px">    

  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
  
      <!---------------   Profile    ------------->
    
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center bold text-shadow: 2px 2px #FF0000">My Profile</h4> 
         <hr></hr>
        

         <p>


<?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $ad_rating = $row["ad_rating"];      
                       
                       
                         for ($x = 1; $x <= $ad_rating; $x++) 
                       {
                           echo '<i class="fa fa fa-star-o fa-fw w3-margin-right w3-large w3-text-teal"></i>' ;

                       }



       
                 }
        
         
           }
      
?>


         </p>

     
         <hr></hr>
         <hr>

         <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-large w3-text-teal"></i>

 <?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $name = $row["name"];      
                       
                        echo '<tr> 

                              <td>'.$name.'</td>                    
                             
                          </tr>';
       
                 }
        
         
           }
      
?>

     <hr>
     

         <p><i class="fa fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
 
<?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $username = $row["username"];      
       
                     echo '<tr> 

                              <td>'.$username.'</td>                                         
                  
                          </tr>';
       
                 }
        
         
           }
      
?>

   </p>


<!-- Email -->

<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i> 


 <?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $email = $row["email"];      
       
                     echo '<tr> 

                              <td>'.$email.'</td>                                         
                  
                          </tr>';
       
                 }
        
         
           }
      
?>  

 </p>



<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>


  <?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $phone = $row["phone"];      
       
                     echo '<tr> 

                              <td>'.$phone.'</td>                                         
                  
                          </tr>';
       
                 }
        
         
           }
      
?>




</p>


  <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>

<?php 
      
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $designation = $row["designation"];      
       
                     echo '<tr> 

                              <td>'.$designation.'</td>                                         
                  
                          </tr>';
       
                 }
        
         
           }
      
?>



  </p>


        </div>
      </div>
      <br>
      
      <!-- Accordion -->

      <div class="w3-card w3-round">

        <div class="w3-white">

          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align w3-hover-white"><i class="fa fa-info-circle fa-fw w3-margin-right"></i> More Info</button>
          <div id="Demo1" class="w3-hide w3-container">


         <hr>

         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-large w3-text-teal"></i>

<?php 
      
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $admin_birthday = $row["admin_birthday"];      
       
                     echo '<tr> 

                              <td>'.$admin_birthday.'</td>                                         
                  
                          </tr>';
       
                 }
        
         
           }
      
?>


         </p>


         <p><i class="fa fa fa-registered fa-fw w3-margin-right w3-large w3-text-teal"></i>Registration Date : 

     <?php   
        
		 $conn = mysqli_connect("localhost","root","","cse_499a"); 
		
		
                $sql = "SELECT * FROM admin_signup WHERE username='$user'"; 
       
                 if($result = mysqli_query($conn,$sql))
               {
                   while ($row = $result->fetch_assoc()) 
                  {
                       $m_time = $row["m_time"];   

                       echo substr(".$m_time",1,11);
              
                    }
      
           }
         
    ?>  

  </p>

          </div>
      
    
          <div id="Demo2" class="w3-hide w3-container">
          <div class="w3-row-padding">
    
         
           
         </div>
          </div>
          
        </div>      
      </div>
      <br>
      
    
      <br>
      
     
    
    <!---------------------  End Left Column  --------------->






    </div>

  
 
  <?php
  ini_set( "display_errors", 0);
  ?>


  <!-------------  Middle Column  -------------->

             
      
<div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding w3-cyan w3-opacity-min">
              
             
  <?php   
        
		 $conn = mysqli_connect("localhost","root","","cse_499a"); 
		
		
                $sql = "SELECT * FROM contact_us ORDER BY contact_id"; 
       
                 if($result = mysqli_query($conn,$sql))
               {
                   while ($row = $result->fetch_assoc()) 
                  {
                       
                      $contact_id = $row["contact_id"];   
                      $name = $row["name"];   
                      $email = $row["email"];   
                      $subject = $row["subject"];  

                      $message = $row["message"];  
                      $m_time = $row["m_time"];  

                      echo"<p>$contact_id</p>";
                      echo"<p>$name</p>";
                      echo"<p>$email</p>";
                      echo"<p>$subject</p>";
                      echo"<p>$message</p>";
                   

                      echo substr(".$m_time </div>",1,11);

                      
              
                    }
      
           }
         
    ?>  

       


            </div>
          </div>
        </div>


      </div>
      </div>



<!--         ---->



    <!----------------   End Middle Column   ---------------->

    </div>


  
    <!-----------------  Right Column  ----------------->
  
  
   <div class="w3-dropdown-hover w3-hide-small">
     <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell">

      <?php   
        
         $conn = mysqli_connect("localhost","root","","cse_499a"); 
    
         $sql = "SELECT * FROM contact_us ORDER BY contact_id DESC"; 
       
                 if($result = mysqli_query($conn,$sql))
               {
                   while ($row = $result->fetch_assoc()) 
                  {
                       
                      $contact_id = $row["contact_id"];   
                     

                       echo"<p>$contact_id</p>";
                     
                      
              
                    }
      
           }
               
    ?> 
  </i>


      <span class="w3-badge w3-right w3-small w3-green"> </span></button>  

     <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250px">

      <a href="#" class="w3-bar-item w3-button">#</a>
      <a href="#" class="w3-bar-item w3-button">##</a>
      
    </div>
                    
                    
  
    </div>
  
  
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center" style="width:260px">
        <div class="w3-container">

         <hr>

          <p><strong>Today</strong></p>
         

          <body onload=display_ct();>
              <span id='ct' ></span>
          </body>



           <hr>
        </div>


      </div>

      <br>

      
  
      </div>

     
      <br>

     
      

      
    <!-------------  End Right Column  ------------>

    </div>
    
  <!-----------  End Grid  -------------->

  </div>
  
  <!----------------  End Page Container  ------------->

</div>
<br>


<div>
<hr>
</div>



 <!----------  Footer Start  ---------->


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
              <strong>Buy & Sell</strong><br>Bashundhara Residential Area<br>Dhaka, Bangladesh</address>

              <p>
                <i class="icon-phone"></i> +880 1675695322 <br>
                <i class="icon-envelope-alt"></i> buynsell@gmail.com
              </p>

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
  
  
  <script>
  // Accordion
 function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}


 </script>

 
  <script src="js/custom.js"></script>
  
    
  </body>


 </html>

 