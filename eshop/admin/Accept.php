 <?php
    
   include('includes/adminClass.php');
   $x = new Admin();
   $id =$_GET['id'];

   $q=$x->giveapprov($id);
   if($q){
	header("location:Approval.php");
    }
   ?>