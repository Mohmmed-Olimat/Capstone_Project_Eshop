<?php
   include('../includes/approvalClass.php');
   $x                 = new Vendor();
   $approv            = new Approval();
   $vendor_name       ="";
   $vendor_email      ="";
   $vendor_password   ="";
   $con_pass          ="";
   $vendor_mobile     ="";
   $brand_name        ="";
   $brand_desc        ="";
   $error             =0;

 if(isset($_POST['submit'])){

   $vendor_name       = $_POST['vendor_name'];
   $vendor_email      = $_POST['vendor_email'];
   $vendor_password   = $_POST['vendor_password'];
   $con_pass          = $_POST['con_pass'];
   $vendor_mobile     = $_POST['vendor_mobile'];
   $brand_name        = $_POST['brand_name'];
   $brand_desc        = $_POST['brand_desc'];
   

    if ($con_pass != $vendor_password) 
    {  
       $errorcon=" * Password not match !!";
       $error=1;

    }
    if (! filter_var($vendor_email,FILTER_VALIDATE_EMAIL)) 
    {
       $emailerror=" * Invaild email format";
       $error=1;
    }

    /*  Password must be at least 8 characters in length.
        Password must include at least one upper case letter.
        Password must include at least one number.
        Password must include at least one special character. */

        $uppercase    = preg_match('@[A-Z]@', $vendor_password);
        $lowercase    = preg_match('@[a-z]@', $vendor_password);
        $number       = preg_match('@[0-9]@', $vendor_password);
        $specialChars = preg_match('@[^\w]@', $vendor_password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($vendor_password) < 8) {
    $errorpass= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number and one special character.';
    $error=1;
}

  
    if (strlen($vendor_mobile)<10 || strlen($vendor_mobile)>14) 
    {
       $errormobile=" * Invalid phone number";
       $error=1;
    }

    if(!$_FILES['brand_img']['name']){

       $errorimg=" * You should upload image";
       $error=1;
    }


    if ($error == 0) 
    {       

    $x->vendor_name      = $vendor_name;
    $x->vendor_email     = $vendor_email;
    $x->vendor_password  = $vendor_password;
    $x->vendor_mobile    = $vendor_mobile ;
    $x->brand_name       = $brand_name;
    $x->brand_img        = $_FILES['brand_img']['name'];
    $x->brand_desc       = $_POST['brand_desc'];
    $tmp_name            = $_FILES['brand_img']['tmp_name'];
    $path                ='../assets/img/brand/';

    move_uploaded_file($tmp_name,$path.$x->brand_img);
    $q=$x->create();
      
      
        if ($q) 
        {

          $vid=$approv->getvendorid($brand_name);
          $approv->vendor_id= $vid[0]['vendor_id'];
          $approv->create();
           header("location:Vendor_login.php");

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
    <title>Vendor Sign Up </title>

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
    padding-top: 10px;
    padding-bottom: 0px;
    
    
}
      
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" enctype='multipart/form-data'>
                        <h2 class="form-title">Create account</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="vendor_name"  placeholder="Vendor Full Name"
                            value="<?php echo $vendor_name;?>" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="vendor_email" placeholder="Vendor Email" value="<?php echo $vendor_email;?>" required />
                            <div style="color:red; ">
                                <?php if (isset($emailerror))
                                { echo $emailerror; }?>
                                    
                            </div>
                        </div>


                         <div class="form-group">
                            <input type="password" class="form-input" name="vendor_password" id="password" placeholder="Password 'at least 8 characters in length and should include at least one upper case letter, one number and one special character'" value="<?php echo $vendor_password;?>" required />
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
                            <input type="text" class="form-input"  placeholder="Phone" name="vendor_mobile"  value="<?php echo $vendor_mobile;?>" required  />
                            <div style="color:red; ">
                                <?php if (isset($errormobile)) 
                                { echo $errormobile; }?>       
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Brand Name" name="brand_name"  value="<?php echo $brand_name;?>" required />
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-input" placeholder="Brand Description" name="brand_desc"  value="<?php echo $brand_desc;?>" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Upload Brand Image/Logo:</label>
                            <input type="file" name ="brand_img" class="form-input"/>
                            <div style="color:red; ">
                                <?php if (isset($errorimg))
                                { echo $errorimg; }?>
                                    
                            </div>
                        </div> 

                         <div class="form-group">
                        
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/>
                        </div>               

                    </form>
                     <br>
                       <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="Vendor_login.php">Sign-in Here</a>
                                </p>
                            </div>
                            <div style="text-align: right;">
                               
                                   <span style="color: red;">
                                   After sign up, you should wait until the admin approves your registration.</span> 
                                    
                              
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