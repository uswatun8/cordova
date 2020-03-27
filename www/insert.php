<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $tipe=$_POST['tipe'];
 $tahun=$_POST['tahun'];
 $sewa=$_POST['sewa'];
 $q=mysqli_query($con,"INSERT INTO `mobil` (`tipe`,`tahun`,`sewa`) VALUES ('$tipe','$tahun','$sewa')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>