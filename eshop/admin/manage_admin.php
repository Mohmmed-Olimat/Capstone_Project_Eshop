 <?php
    
   include('includes/adminClass.php');
   $x = new Admin();

   if(isset($_POST['submit'])){

    $x->admin_email     = $_POST['admin_email'];
    $x->admin_password  = $_POST['admin_password'];
    $x->full_name       = $_POST['fullname'];
    $q=$x->create();
    
    if($q){
        header("location:manage_admin.php");
        
    }
}
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
                           <h1>Create Admin</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="">
    							<div class="row">
    								<div class="input-field col s12">
    									<input placeholder="" id="email" type="email" class="validate" name="admin_email" required>
    									<label for="email">Admin Email</label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="password" type="password" class="validate" name="admin_password" required>
    									<label for="password">Admin Password</label>
    								</div>
    							</div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input id="FullName" type="text" class="validate" name="fullname" required>
    									<label for="FullName">Admin Full Name</label>
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
                            <h3>Admins Table</h3> 
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th class='center'>ID</th>
                                        	<th class='center'>Email</th>
                                        	<th class='center'>Name</th>
                                        	<th class='center'>Edit</th>
                                        	<th class='center'>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
                                    	 if($data=$x->readAll()){

                                    	 	foreach ($data as $key => $value) {
                                    	 		echo "<tr class='gradeA'>";
                                    	 		echo "<td class='center'>{$value['admin_id']}</td>";
                                    	 		echo "<td class='center'>{$value['admin_email']}</td>";
                                    	 		echo "<td class='center'>{$value['full_name']}</td>";
                                    	 		

                                    	 		echo "<td class='center'><a href='edit_admin.php?id={$value['admin_id']}' class='btn btn-warning'>Edit</a></td>";
                                    	 		echo "<td class='center'><a href='delete_admin.php?id={$value['admin_id']}' class='btn btn-danger'>Delete</a></td>";
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