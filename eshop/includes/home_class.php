<?php 

require('DBconnection.php');

class Product extends dbconnection{

	public $pro_id;
	public $pro_name;
	public $pro_desc;
	public $pro_price;
	public $pro_image;
	public $cat_id;
	public $pro_qty;
	public $vendor_id;
	

	public function create(){
		$query = "INSERT INTO products(pro_name,pro_desc,pro_price,pro_image,cat_id,pro_qty,vendor_id)
				       VALUES('$this->pro_name','$this->pro_desc','$this->pro_price',
				              '$this->pro_image','$this->cat_id','$this->pro_qty','$this->vendor_id')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM products,category,vendor WHERE products.cat_id=category.cat_id AND products.vendor_id=vendor.vendor_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readAllcategory(){
		$query  = "SELECT * FROM category";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readAllvendors(){
		$query  = "SELECT * FROM vendor";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readAllapproved(){
		$query  = "SELECT * FROM admin_approval,vendor WHERE admin_approval.approval=1 AND admin_approval.vendor_id=vendor.vendor_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	
	public function readById($id){
		$query  = "SELECT * FROM products WHERE pro_id  = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

		public function readByvendorId($id){
		$query  = "SELECT * FROM products WHERE vendor_id  = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

	public function update($id){
		$query  = "UPDATE products SET   pro_name      = '$this->pro_name',
								         pro_desc      = '$this->pro_desc',
								         pro_price     = '$this->pro_price',
								         pro_image	   = '$this->pro_image',
								         cat_id        = '$this->cat_id',
								         pro_qty       = '$this->pro_qty',
								         vendor_id     = '$this->vendor_id'
								   WHERE pro_id        = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM products WHERE pro_id    = $id";
		$this->performQuery($query);
	}

	public function readBycatId($id){
		$query  = "SELECT * FROM products WHERE cat_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

	
}
	

class Category extends dbconnection{

	public $cat_id;
	public $cat_name;
	public $cat_desc;
	public $cat_image;
	



	public function create(){
		$query = "INSERT INTO category(cat_name,cat_desc,cat_image)
				 VALUES('$this->cat_name','$this->cat_desc','$this->cat_image')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM category";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM category WHERE     cat_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE category SET    cat_name     = '$this->cat_name',
								         cat_desc     = '$this->cat_desc',
								         cat_image    = '$this->cat_image'
								   WHERE cat_id       = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM category WHERE cat_id = $id";
		$this->performQuery($query);
	}




	
}


class Vendor extends dbconnection{

	public $vendor_id;
	public $vendor_name;
	public $vendor_email;
	public $vendor_password;
	public $vendor_mobile;
	public $brand_name;
	public $brand_img;
	public $brand_desc;
	

	public function create(){
		$query = "INSERT INTO vendor(vendor_name,vendor_email,vendor_password,
		                             vendor_mobile,brand_name,brand_img,brand_desc)
				       VALUES('$this->vendor_name','$this->vendor_email','$this->vendor_password',
				              '$this->vendor_mobile','$this->brand_name','$this->brand_img','$this->brand_desc')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM vendor";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readAllapproved(){
		$query  = "SELECT * FROM admin_approval,vendor WHERE admin_approval.approval=1 AND admin_approval.vendor_id=vendor.vendor_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readById($id){
		$query  = "SELECT * FROM vendor WHERE vendor_id  = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}												
	public function update($id){
		$query  = "UPDATE vendor SET     vendor_name      = '$this->vendor_name',
								         vendor_email     = '$this->vendor_email',
								         vendor_password  = '$this->vendor_password',
								         vendor_mobile	  = '$this->vendor_mobile',
								         brand_name       = '$this->brand_name',
								         brand_img        = '$this->brand_img',
								         brand_desc       = '$this->brand_desc'
								   WHERE vendor_id        = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM vendor WHERE vendor_id      = $id";
		$this->performQuery($query);
	}

	public function login($email,$pass){
		$query  = "SELECT * FROM vendor 
		           WHERE vendor_email         = '$email' AND
					     vendor_password 	  = '$pass' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function getid($brand_name){
		$query  = "SELECT vendor_id FROM vendor WHERE brand_name='$brand_name'";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function approved($id){
		$query = "INSERT INTO admin_approval(vendor_id,approval)
				 VALUES($id,1)";
		return $this->performQuery($query);
	}

	public function checkapproved($id){
		$query = "SELECT approval FROM admin_approval WHERE vendor_id=$id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	
}


class orders extends dbconnection{

	public $order_id;
	public $order_date;
	public $cust_id;

	public $order_details_id;
	public $product_id;
	public $product_qty;
	
	public function create(){
		$query = "INSERT INTO orders(order_date,cust_id)
				 VALUES('$this->order_date','$this->cust_id')";
		 return $this->performQuery($query);
		
	}
	public function creatorders_details(){
		$query = "INSERT INTO order_details(order_id,product_id,product_qty)
				 VALUES('$this->order_id','$this->product_id','$this->product_qty')";
		return $this->performQuery($query);
	}



	public function readAll(){
		$query  = "SELECT * FROM orders ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM orders WHERE     order_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		
	}
	public function delete($id){
		$query = "DELETE FROM orders WHERE order_id = $id";
		$this->performQuery($query);
	}




	
}