<?php
  session_start();
   include('../includes/vendorClass.php');
   $x = new Vendor();

    if(isset($_POST['login'])){
      
        
    
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $q=$x->login($email,$pass);
    if($q){
        $vid=$q[0]['vendor_id'];
        $c=$x->checkapproved($vid);
        $c=$c[0]['approval'];
        if($c==0)
        {

            $error="Please wait until the admin approves your registration.";
        }
        else
        {
            $row=$q[0];
            $_SESSION['vendor_id']=$row['vendor_id'];
            $_SESSION['vendor_name']=$row['vendor_name'];
            $_SESSION['brand_name']=$row['brand_name'];
             header("location:../vendor.php");
        }
    }
   
    
  
    else
      {
        $error="Uncorrect Username Or Password";
      }
}

 ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendor Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <style type="text/css">
        .form-submit{
            color: Black;
        }
        body {
  
    background-image: url('images/vendor.jpg');
    background-position: center top;
    
}
      
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Vendor Log In</h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email" required/>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         <div class=" form-button text-center">
                        
                            <input type="submit" name="login"  class="form-submit" value="LOG IN"  />
                            
                        </div>  
                        
                        

                    </form>
                    <br>
                        <div class="text-center">
                           <?php
                                if (isset($error)) 
                                {  echo "
                                    <div class='alert alert-danger ' role='alert'>
                                            $error
                                        </div>";
                                }
                                ?>

                        </div>
                            <div class="register-link">
                                <p>
                                    If you don't have an account?
                                    <a href="Vendor_signup.php">Sign-up Here</a>
                                </p>
                            </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>