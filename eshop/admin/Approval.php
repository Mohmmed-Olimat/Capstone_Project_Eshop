<?php 
include('includes/adminClass.php');
    $x = new Admin();
include("includes/admin_header.php");?>


     		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            New Vendors
                        </h1>
					
									
		</div>
            <div id="page-inner">

			
				
					
		 	
		 
	 				<div class="row"> <!-- row start -->    <!-- Advanced Tables -->

				
						   
                <div class="col-md-12 col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            <h3></h3> 
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th class='center'>#</th>
                                            <th class='center'>Name</th>
                                        	<th class='center'>Email</th>
                                            <th class='center'>Mobile</th>
                                            <th class='center'>Brand</th>
                                            <th class='center'>Logo</th>
                                            <th class='center'>Description</th>
                                        	<th class='center'>Accept</th>
                                        	<th class='center'>Reject</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
                                    	 if($data=$x->readAllvendors()){ 
                                            $i=1; 	
                                    	 	foreach ($data as $key => $value) {
                                    	 		
                                    	 		echo "<tr class='gradeA'>";
                                    	 		echo "<td class='center'>$i</td>";
                                    	 		echo "<td class='center'>{$value['vendor_name']}</td>";
                                    	 		echo "<td class='center'>{$value['vendor_email']}</td>";
                                                echo "<td class='center'>{$value['vendor_mobile']}</td>";
                                                echo "<td class='center'>{$value['brand_name']}</td>";
                                                echo "<td><img src='assets/img/brand/{$value['brand_img']}' width='150' height='50'></td>";
                                                echo "<td class='center'>{$value['brand_desc']}</td>";
                                    	 		

                                    	 		echo "<td class='center'><a href='Accept.php?id={$value['vendor_id']}' class='btn btn-success'>Accept</a></td>";
                                    	 		echo "<td class='center'><a href='Reject.php?id={$value['vendor_id']}' class='btn btn-danger'>Reject</a></td>";
                                    	 		echo "</tr>";
                                    	 		$i++;
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