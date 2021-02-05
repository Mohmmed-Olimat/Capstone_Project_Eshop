<?php 

require('DBconnection.php');

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

	public function NOOFORDERS($id){
		$query = "SELECT COUNT(products.vendor_id) AS NUM FROM order_details,products WHERE order_details.product_id=products.pro_id AND products.vendor_id=$id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function NOOFPRODUCTS($id){
		$query  = "SELECT COUNT(pro_id) AS NUM FROM products WHERE vendor_id=$id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	
	
}
