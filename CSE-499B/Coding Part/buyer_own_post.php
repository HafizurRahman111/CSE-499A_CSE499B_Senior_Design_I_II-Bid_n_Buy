


<!-- Profile session start after login -->

<?php
  
        session_start();
        $use = $_SESSION['user_name'];

        if($use == true)
       {
            
        }
        else{
            header("location:http://localhost/cse_499a/buyer_login.php");
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
   


   


  <style>
  

 h4{
      color: white;
      text-shadow:3px 3px 8px #000000;
   }

.pt-3-half {
padding-top: 1.4rem;
}





 


 </style>





</head>

 <body>

<!--------------------  Header Start  ----------------->


  <div id="wrapper">

    <!----------------      Start Header     ---------------->

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

 <?php 
      
   
         $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
        
         $sql = "SELECT * FROM buyer_signup WHERE username='$use'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                while ($row = $result->fetch_assoc()) 
               {
                     $firstname = $row["firstname"];      
                      
                     echo '<tr> 
                              <td>'.$firstname.'</td>                    
                          </tr>';
       
                 }
         
           }



           
      
 ?></button>


                   <div class="w3-dropdown-content w3-bar-block w3-border">

                      
                      <a href="active" class="w3-dropdown-click-green w3-bar-item w3-button">My Products</a>
                      <a href="#" class="w3-bar-item w3-button">My Bid</a>
                      <a href="#" class="w3-bar-item w3-button">My Wishlist</a>
                      <a href="buyer_profile_edit.php" class="w3-bar-item w3-button">Edit Profile</a>
                      <hr><a href="logout.php" class="w3-bar-item w3-button w-3-padding-10px">Logout</a></hr>

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

              <!----------------     End Navigation    ----------->


            </div>
          </div>
        </div>
      </div>
    </header>

    <!--------------------  End Header  ------------------->

  

<!--------------------  Page Container  --------------------->


 <div class="w3-container w3-content" style="max-width:1450px;margin-top:30px">    

  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
  
      
    <!-- End Left Column -->


    </div>

  


<!-- Middle Column -->

   
      <div class="w3-row-padding">
        
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding w3-cyan w3-opacity-min">
              
              
              <h3 style="color:white" ;><b>Your Products Posts :</b></h3>
           
            
            </div>
          </div>
        

 <br>     
      

  
  

       <?php

      include 'config.php';
      include 'connection.php';

       
   
      $conn = mysqli_connect("localhost","root","","cse_499a"); 
   
  
      $sql = "SELECT * FROM buy_products_demand WHERE buyer_username='$use' ORDER BY b_product_id  DESC LIMIT 0,10";

   if ($result = mysqli_query($conn,$sql))
   {
        
         echo "
         <div id='table'>

      
      

         <table class='table table-bordered table-responsive-md table-striped text-center' style='width:100%' >
        <thead>
          <tr>
            <th class='text-center'>Category</th>
            <th class='text-center'>Product ID</th>
            <th class='text-center'>Product Name</th>
            <th class='text-center'>Price</th>
            <th class='text-center'>Quantity</th>
            <th class='text-center'>Type</th>

            <th class='text-center'>Update</th> 
            <th class='text-center'>Remove</th> 

           
          </tr>
        </thead>" ;

              
           while ($row = mysqli_fetch_assoc($result)) 
               {
          
                     

                echo " 
                      
        <table class='table table-bordered table-responsive-md table-striped text-center'>
        <tbody>
          <tr>
            <td class='text-center' >".$row['buyer_category']."</td>
            <td class='text-center' >".$row['b_product_id']."</td>
            <td class='text-center' >".$row['product_name']."</td>
            <td class='text-center' >".$row['estimated_price']."</td>
            <td class='text-center' >".$row['quantity']."</td>
            <td class='text-center' >".$row['buyer_type']."</td>
            

            <td class='table-edit'><button type='button'
                  class='btn btn-edit btn-rounded btn-sm my-0'>Update</button></td>
            
              <td class='table-remove'><button type='button'
                  class='btn btn-danger btn-rounded btn-sm my-0'>Delete</button></td> 
            
          </tr>
        </tbody>
      </table>
      
</div>
    
   " ;


               }
   


      }    




      
?>
       



<!--         ---->







    <!-- End Middle Column -->
    </div>


  
    <!-- Right Column -->
  
  
 
   
     
      <br>

     
      

      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>




<div>
<hr>
</div>



<!-- Footer Start -->



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

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
  
    
</body>
</html>