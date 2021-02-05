<?php
 
   include('includes/adminClass.php');
   $x = new Admin();
   $id =$_GET['id'];

    if(isset($_POST['submit'])){

    $x->admin_email     = $_POST['admin_email'];
    $x->admin_password  = $_POST['admin_password'];
    $x->full_name       = $_POST['fullname'];
    $q=$x->update($id);
    
    if($q){
        header("location:manage_admin.php");
        
    }
}       
        $data=$x->readById($id);
        $adminSet=$data[0];

?>
 <?php include("includes/admin_header.php");?>


      <div id="page-wrapper">
         <div class="header"> 
                        <h1 class="page-header">
                            Manage Admin
                        </h1>
            <ol class="breadcrumb">
            
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">manage admin</li>
          </ol> 
                  
    </div>
          <div id="page-inner">

               <div class="row"> <!-- row start -->
       <div class="col-lg-12">
       <div class="card">
                        <div class="card-action">
                           <h1>Edit Admin</h1> 
                        </div>
                        <div class="card-content">
                <form class="col s12" method="post" action="">
                  <div class="row"><label for="email" class="h4">Admin Email</label>
                    <div class="input-field col s12">
                      <input placeholder="aa" id="email" type="email" class="validate" name="admin_email" value="<?php
                                 echo $adminSet['admin_email']; ?>">
                      
                    </div>

                  </div>

                  <div class="row"><label for="admin_password" class="h4">Admin Password</label>
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate" name="admin_password" value="<?php
                                 echo $adminSet['admin_password']; ?>">
                      
                    </div>
                  </div>
                  <div class="row"><label for="FullName" class="h4">Admin Full Name</label>
                    <div class="input-field col s12">
                      <input id="FullName" type="text" class="validate" name="fullname" value="<?php
                                 echo $adminSet['full_name']; ?>">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <button id="button" type="submit" class="waves-effect waves-light btn btn-block" name="submit"><span class="h3">
                        Save
                      </span></button>
                    </div>
                  </div>
                  
     
    </form>
  <div class="clearBoth"></div>
  </div>
    </div>
 </div> 
   </div> <!-- row end -->



                </div>


  <?php include("includes/admin_footer.php");?>