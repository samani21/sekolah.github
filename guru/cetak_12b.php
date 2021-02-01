<?php

//Jika download plugin mpdf dengan composer (versi baru)
include '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
//Menggabungkan dengan file koneksi yang telah kita buat
include '../asset/koneksi.php';
 
$nama_dokumen='DATA SISWA KELAS 12B';
ob_start();
?>
 
<!DOCTYPE html>
<html>
<body>
	<div>
		<h2 align="center">DATA SISWA KELAS 12B</h2>
        <hr>
 
		<table border="1">
	    	<thead>
            <tr>
    <th width="10px">No</th>
    <th width="10px">NIS</th>
    <th width="100px">Nama</th>
    <th width="20px">Kelas</th>
    <th width="100px">Tempat</th>
    <th>Tanggal</th>
    <th>Agama</th>
    <th>Jenis Kelamin</th>
    <th width="200px">Alamat</th>
    <th width="100px">Telepon</th>
</tr>
<?php
include "../asset/koneksi.php";
$no=1;
$data= mysqli_query($koneksi,"SELECT * FROM data_siswa_12b");
while($dt=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $dt['nis'];?></td>>
        <td><?php echo $dt['nama'];?></td>
        <td align="center"><?php echo $dt['kelas'];?></td>
        <td><?php echo $dt['tempat'];?></td>
        <td><?php echo $dt['tanggal'];?></td>
        <td><?php echo $dt['agama'];?></td>
        <td><?php echo $dt['jenis'];?></td>
        <td><?php echo $dt['alamat'];?></td>
        <td><?php echo $dt['tlp'];?></td>
    </tr>
<?php
}

?>
	    	</tbody>
	    </table>
 
    </div>
 
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'I');
$db1->close();
?>