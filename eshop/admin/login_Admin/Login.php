<?php
   session_start();
   include('../includes/adminClass.php');
   $x = new Admin();
   $email="";
   $pass="";

    if(isset($_POST['login'])){
      
        
    
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $q=$x->login($email,$pass);
   
    
    if($q)
{
         $row=$q[0];
         $_SESSION['id']=$row['admin_id'];
         $_SESSION['admin_name']=$row['full_name'];
     
         header("location:../index.php");
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
    <title>Eshop Admin Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
      <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="">
            <div class="container">
                <div class="signin-content">
                        <img src="images/login.jpg" alt="login image" style="width: 400px;height: 400px">
                   

                           
                    <div class="signin-form pt-5">
                        <h2 class="form-title">Admin Login</h2>
                        <form method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Your Email"
                                       value="<?php //echo $email; ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"
                                       value="<?php //echo $pass; ?>" required />
                            </div>
                             <div class=" form-button text-center">
                                
                                <input type="submit"   class="form-submit" value="LOG IN" name="login" 
                                       style= 'width:170px;'/>
                            

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