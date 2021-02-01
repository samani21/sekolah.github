<?php

//Jika download plugin mpdf dengan composer (versi baru)
include '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
//Menggabungkan dengan file koneksi yang telah kita buat
include '../asset/koneksi.php';
 
$nama_dokumen='Laporan admin';
ob_start();
?>
 
<!DOCTYPE html>
<html>
<body>
	<div>
		<h2 align="center">Laporan Data Admin</h2>
        <hr>
 
		<table border="1">
	    	<thead>
	    		<tr>
                <th width="10px">No</th>
                    <th width="10px">No Admin</th>
                    <th width="100px">Nama</th>
                    <th width="100px">Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th width="200px">Alamat</th>
                    <th width="80px">No Telepon</th>
	    		</tr>
	    	</thead>
	    	<tbody>
            <?php
                $no=1;
			        $query= mysqli_query($koneksi,"SELECT * FROM data_admin");
                while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                <td><?php echo $no++;?></td>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['tempat'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['agama'];?></td>
                    <td><?php echo $data['jenis'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['tlp'];?></td>
                    </td>
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