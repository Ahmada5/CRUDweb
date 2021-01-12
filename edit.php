<?php
include "koneksi.php";
if(isset($_POST['update'])){   
    $nama = $_POST['nama'];
    $kode_siswa = $_POST['kode_siswa'];
    $no_telp = $_POST['no_telp'];
    $angkatan = $_POST['angkatan'];
    $alamat = $_POST['alamat'];
    $ijazah = $_POST['ijazah'];
    // update user data
    $result = mysqli_query($konek, "UPDATE alumni SET nama='$nama',kode_siswa='$kode_siswa',no_telp='$no_telp',angkatan='$angkatan',alamat='$alamat', ijazah='$ijazah' WHERE kode_siswa=$kode_siswa");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");}
?>

<?php
$kode = $_GET['kode_siswa'];
$result = mysqli_query($konek, "SELECT * FROM alumni WHERE kode_siswa=$kode");
while($r = mysqli_fetch_array($result)){
    $nama = $r['nama'];
    $no_telp = $r['no_telp'];
    $angkatan = $r['angkatan'];
    $alamat = $r['alamat'];
    $ijazah = $r['ijazah'];}
?>


<html>
<head>
 <title></title>
</head>
<body>
 <center><h2>Alumni SMA Sukuran</h2></center>
 <hr />
 <b>Edit Data Barang</b>
    <br/><br/>
   <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>Nama siswa</td>
                <td><input type="text" name="nama" size="50" required></td>
            </tr>
            <tr> 
                <td>Kode siswa</td>
                <td><input type="text" name="kode_siswa" size="50" required></td>
            </tr>
            <tr> 
                <td>No telp</td>
                <td><input type="text" name="no_telp" size="50" required></td>
            </tr>
            <tr> 
                <td>Angkatan</td>
                <td><input type="text" name="angkatan" size="50" required></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="50" required></td>
            </tr>
            <tr> 
                <td>Ijazah</td>
                <td><input type="file" name="ijazah" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>
</body>
</html>