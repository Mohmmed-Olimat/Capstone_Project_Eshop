<?php
 
   include('includes/customerClass.php');
   $x = new Customer();
   $id =$_GET['id'];

    if(isset($_POST['submit'])){

    $x->cust_name      = $_POST['cust_name'];
    $x->cust_email     = $_POST['cust_email'];
    $x->cust_password  = $_POST['cust_password'];
    $x->cust_mobile    = $_POST['cust_mobile'];
    $x->cust_address   = $_POST['cust_address'];
    $q=$x->update($id);
    
    if($q){
        header("location:manage_customers.php");
        
    }
}       
        $data=$x->readById($id);
        $customerSet=$data[0];

?>
 <?php include("includes/admin_header.php");?>
			<div id="page-wrapper">
				 <div class="header"> 
                        <h1 class="page-header">
                            Manage Customer
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="index.php">Dashboard</a></li>
					  <li class="active">manage customer</li>
					</ol> 
									
		</div>
          <div id="page-inner">

          		 <div class="row"> <!-- row start -->
			 <div class="col-lg-12">
			 <div class="card">
                        <div class="card-action">
                           <h1>Edit Customer</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="FullName" type="text" class="validate"
                                         name="cust_name" value="<?php
                                 echo $customerSet['cust_name']; ?>">
                                        <label for="FullName"></label>
                                    </div>
                                </div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input  id="email" type="email" class="validate"
                                         name="cust_email" value="<?php
                                 echo $customerSet['cust_email']; ?>">
    									<label for="email"></label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="password" type="password" class="validate"
                                         name="cust_password" value="<?php
                                 echo $customerSet['cust_password']; ?>">
    									<label for="password"></label>
    								</div>
    							</div>
    							
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="custmobile" type="text" class="validate"
                                         name="cust_mobile" value="<?php
                                 echo $customerSet['cust_mobile']; ?>">
                                        <label for="custmobile"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="custaddress" type="text" class="validate"
                                         name="cust_address" value="<?php
                                 echo $customerSet['cust_address']; ?>">
                                        <label for="custaddress"></label>
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
	 </div>	<!-- row end -->
    </div>
