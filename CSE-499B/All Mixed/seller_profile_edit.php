


<!--------------------------    Profile Session Start after Login    --------------------------------->


<?php
  
        session_start();
        $use = $_SESSION['user_name'];

        if($use == true)
        {
            
        }
        else{
            header("location:http://localhost/cse_499a/seller_login.php");
        } 

 ?>


<!--------------------------    Profile Session Start Login PHP Code End    --------------------------------->




<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <title>Edit Seller Profile</title>
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


  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="nav.css">



  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
   


  <style>


  .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 180px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}




 h4{
      color: white;
      text-shadow:3px 3px 8px #000000;
   }

   input
  {
  
    width: 250px;
    height: 200px;

    box-sizing: border-box;
    border: 1px solid #999;

}

    .form-control{
     padding-bottom: 20px;
   }





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


<!-------------------------------------      Header Start     ------------------------------------------->


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

                    <li><a href="sellProduct.php">Sell Products</a></li>

                    <li><a href="contactUs.php">Contact Us</a></li> 
                      
                    <li> <a href="aboutUs.php">About Us</a></li>
                     
                    
                  <div class="w3-dropdown-hover">   

                  <button class="w3-button w3" style="font-size:13px">

                 <i class="fa fa-user-o" style="font-size:20px"></i>



<!----------------------------------   Username Show in Nav Bar   ---------------------------------------->       

 <?php 
      
   
         $conn = mysqli_connect("localhost","root","","cse_499a");
  
          $sql = "SELECT * FROM seller_signup WHERE username='$use'"; 
          
 
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
   
      
 ?>

</button>
  

             <div class="w3-dropdown-content w3-border">

               <a href="seller_profile.php" class="w3-bar-item w3-button">My Profile</a></li>
               <a href="#" class="w3-bar-item w3-button">My Products</a>
               <a href="#" class="w3-bar-item w3-button">My Bid</a>
               <a href="#" class="w3-bar-item w3-button">My Wishlist</a>

          <hr><a href="logout_s.php" class="w3-bar-item w3-button w-3-padding-10px">Logout</a></hr><br>



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

<!-------------------------------------------   End Navigation   ---------------------------------------------->


                   </div>
                </div>
              </div>
           </div>

    </header>

<!-------------------------------------------   End Header   ---------------------------------------------------->

  

<!-------------------------------------------   Page Container    --------------------------------------------->


  <div class="w3-container w3-content" style="max-width:1450px;margin-top:30px">  


  <!---------------------  The Grid   ------------------>

  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
  


 <!------------------------- Left Side with Profile ------------------------------------->
    
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center bold text-shadow: 2px 2px #FF0000">My Profile</h4> 
         <hr></hr>
        

         

         <p><i class="fa fa fa-star-o fa-fw w3-margin-right w3-large w3-text-teal"></i>

     
         <hr></hr>
         <hr>

         <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-large w3-text-teal"></i>



 <!------------------------- Show Name Using PHP ------------------------------------->


 <?php 
      
   
         $conn = mysqli_connect("localhost","root","","cse_499a");
  
          $sql = "SELECT * FROM seller_signup WHERE username='$use'"; 
 
           if($result = mysqli_query($conn,$sql))
        {
 
                   while ($row = $result->fetch_assoc()) 
               {
                       $firstname = $row["firstname"];      
                       $lastname = $row["lastname"];

       
                     echo '<tr> 

                              <td>'.$firstname.'</td>                    
                              <td>'.$lastname.'</td> 
                  
                          </tr>';
       
                 }
         
           }
      
?>

     <hr>
     

<!------------------------- Show Username Using PHP ------------------------------------->


         <p><i class="fa fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
 
<?php 
      
         $conn = mysqli_connect("localhost","root","","cse_499a");
  
         $sql = "SELECT * FROM seller_signup WHERE username='$use'"; 
 
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



<!------------------------- Show Email Using PHP ------------------------------------->

   <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>   </p>



    <!------------------------- Show Phone Number Using PHP ------------------------------------->

     <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>


    <?php 
      
   
       $conn = mysqli_connect("localhost","root","","cse_499a"); 
  
         $sql = "SELECT * FROM seller_signup WHERE username='$use'"; 
 
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










        </div>
      </div>
      <br>


 <!------------------------- End Left Side 1st Part With Phone Number ------------------------------------->


      
      <!---------------------------------Flip Part With More Info Start  ---------------------------->


      <div class="w3-card w3-round">

        <div class="w3-white">

          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align w3-hover-white"><i class="fa fa-info-circle fa-fw w3-margin-right"></i> More Info</button>
          <div id="Demo1" class="w3-hide w3-container">


         <hr>

         <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>----</p>

         <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>-----</p>

       
         <p><i class="fa fa-language fa-fw w3-margin-right w3-large w3-text-teal"></i>Language :</p>
     
         
        

    <!---------------------------------Registration Date show using PHP  ---------------------------->


         <p><i class="fa fa fa-registered fa-fw w3-margin-right w3-large w3-text-teal"></i>Registration Date : 

     <?php   

               $conn = mysqli_connect("localhost","root","","cse_499a");
        
                 $sql = "SELECT * FROM seller_signup WHERE username='$use'"; 
       
                 if($result = mysqli_query($conn,$sql))
               {
                   while ($row = $result->fetch_assoc()) 
                  {
                       $reg_time = $row["reg_time"];   

                       echo substr(".$reg_time",1,11);
              
                    }
      
           }
         
    ?>  

  </p>


            </div>

         </div>      
      </div>

    <br>
  <br>
      
     
    <!--------------------------------- Password Change Part with Popup Start using PHP  ---------------------------->


       <a onclick="window.location.href='#';" class="w3-bar-item w3-button" href="#" data-target="#changepassword" data-toggle="modal">

        <i class="fa fa-lock fa-fw w3-margin-right"></i> Change Password</a>
          <div id="Demo2" class="w3-hide w3-container">
          <div class="w3-row-padding">
          </div>
          </div>
   


     <!-------------------- Popup For Change Password-------------------->

    
     <div id="changepassword" class="modal fade" role="dialog">
        <div class="modal-dialog">
    
            <div class="modal-content">
              <div class="modal-body">                   
                                        
                  <div class="modal-body">



<!---------------------------------   Input Form ( Change Password )  ---------------------------->

      <form method="post" action="seller_profile_edit.php" >

        <table>


           <tr>
          <td>Current Password :</td>
              <td><input type="password" size="15" id="oldpass" name="oldpass"></td> 
          </tr>

          <tr>
          <td>New Password :</td>
              <td><input type="password" size="15" id="newpassword" name="newpassword"></td>
          </tr>

          <tr>
          <td>Confirm Password :</td>
              <td><input type="password" size="15" id="confirmnewpassword" name="confirmnewpassword"></td>
          </tr>

        <hr>
    
        </table>

        <button class="btn btn-primary pull-right" type="submit" name="done" > Save</button>

        <div class="modal-footer">     
    
     </form>   

       <hr>

        <button class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
        <hr>
            

          <div class="form-group">
                            
                                      

                                     </div>                                                              
                                 </div>
              
                             </form>
                        
                        </div>                           
                      </div>           
                  </div>
              </div>  
          </div>
            
            
        </li>   


        <!---------------------------------   Input Form End ( Change Password ) HTML ---------------------------->
          
            
         
  <?php
    

    $conn = mysqli_connect("localhost","root","","cse_499a"); 

    $use = $_SESSION['user_name'];

     
      if($use)
     {

     }
     else
    {
      header("location:http://localhost/cse_499a/seller_login.php");
    }


   
   if(isset($_POST['done']))
  {              
   
    $oldpass=$_POST['oldpass'];
    $newpassword=$_POST['newpassword'];
    $confirmnewpassword=$_POST['confirmnewpassword'];
    
   
    $sql = "SELECT password FROM seller_signup WHERE username='$use'"; 
       
    $result = mysqli_query($conn,$sql) ;

     while ($row = mysqli_fetch_array($result)) 
    {

          $pass = $row['password'] ;

           if($pass == $oldpass)
          {
              
             if($newpassword == $confirmnewpassword)
            {

              $up ="UPDATE seller_signup SET password='$confirmnewpassword' WHERE username='$use'";

              $upda = mysqli_query($conn, $up) ;


               if($upda)
              {
                  echo "<script>alert('Password Update Sucessfully'); 
                  window.location='seller_login.php'</script>"; 

                  session_destroy();

              }
              else{
                    echo "<script>alert('Your New and Confirm Password is not match.Try Again'); 
                    window.location='seller_profile_edit.php'</script>";
                 }
              
            }

              echo "<script>alert('Your New and Confirm Password is not match'); 
                 window.location='seller_profile_edit.php'</script>";

              
           }
           else {

                   echo "<script>alert('Your Old Password is Wrong');  
                   window.location='seller_profile_edit.php'</script>";
              }

    }

  }


?>



  <!-------------------------------------------- End Of The Change Password Full Part  ---------------------------->



  <!---------------------------------------    End Left Column      ---------------------------->


    </div>

    
    <!---------------------------------    Middle Column Start   ----------------------------->

   
<div class="w3-col m9">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding w3-grayscale">
              
              <br>
              <h3 class="w3-opacity"><i class="fa fa fa-pencil"></i> Edit Your Profile</h3>
              <br>
             
              <form method="post" action="seller_profile_edit.php" class="w3-container w3-card-4 w3-light-grey">
              <br>

              
              <div class="text">

              </div>
          
             <div class="form-group mx-sm-3 mb-2">

        
             <input type="text" class="form-control" placeholder="First Name" name="first_name">

             <input type="text" class="form-control" placeholder="Last Name" name="last_name">

             <input type="text" class="form-control" placeholder="Phone Number" name="phone">

             <hr>

             
             </div>
              
             
            <button type="submit" name="save" class="w3-button w3-green"><i class="fa fa fa-save"></i> Save</button>
           <br></br>


            </form>
          </form>


            </div>
          </div>
        </div>


      </div>



    

    <!-------------------------------------     End of Middle Column          ------------------------------->
                    </div>

<?php
    

    $conn = mysqli_connect("localhost","root","","cse_499a");

    $use = $_SESSION['user_name'];
     
   
   if(isset($_POST['save']))
  {              
    

    $up ="UPDATE seller_signup SET firstname='$_POST[first_name]',lastname='$_POST[last_name]',phone='$_POST[phone]' WHERE username='$use'";

    $upda = mysqli_query($conn, $up) ;




               if($upda)
              {
                  echo "<script>alert('Information Update Sucessfully'); 
                  window.location='seller_profile.php'</script>";

              }
              else{
                    echo "<script>alert('Eror .Try Again'); 
                    window.location='seller_profile_edit.php'</script>";
                 }
              
          

    

  }


?>

    
    <!----------------------------------- End Grid ------------------------------>
                 </div>
  
   <!--------------------------- End Page Container -------------------------------->
             </div>
            <br>

       <div>
     <hr>
   </div>
<!--------------------------- End Body Part -------------------------------->


<!--------------------------------------------    Footer Start       ------------------------------>


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

<!--------------------------------------------  End  Footer  ---------------------------------------->


  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>



 <!---------------------- javascript  ================================================== -->

  <!-------------- Placed at the end of the document so the pages load faster ------------->

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

   // Accordion - Flip Part

      function myFunction(id)
    {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) 
       {
          x.className += " w3-show";
          x.previousElementSibling.className += " w3-theme-d1";
       } 
       else { 
              x.className = x.className.replace("w3-show", "");
              x.previousElementSibling.className = 
              x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }

    }


    </script>


  <!-----------------------------   Template Custom JavaScript File    ---------------------->

      <script src="js/custom.js"></script>
  
    
   </body>

</html>




