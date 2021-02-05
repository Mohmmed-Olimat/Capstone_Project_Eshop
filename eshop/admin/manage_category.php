 <?php
    
   include('includes/categoryClass.php');
   $x = new Category();

   if(isset($_POST['submit'])){

    $x->cat_name    = $_POST['cat_name'];
    $x->cat_desc    = $_POST['cat_desc'];
    $x->cat_image   = $_FILES['cat_image']['name'];
    $tmp_name       =$_FILES['cat_image']['tmp_name'];
    $path           ='assets/img/category/';

    move_uploaded_file($tmp_name,$path.$x->cat_image);

    $q=$x->create();
    
    if($q){
        header("location:manage_category.php");
        
    }
}
 ?>
<?php include("includes/admin_header.php");?>



			<div id="page-wrapper">
				 <div class="header"> 
                        <h1 class="page-header">
                            Manage Category
                        </h1>
						<ol class="breadcrumb">
					  
					  <li><a href="index.php">Dashboard</a></li>
					  <li class="active">manage category</li>
					</ol> 
									
		</div>
          <div id="page-inner">

          		 <div class="row"> <!-- row start -->
			 <div class="col-lg-12">
			 <div class="card">
                        <div class="card-action">
                           <h1>Create Category</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
    							<div class="row">
    								<div class="input-field col s12">
    									<input id="cat_name" type="text" class="validate" name="cat_name" required>
    									<label for="catname">Category Name</label>
    								</div>
    							</div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="catdesc" type="text" class="validate" name="cat_desc" required>
                                        <label for="catdesc">Category Description</label>
                                    </div>
                                </div>
                                  <div class="row"> <label for="catimage">Category Image</label>
                                    <div class="input-field col s12">
                                        <input id="cat_image" type="file" class="validate form-control " name="cat_image">
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
                            <h3>Categories Table</h3> 
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th class='center'>ID</th>
                                        	<th class='center'>Name</th>
                                            <th class='center'>Description</th>
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
                                    	 		echo "<td class='center'>{$value['cat_id']}</td>";
                                    	 		echo "<td class='center'>{$value['cat_name']}</td>";
                                                echo "<td class='center'>{$value['cat_desc']}</td>";
                                                 echo "<td><img src='assets/img/category/{$value['cat_image']}' width='150' height='50'></td>";
                                    	 		

                                    	 		echo "<td class='center'><a href='edit_category.php?id={$value['cat_id']}' class='btn btn-warning'>Edit</a></td>";
                                    	 		echo "<td class='center'><a href='delete_category.php?id={$value['cat_id']}' class='btn btn-danger'>Delete</a></td>";
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