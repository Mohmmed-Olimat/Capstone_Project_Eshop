 <?php
    
   include('includes/customerClass.php');
   $x = new Customer();

   if(isset($_POST['submit'])){

    $x->cust_name      = $_POST['cust_name'];
    $x->cust_email     = $_POST['cust_email'];
    $x->cust_password  = $_POST['cust_password'];
    $x->cust_mobile    = $_POST['cust_mobile'];
    $x->cust_address   = $_POST['cust_address'];
    $q=$x->create();
    
    if($q){
        header("location:manage_customers.php");
        
    }
}
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
                           <h1>Create Customer</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="FullName" type="text" class="validate"
                                         name="cust_name" required>
                                        <label for="FullName">Customer Full Name</label>
                                    </div>
                                </div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input  id="email" type="email" class="validate"
                                         name="cust_email" required>
    									<label for="email">Customer Email</label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="password" type="password" class="validate"
                                         name="cust_password" required>
    									<label for="password">Customer Password</label>
    								</div>
    							</div>
    							
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="custmobile" type="text" class="validate"
                                         name="cust_mobile" required>
                                        <label for="custmobile">Customer Mobile</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="custaddress" type="text" class="validate"
                                         name="cust_address" required>
                                        <label for="custaddress">Customer Address</label>
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


	 				<div class="row"> <!-- row start -->    <!-- Advanced Tables -->

				
						   
                <div class="col-md-12 col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            <h3>Customeres Table</h3> 
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th class='center'>ID</th>
                                            <th class='center'>Name</th>
                                        	<th class='center'>Email</th>
                                            <th class='center'>Mobile</th>
                                            <th class='center'>Address</th>
                                        	<th class='center'>Edit</th>
                                        	<th class='center'>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
                                    	 if($data=$x->readAll()){

                                    	 	foreach ($data as $key => $value) {
                                    	 		
                                    	 		echo "<tr class='gradeA'>";
                                    	 		echo "<td class='center'>{$value['cust_id']}</td>";
                                    	 		echo "<td class='center'>{$value['cust_name']}</td>";
                                    	 		echo "<td class='center'>{$value['cust_email']}</td>";
                                                echo "<td class='center'>{$value['cust_mobile']}</td>";
                                                echo "<td class='center'>{$value['cust_address']}</td>";
                                    	 		

                                    	 		echo "<td class='center'><a href='edit_customer.php?id={$value['cust_id']}' class='btn btn-warning'>Edit</a></td>";
                                    	 		echo "<td class='center'><a href='delete_customer.php?id={$value['cust_id']}' class='btn btn-danger'>Delete</a></td>";
                                    	 		echo "</tr>";


                                    	 	}


                                    	 }
                        ?>
                       
                                        	
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
          
					
		 	
		 
					</div>	<!-- row end -->



				
			
                </div>


  <?php include("includes/admin_footer.php");?>