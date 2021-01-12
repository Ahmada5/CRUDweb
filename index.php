<html>
<head>
  <title>alumniku</title>
  
</head>
<body>
  <center><h2>Alumni Sma Sukuran</center>
    <hr/>
    <center><b>Data alumni</b></center>
    <table align="center" border="1px" width="50%">
      <tr bgcolor="#3782C6">
        <th>No</th>
        <th>Nama siswa</th>
        <th>Kode siswa</th>
        <th>No telephone</th>
        <th>Angkatan</th>
        <th>Alamat</th>
        <th colspan=2><center>Opsi</center></th>
      </tr>
      
      <?php 
      include "koneksi.php";
      $no = 1;
      $data = mysqli_query($konek,"select * from alumni");
      while($r = mysqli_fetch_array($data)){
        $nama = $r['nama'];
        $kode_siswa = $r['kode_siswa'];
        $no_telp = $r['no_telp'];
        $angkatan = $r['angkatan'];
        $alamat = $r['alamat'];
      }?>
      <tr align="center">
        <td><?php echo $no++; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $kode_siswa; ?></td>
        <td><?php echo $no_telp; ?></td>
        <td><?php echo $angkatan; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><a href="edit.php?id=<?php echo $kode_siswa;?>">Edit</a></td>
        <td><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
      </tr>
      <tr>
        <th colspan="8">
          <a href="tambah.php">Tambah alumni</a><br/>
        </th>
      </tr>
    </table> 
</body>
</html>