 <?php
   include('includes/categoryClass.php');
   $x = new category();
   $id =$_GET['id'];
   $data=$x->readById($id);
   $categorySet=$data[0];

    if(isset($_POST['submit'])){
      
        
    
    $x->cat_name           = $_POST['cat_name'];
    $x->cat_desc           = $_POST['cat_desc'];

    if ($_FILES['cat_image']['name']){
        $x->cat_image      = $_FILES['cat_image']['name'];
        }
        else{
        $x->cat_image      = $categorySet['cat_image'];}
        $tmp_name          =$_FILES['cat_image']['tmp_name'];
        $path              ='assets/img/category/';

        move_uploaded_file($tmp_name,$path.$x->cat_image);
    
    $q=$x->update($id);
    
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
                           <h1>Edit Category</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
    							<div class="row">
    								<div class="input-field col s12">
    									<input id="cat_name" type="text" class="validate" name="cat_name" value="<?php echo $categorySet['cat_name']; ?>">
    									<label for="catname"></label>
    								</div>
    							</div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="catdesc" type="text" class="validate" name="cat_desc" value="<?php echo $categorySet['cat_desc']; ?>">
                                        <label for="catdesc"></label>
                                    </div>
                                </div>
                                  <div class="row"><label for="catimage">Category Image</label>
                                    <div class="input-field col s12">
                                        <input id="cat_image" type="file" class="validate" name="cat_image">
                                        
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="input-field col s12">
                                            <?php
                             echo "<img src='assets/img/category/{$categorySet['cat_image']}' width='300' height='150'>";
                             ?>
                                        <label for="catimage"></label>
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