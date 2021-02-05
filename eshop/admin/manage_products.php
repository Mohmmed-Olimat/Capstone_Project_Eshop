 <?php
    
   include('includes/productsClass.php');
   $x = new Product();

   if(isset($_POST['submit'])){

    $x->pro_name      = $_POST['pro_name'];
    $x->pro_desc      = $_POST['pro_desc'];
    $x->pro_price     = $_POST['pro_price'];
    $x->cat_id        = $_POST['cat_id'];
    $x->pro_qty       = $_POST['pro_qty'];
    $x->pro_image     = $_FILES['pro_image']['name'];
    $x->vendor_id     = $_POST['vendor_id'];
    $tmp_name         = $_FILES['pro_image']['tmp_name'];
    $path             ='assets/img/product/';
    move_uploaded_file($tmp_name,$path.$x->pro_image);
    $q=$x->create();
    
    if($q){
        header("location:manage_products.php");
        
    }
}
 ?>
<?php include("includes/admin_header.php");?>



			<div id="page-wrapper">
				 <div class="header"> 
                        <h1 class="page-header">
                            Manage Products
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="index.php">Dashboard</a></li>
					  <li class="active">manage products</li>
					</ol> 
									
		</div>
          <div id="page-inner">

          		 <div class="row"> <!-- row start -->
			 <div class="col-lg-12">
			 <div class="card">
                        <div class="card-action">
                           <h1>Create Product</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="proname" type="text" class="validate"
                                         name="pro_name" required>
                                        <label for="proname">Product Name</label>
                                    </div>
                                </div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input  id="prodesc" type="text" class="validate"
                                         name="pro_desc" required>
    									<label for="prodesc">Product Description</label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="proprice" type="number" class="validate"
                                         name="pro_price" required>
    									<label for="proprice">Product Price</label>
    								</div>
    							</div>
    							
                                <div class="row"><label for="catid">Category</label>
                                    <div class="input-field col s12">

                                        <select name="cat_id" id="catid" class="form-control" required>
                                        <option >Please select</option>
                                            <?php
                                             if ($data=$x->readAllcategory()){       
                         
                                        foreach ($data as $key => $value) {
                                            
                                            
                                            $i=$value['cat_id'];
                                            echo "<option value=$i>";
                                            echo "{$value['cat_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                                        
                                    </div>
                                </div>
                                    <div class="row"><label for="vendorid">Vendor</label>
                                    <div class="input-field col s12">
                                        <select name="vendor_id" id="vendorid" class="form-control" required>
                                        <option selected disabled>Please select</option>
                                            <?php
                                             if ($data=$x->readAllapproved()){       
                         
                                        foreach ($data as $key => $value) {
                                           
                                            
                                            $i=$value['vendor_id'];
                                            echo "<option value=$i>";
                                            echo "{$value['vendor_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="pro_qty" type="text" class="validate"
                                         name="pro_qty" required>
                                        <label for="proqty">Product Quantity</label>
                                    </div>
                                </div> 
                                   <div class="row"> <label for="proimage">Product Image</label>
                                    <div class="input-field col s12">
                                        <input id="proimage" type="file" class="validate form-control " name="pro_image">
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
                            <h3>Products Table</h3> 
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th class='center'>ID</th>
                                            <th class='center'>Name</th>
                                        	<th class='center'>Description</th>
                                            <th class='center'>Price</th>   
                                            <th class='center'>Category</th>
                                            <th class='center'>Vendor</th>
                                            <th class='center'>Quantity</th>
                                            <th class='center'>Image</th>
                                        	<th class='center'>Edit</th>
                                        	<th class='center'>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
                                    	 if($data=$x->readAll()){

                                    	 	foreach ($data as $key => $value) {
                                    	 		
                                    	 		echo "<tr class='gradeA'>";
                                    	 		echo "<td class='center'>{$value['pro_id']}</td>";
                                    	 		echo "<td class='center'>{$value['pro_name']}</td>";
                                    	 		echo "<td class='center'>{$value['pro_desc']}</td>";
                                                echo "<td class='center'>{$value['pro_price']}</td>";
                                                echo "<td class='center'>{$value['cat_name']}</td>";
                                                echo "<td class='center'>{$value['vendor_name']}</td>";
                                                echo "<td class='center'>{$value['pro_qty']}</td>";
                                                echo "<td><img src='assets/img/product/{$value['pro_image']}' width='200' height='100'></td>";
                                               
                                    	 		

                                    	 		echo "<td class='center'><a href='edit_product.php?id={$value['pro_id']}&catid={$value['cat_id']}&vid={$value['vendor_id']}' class='btn btn-warning'>Edit</a></td>";
                                    	 		echo "<td class='center'><a href='delete_product.php?id={$value['pro_id']}' class='btn btn-danger'>Delete</a></td>";
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