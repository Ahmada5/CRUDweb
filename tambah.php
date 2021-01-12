<html>
<head>
 <title></title>
</head>
<body>
 <center><h2>Alumni SMA Sukuran</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
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

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $kode_siswa = $_POST['kode_siswa'];
        $no_telp = $_POST['no_telp'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
        $ijazah = $_POST['ijazah'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
        $tambah_data = "insert into barang values($nama','$kode_siswa','$no_telp','$angkatan','$alamat','$ijazah')";
        $kerjakan=mysqli_query($konek, $tambah_data);
        if($kerjakan){
            // Show message when user added
            echo "Barang berhasil ditambahkan. <a href='index.php'>Lihat Data Barang</a>";
        }else{
        echo "Gagal bro";}
    }
    ?>
</body>
</html>