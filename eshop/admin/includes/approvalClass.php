<?php 

require('vendorClass.php');

class Approval extends Vendor{

	public $approval_id;
	public $vendor_id;
	public $approval;


	public function create(){
		$query = "INSERT INTO admin_approval(vendor_id,approval)
				 VALUES('$this->vendor_id',0)";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin_approval";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin_approval WHERE vendor_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE admin_approval SET approval          = '$this->approval'
								   WHERE vendor_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin_approval WHERE vendor_id = $id";
		$this->performQuery($query);
	}
	public function getvendorid($brand_name){
		$query = "SELECT vendor_id FROM vendor WHERE brand_name='$brand_name'";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}


	
}

