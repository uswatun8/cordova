<?php
 include "db.php";
 if(isset($_GET['no']))
 {
 $id=$_GET['no'];
 $q=mysqli_query($con,"delete from `mobil` where `no`='$no'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>