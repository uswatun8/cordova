<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['no'];
 $title=$_POST['tipe'];
 $duration=$_POST['tahun'];
 $price=$_POST['sewa'];
 $q=mysqli_query($con,"UPDATE `mobil` SET `tipe`='$tipe',`tahun`='$tahun',`sewa`='$sewa' where `no`='$no'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>