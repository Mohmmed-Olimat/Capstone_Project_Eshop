<?php
  session_start();
   include('../includes/customerClass.php');
   $x = new Customer();

    if(isset($_POST['login'])){
      
        
    
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $q=$x->login($email,$pass);
    if($q){
       
            $row=$q[0];
            $_SESSION['customer_id']=$row['cust_id'];
            $_SESSION['customer_name']=$row['cust_name'];
             header("location:../../cart.php");
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
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <style type="text/css">
 





        body {
  
    background-image: url('images/cart1.png');
    background-color: black;
  
   
    
}


.form-submit {
    width: 100%;
    border-radius:50px;
    padding: 17px 20px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    border: none;
    background-color:#F28D35!important;
    background-image: none;
    
}
.form-submit:hover{
        background-color:black !important;
        color: #F28D35!important;
        cursor: pointer;
    }
   
    </style>
</head>
<body>

    <div class="main">  
            <div class="col-lg-12 col-sm-8 col-md-12">
       <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Log In</h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email" required/>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         <div class=" form-button text-center">
                        
                            <input type="submit" name="login"  class="form-submit cl0 bg1" value="LOG IN"  />
                            
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
                                    <a href="Customer_signup.php">Sign-up Here</a>
                                </p>
                            </div>
                            <div class="register-link">
                                <p>
                                     Vendor account?
                                    <a href="../login_Vendor/Vendor_login.php">Log-In Here</a>
                                </p>
                            </div>
                </div>
            </div>
        </section>
        </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>