 <?php
   include('includes/productsClass.php');
   $x     = new Product();
   $id    =$_GET['id'];
   $catid =$_GET['catid'];
   $vid   =$_GET['vid'];
   $data=$x->readById($id);
   $productSet=$data[0];

    if(isset($_POST['submit'])){
      
    $x->pro_name      = $_POST['pro_name'];
    $x->pro_desc      = $_POST['pro_desc'];
    $x->pro_price     = $_POST['pro_price'];
    $x->cat_id        = $_POST['cat_id'];
    $x->pro_qty       = $_POST['pro_qty'];
    $x->vendor_id     = $_POST['vendor_id'];

    if ($_FILES['pro_image']['name']){
        $x->pro_image      = $_FILES['pro_image']['name'];
        }
        else{
        $x->pro_image     = $productSet['pro_image'];}
        $tmp_name          =$_FILES['pro_image']['tmp_name'];
        $path              ='assets/img/product/';

        move_uploaded_file($tmp_name,$path.$x->pro_image);
    
    $q=$x->update($id);
    
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
                           <h1>Edit Product</h1> 
                        </div>
                        <div class="card-content">
    						<form class="col s12" method="post" action="" enctype="multipart/form-data">
                                <div class="row"><label for="proname">Product Name</label>
                                    <div class="input-field col s12">
                                        <input id="proname" type="text" class="validate"
                                         name="pro_name" value="<?php echo $productSet['pro_name']; ?>">
                                        
                                    </div>
                                </div>
    							<div class="row"><label for="prodesc">Product Description</label>
    								<div class="input-field col s12">
    									<input  id="prodesc" type="text" class="validate"
                                         name="pro_desc" value="<?php echo $productSet['pro_desc']; ?>">
    									
    								</div>

    							</div>

    							<div class="row"><label for="proprice">Product Price</label>
    								<div class="input-field col s12">
    									<input id="proprice" type="number" class="validate"
                                         name="pro_price" value="<?php echo $productSet['pro_price']; ?>">
    									
    								</div>
    							</div>
    							
                                <div class="row"><label for="catid">Category ID</label>
                                    <div class="input-field col s12">

                                        <select name="cat_id" id="select1" class="form-control">
                                        <option value="0">Please select</option>
                                            <?php
                                             if ($data=$x->readAllcategory()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['cat_id'];
                                            echo "<option value=$i";
                                            if($catid==$row['cat_id']){echo " selected";}
                                            echo ">";
                                            echo "{$row['cat_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                                        
                                    </div>
                                </div>
                                    <div class="row"><label for="vendorid">Vendor ID</label>
                                    <div class="input-field col s12">
                                        <select name="vendor_id" id="select2" class="form-control">
                                        <option value="0">Please select</option>
                                            <?php
                                             if ($data=$x->readAllvendors()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['vendor_id'];
                                            echo "<option value=$i";
                                            if($vid==$row['vendor_id']){echo " selected";}
                                            echo ">";
                                            echo "{$row['vendor_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                                        
                                    </div>
                                </div>
                                <div class="row"><label for="proqty">Product Quantity</label>
                                    <div class="input-field col s12">
                                        <input id="pro_qty" type="text" class="validate"
                                         name="pro_qty" value="<?php echo $productSet['pro_qty']; ?>">
                                        
                                    </div>
                                </div> 
                                   <div class="row"> <label for="proimage">Product Image</label>
                                    <div class="input-field col s12">
                                        <input id="proimage" type="file" class="validate form-control " name="pro_image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <?php
                             echo "<img src='assets/img/product/{$productSet['pro_image']}' width='300' height='150'>";
                             ?>
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