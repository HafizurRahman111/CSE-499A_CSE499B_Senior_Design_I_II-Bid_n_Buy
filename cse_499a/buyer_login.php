<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="nav.css">
    <title>Buyer Login</title>
	
	
	
	 <meta charset="utf-8">
	<title>Buy & Sell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Your page description here" />
    <meta name="Eshan" content="" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="nav.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	
	
	

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
        .c1{
            margin-top: 8%;
        }
        .v2{
            text-align: center;
            margin-top: 25px;
            border: 1px solid deepskyblue;
            padding: 20px;
            border-radius: 10px;
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
              <a href="#"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
            </div>
          </div>
          <div class="span9">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.html">Home
                      </a>
                    </li>

                    <li>
                      <a href="buyProduct.html">Buy Products</a>
                    </li>

                    <li>
                      <a href="sellProduct.html">Sell Products</a>
                    </li>

                    <li>
                      <a href="contact.html">About Us</a>
                    </li>

                    <li>
                      <a href="contact.html">Contact </a>
                    </li>

                    <li>
                    <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Account</a>

                    <!-- popup for login -->

                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="align-content:center">


                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">User Login</h3>
                      </div>




                      <div class="modal-body">

                                  <form action="buyer_login.php" method="post">
                                    <div class="form-group">
                                      <label for="userename">Username</label>
                                      <input class="form-control" name="username" type="text" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="password">Password</label>
                                      <input class="form-control" name="password" type="password" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                    <label for="Type">Choose your type</label>
                                    <select class="form-control" name="type">
                                      <option value="1" selected>Vendor</option>
                                      <option value="2">Supplier</option>
                                      <option value="3">Admin</option>

                                    </select>
                                    </div>

                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button class="btn btn-warning" type="submit">Login</button>
                                      <hr>
                                      <p class="mx-2 px-2">Don't have an account?? </p>
                                      <p class="mx-2 mt-0 px-2">Click to <a href="c_signup.php">Register</a></p>
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
    
    <div class="c1 container">
      <div class="row">
          <div class="col-md-8">
              <form method="post">
                  <div class="im1">
                      <img class="img-responsive" src="./imgs/admin-login-images-png-4.png" style="height:100px; width:100px;"> 
                      <br>
                      <h3>Client Login</h3> 
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div><br>
                      <button type="submit" name="sub" class="btn btn-primary">Submit</button>
              </form>

          </div>
          <div class="s2 col-md-4">
              <div class="v2">
                  <h1>Login and go to your profile</h1>
                  
              </div>
          </div>
      </div>
  </div>
  
  <?php
        include_once("connection.php");
        
        session_start();
        
        if(isset($_POST['sub'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
           
            
            $sql = "SELECT username,password FROM buyer_signup
                           WHERE username='$user' AND password='$pass'";
            
            $res = mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            
            if($count == 1){
                $_SESSION['ruser']=$user;
               
                  echo"<script>swal({
                    title: 'Congratulation! You Login Successfully',
                    text: 'Thank You',
                    icon: 'success',
                    timer: 3000,
                    button: false,
                    });</script>";


				 
               
                header('location: buyer_profile.php');
            }
            
            else{
               echo"<script>swal({
                    title: 'Username or Password is Incorrect',
                    text: 'Try Again',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
            }
            
        }
        
        
        
        
        ?>
</body>
</html>