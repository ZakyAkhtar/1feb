<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>Data Pasien Rumah Sakit Sehat Waras Sayung</h1>
<h4> <a href=index.php>Ke Halaman Utama</a></h4>
<table border="1">
    <tr>
        <th>id_guru</th>
        <th>nama_guru</th>
        <th>alamat</th>
        <th>jenis_kelamin</th>
        <th>kode_mapel</th>
        <th>nama_mapel</th>
        <th>ruangan</th>
    </tr>

<?php 
    include("koneksi.php");
    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru INNER JOIN
    tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel");
    


    while($data=mysqli_fetch_array($query)){
    echo "<tr>";
                echo "<td>".$data['id_guru']. "</td>";
                echo "<td>".$data['nama_guru']. "</td>";
                echo "<td>".$data['alamat']. "</td>";
                echo "<td>".$data['jenis_kelamin']. "</td>";
                echo "<td>".$data['kode_mapel']. "</td>";
                echo "<td>".$data['nama_mapel']. "</td>";
                echo "<td>".$data['ruangan']. "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$data['id_guru']."'>Edit</a> |";
                echo "<a href='hapus.php?id=".$data['id_guru']."'>Hapus</a> ";
                echo "</td>";
    echo "</tr>";
    }
    ?>
</table>
</body>
</html>