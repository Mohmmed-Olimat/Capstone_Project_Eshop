<?php
   include('../includes/customerClass.php');
   $x = new Customer();
   $cust_name       ="";
   $cust_email      ="";
   $cust_password   ="";
   $con_pass        ="";
   $cust_mobile     ="";
   $cust_address    ="";
   $error           =0;

 if(isset($_POST['submit'])){

   $cust_name       = $_POST['cust_name'];
   $cust_email      = $_POST['cust_email'];
   $cust_password   = $_POST['cust_password'];
   $con_pass        = $_POST['con_pass'];
   $cust_mobile     = $_POST['cust_mobile'];
   $cust_address    = $_POST['cust_address'];
   

    if ($con_pass != $cust_password) 
    {  
       $errorcon=" * Password not match !!";
       $error=1;

    }
    if (! filter_var($cust_email,FILTER_VALIDATE_EMAIL)) 
    {
       $emailerror=" * Invaild email format";
       $error=1;
    }

    /*  Password must be at least 8 characters in length.
        Password must include at least one upper case letter.
        Password must include at least one number.
        Password must include at least one special character. */

        $uppercase    = preg_match('@[A-Z]@', $cust_password);
        $lowercase    = preg_match('@[a-z]@', $cust_password);
        $number       = preg_match('@[0-9]@', $cust_password);
        $specialChars = preg_match('@[^\w]@', $cust_password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cust_password) < 8) {
    $errorpass= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number and one special character.';
    $error=1;
}

  
    if (strlen($cust_mobile)<10 || strlen($cust_mobile)>14) 
    {
       $errormobile=" * Invalid phone number";
       $error=1;
    }

    if ($error == 0) 
    {       

    $x->cust_name      = $cust_name;
    $x->cust_email     = $cust_email;
    $x->cust_password  = $cust_password;
    $x->cust_mobile    = $cust_mobile ;
    $x->cust_address   = $cust_address;

    $q=$x->create();
      
        if ($q) 
        {

           header("location:Customer_login.php");

        }   
    }         
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
     <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
       <style type="text/css">
        
        body {
  
    background-image: url('images/cart1.png');
    background-color: black;
    padding-top: 0px;
    padding-bottom: 0px;
    padding-right: 0px;
    padding-left: 0px;
    
    
}

.form-submit {
    width: 100%;
    border-radius:50px;
    padding: 17px 20px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 700;
    color: Black;
    text-transform: uppercase;
    border: none;
    background-color:#F28D35!important;
    background-image: none;
    padding-top: 10px;
    
}
.form-submit:hover{
        background-color:black !important;
        color: #F28D35!important;
        cursor: pointer;
    }
    .container{
      width: 800px;
    }
      
    </style>
    }
</head>
<body>

    <div class="main">
      <div class="col-lg-12 col-sm-8 col-md-12">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" enctype='multipart/form-data'>
                        <h2 class="form-title">Create account</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="cust_name"
                              placeholder="Full Name"
                            value="<?php echo $cust_name;?>" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="cust_email" placeholder="Email" value="<?php echo $cust_email;?>" required />
                            <div style="color:red; ">
                                <?php if (isset($emailerror))
                                { echo $emailerror; }?>
                                    
                            </div>
                        </div>


                         <div class="form-group">
                            <input type="password" class="form-input" name="cust_password" id="password" placeholder="Password 'at least 8 characters in length and should include at least one upper case letter, one number and one special character'" value="<?php echo $cust_password;?>" required />
                             <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password">
                             </span>
                            <div style="color:red; ">
                                <?php if (isset($errorpass)) 
                                { echo $errorpass; }?>       
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="con_pass" id="passwordcon" placeholder="Confirm-Password" required />
                              <div style="color:red; ">
                                <?php if (isset($errorcon)) 
                                { echo $errorcon; }?>       
                             </div>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  placeholder="Phone"
                             name="cust_mobile"  value="<?php echo $cust_mobile;?>" required  />
                            <div style="color:red; ">
                                <?php if (isset($errormobile)) 
                                { echo $errormobile; }?>       
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Address"
                             name="cust_address"  value="<?php echo $cust_address;?>" required />
                        </div>

                         <div class="form-group">
                        
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/>
                        </div>               

                    </form>
                     <br>
                       <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="Customer_login.php">Sign-in Here</a>
                                </p>
                            </div>
                   
                </div>

            </div>
             
        </section>
      </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>