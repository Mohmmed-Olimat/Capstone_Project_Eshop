 <?php include("includes/vendor_header.php");?>
     

     		<div id="page-wrapper">
		  <div class="header hpt-3"> 
                        <h1 class="page-header">
                            Statistics
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="#">Statistics</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			
				
					
		 	<h1>Hi <?php echo $_SESSION['vendor_name'];?></h1>

		 			   <?php
                        include('includes/vendorClass.php');
   						$x = new Vendor();

                        $data9=$x->NOOFORDERS($_SESSION['vendor_id']);
                        $data9=$data9[0];
                        $data10=$x->NOOFPRODUCTS($_SESSION['vendor_id']);
                        $data10=$data10[0];

                    ?>
		         <div class="row hpt-3">
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF ORDERS</h2>
                                            <div class="easypiechart" id="easypiechart-blue" data-percent="100" >
                                                  <span class="percent">
                                            <?php
                                            echo $data9['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>
                                <div class="row hpt-3">
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="card-panel text-center">
                                            <h2>NO. OF PRODUCTS</h2>
                                            <div class="easypiechart" id="easypiechart-orange" data-percent="100" >
                                                      <span class="percent">
                                            <?php
                                            echo $data10['NUM'];
                                            ?></span>
                                            </div> 
                                        </div>
                                </div>
                            </div>
		 
				

			 
				
	

	   
				
				
			
                </div>
                
               <?php include("includes/vendor_footer.php");?>