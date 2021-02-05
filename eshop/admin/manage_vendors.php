 <?php  
   include('includes/vendorClass.php');
   $x = new Vendor();

   if(isset($_POST['submit'])){

    $x->vendor_name      = $_POST['vendor_name'];
    $x->vendor_email     = $_POST['vendor_email'];
    $x->vendor_password  = $_POST['vendor_password'];
    $x->vendor_mobile    = $_POST['vendor_mobile'];
    $x->brand_name       = $_POST['brand_name'];
    $x->brand_img        = $_FILES['brand_img']['name'];
    $x->brand_desc       = $_POST['brand_desc'];
    $tmp_name            = $_FILES['brand_img']['tmp_name'];
    $path                ='assets/img/brand/';
    move_uploaded_file($tmp_name,$path.$x->brand_img);
    $q=$x->create();
    
    if($q){
        $idv=$x->getid($x->brand_name);
        $idv=$idv[0]['vendor_id'];
             $x->approved($idv);
        header("location:manage_vendors.php");
        
    }
}
 ?>
<?php include("includes/admin_header.php");?>



			<div id="page-wrapper">
				 <div class="header"> 
                        <h1 class="page-header">
                            Manage Vendor
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="index.php">Dashboard</a></li>
					  <li class="active">manage vendor</li>
					</ol> 
									
		</div>
          <div id="page-inner">

          		 <div class="row"> <!-- row start -->
			 <div class="col-lg-12">
			 <div class="card">
                        <div class="card-action">
                           <h1>Create Vendor</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="vendorname " type="text" class="validate"
                                         name="vendor_name" required>
                                        <label for="FullName">Vendor Full Name</label>
                                    </div>
                                </div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input  id="vendoremail" type="email" class="validate"
                                         name="vendor_email" required>
    									<label for="email">Vendor Email</label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="vendorpassword" type="password" class="validate"
                                         name="vendor_password" required>
    									<label for="vendorpassword">Vendor Password</label>
    								</div>
    							</div>
    							
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="vendormobile" type="text" class="validate"
                                         name="vendor_mobile" required>
                                        <label for="custmobile">Vendor Mobile</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="brandname" type="text" class="validate"
                                         name="brand_name" required>
                                        <label for="custaddress">Brand Name</label>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="branddesc" type="text" class="validate"
                                         name="brand_desc" required>
                                        <label for="branddesc">Brand Description</label>
                                    </div>
                                </div>
                                   <div class="row"> <label for="brandimg">Brand Image/Logo</label>
                                    <div class="input-field col s12">
                                        <input id="brandimg" type="file" class="validate form-control " name="brand_img">
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
                            <h3>Vendors Table</h3> 
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
                                            <th class='center'>Brand</th>
                                            <th class='center'>Logo</th>
                                            <th class='center'>Description</th>
                                        	<th class='center'>Edit</th>
                                        	<th class='center'>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
                                    	 if($data=$x->readAllapproved()){

                                    	 	foreach ($data as $key => $value) {
                                    	 		
                                    	 		echo "<tr class='gradeA'>";
                                    	 		echo "<td class='center'>{$value['vendor_id']}</td>";
                                    	 		echo "<td class='center'>{$value['vendor_name']}</td>";
                                    	 		echo "<td class='center'>{$value['vendor_email']}</td>";
                                                echo "<td class='center'>{$value['vendor_mobile']}</td>";
                                                echo "<td class='center'>{$value['brand_name']}</td>";
                                                echo "<td><img src='assets/img/brand/{$value['brand_img']}' width='150' height='50'></td>";
                                                echo "<td class='center'>{$value['brand_desc']}</td>";
                                    	 		

                                    	 		echo "<td class='center'><a href='edit_vendors.php?id={$value['vendor_id']}' class='btn btn-warning'>Edit</a></td>";
                                    	 		echo "<td class='center'><a href='delete_vendors.php?id={$value['vendor_id']}' class='btn btn-danger'>Delete</a></td>";
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