<?php 

require('DBconnection.php');

class Customer extends dbconnection{

	public $cust_id;
	public $cust_name;
	public $cust_email;
	public $cust_password;
	public $cust_mobile;
	public $cust_address;
	

	



	public function create(){
		$query = "INSERT INTO customer(cust_name,cust_email,cust_password,cust_mobile,cust_address)
				 VALUES('$this->cust_name','$this->cust_email','$this->cust_password',
				        '$this->cust_mobile','$this->cust_address')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM customer";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM customer WHERE cust_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE customer SET    cust_name      = '$this->cust_name',
								         cust_email     = '$this->cust_email',
								         cust_password  = '$this->cust_password',
								         cust_mobile	= '$this->cust_mobile',
								         cust_address   = '$this->cust_address'
								   WHERE cust_id        = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM customer WHERE cust_id    = $id";
		$this->performQuery($query);
	}
	public function login($email,$pass){
		$query  = "SELECT * FROM customer 
		           WHERE cust_email      = '$email' AND
					     cust_password 	 = '$pass' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}



	
}
