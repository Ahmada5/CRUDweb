<?php 

$konek = mysqli_connect("localhost","root","");


$database = mysqli_select_db($konek, "school");
//if($database){echo "Database Terhubung";}
//else{echo "Database Tidak Tehubung.";}

?>