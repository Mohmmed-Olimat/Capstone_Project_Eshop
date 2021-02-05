<?php 

require('DBconnection.php');

class Admin extends dbconnection{

	public $admin_id;
	public $admin_email;
	public $admin_password;
	public $full_name;
	



	public function create(){
		$query = "INSERT INTO admin(admin_email,admin_password,full_name)
				 VALUES('$this->admin_email','$this->admin_password','$this->full_name')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE admin SET admin_email          = '$this->admin_email',
								   admin_password 		= '$this->admin_password',
								   full_name            = '$this->full_name'
								   WHERE admin_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$this->performQuery($query);
	}
	public function login($email,$pass){
		$query  = "SELECT * FROM admin 
		           WHERE admin_email         = '$email' AND
					     admin_password 	 = '$pass' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function approv(){
		$query  = "SELECT admin_approval.approval_id,admin_approval.vendor_id,admin_approval.approval,vendor.brand_name FROM admin_approval,vendor WHERE admin_approval.approval=0 AND admin_approval.vendor_id=vendor.vendor_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function giveapprov($id){
		$query = "UPDATE admin_approval SET approval          =1
								   WHERE vendor_id   = $id";
		return $this->performQuery($query);
	}

		public function readAllvendors(){
		$query  = "SELECT * FROM admin_approval,vendor WHERE admin_approval.approval=0 AND admin_approval.vendor_id=vendor.vendor_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

		public function NOOFCUSTOMERS(){
		$query  = "SELECT COUNT(cust_id) AS NUM FROM customer";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

		public function NOOFVENDORS(){
		$query  = "SELECT COUNT(vendor_id) AS NUM FROM vendor";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

		public function NOOFORDERS(){
		$query  = "SELECT COUNT(order_id) AS NUM FROM orders";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);

	}	

	public function NOOFPRODUCTS(){
		$query  = "SELECT COUNT(pro_id) AS NUM FROM products";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	


	
}
