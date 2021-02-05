 <?php
   include('includes/vendorClass.php');
   $x = new Vendor();
   $id =$_GET['id'];
   $data=$x->readById($id);
   $vendorSet=$data[0];

    if(isset($_POST['submit'])){
      
        
    
    $x->vendor_name      = $_POST['vendor_name'];
    $x->vendor_email     = $_POST['vendor_email'];
    $x->vendor_password  = $_POST['vendor_password'];
    $x->vendor_mobile    = $_POST['vendor_mobile'];
    $x->brand_name       = $_POST['brand_name'];
    $x->brand_desc       = $_POST['brand_desc'];

    if ($_FILES['brand_img']['name']){
        $x->brand_img      = $_FILES['brand_img']['name'];
        }
        else{
        $x->brand_img      = $vendorSet['brand_img'];}
        $tmp_name          =$_FILES['brand_img']['tmp_name'];
        $path              ='assets/img/brand/';

        move_uploaded_file($tmp_name,$path.$x->brand_img);
    
    $q=$x->update($id);
    
    if($q){
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
                           <h1>Edit Vendor</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="vendorname " type="text" class="validate"
                                         name="vendor_name" value="<?php echo $vendorSet['vendor_name']; ?>">
                                        <label for="FullName"></label>
                                    </div>
                                </div>
    							<div class="row">
    								<div class="input-field col s12">
    									<input  id="vendoremail" type="email" class="validate"
                                         name="vendor_email" value="<?php echo $vendorSet['vendor_email']; ?>">
    									<label for="email"></label>
    								</div>

    							</div>

    							<div class="row">
    								<div class="input-field col s12">
    									<input id="vendorpassword" type="password" class="validate"
                                         name="vendor_password" value="<?php echo $vendorSet['vendor_password']; ?>">
    									<label for="vendorpassword"></label>
    								</div>
    							</div>
    							
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="vendormobile" type="text" class="validate"
                                         name="vendor_mobile" value="<?php echo $vendorSet['vendor_mobile']; ?>">
                                        <label for="custmobile"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="brandname" type="text" class="validate"
                                         name="brand_name" value="<?php echo $vendorSet['brand_name']; ?>">
                                        <label for="custaddress"></label>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="branddesc" type="text" class="validate"
                                         name="brand_desc" value="<?php echo $vendorSet['brand_desc']; ?>">
                                        <label for="branddesc"></label>
                                    </div>
                                </div>
                                   <div class="row"> <label for="brandimg">Brand Image/Logo</label>
                                    <div class="input-field col s12">
                                        <input id="brandimg" type="file" class="validate form-control " name="brand_img">
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                            <?php
                             echo "<img src='assets/img/brand/{$vendorSet['brand_img']}' width='300' height='150'>";
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