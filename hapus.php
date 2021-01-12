<?php
// include database connection file
include "koneksi.php";

// Get id from URL to delete that user
$kode = $_GET['kode_siswa'];

// Delete user row from table based on given id
$result = mysqli_query($konek, "DELETE FROM alumni WHERE kode_siswa=$kode");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>