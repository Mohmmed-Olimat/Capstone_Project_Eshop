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

	
}
