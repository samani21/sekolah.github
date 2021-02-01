<?php

//Jika download plugin mpdf dengan composer (versi baru)
include '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
//Menggabungkan dengan file koneksi yang telah kita buat
include '../asset/koneksi.php';
 
$nama_dokumen='laporan Nilai Siswa 11B';
ob_start();
?>
 
<!DOCTYPE html>
<html>
<body>
	<div>
		<h2 align="center">laporan Nilai Siswa 11B</h2>
        <hr>
 
		<table border="1">
	    	<thead>
            <tr>
                    <th >NIS</th>
                    <th>Nama</th>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Inggris</th>
                    <th>Matematika</th>
                    <th>Fisika</th>
                    <th>Kimia</th>
                    <th>Biologi</th>
                    <th>Agama</th>
                    <th>Olaharaga</th>
                    <th>Rata-Rata</th>
                    <th>Ranking</th>
</tr>
<?php
                $rangking=1;
                    $query= mysqli_query($koneksi,"SELECT * FROM nilai_11b ORDER BY total DESC ");
                while ($data = mysqli_fetch_array($query)){
            ?>
                <tr >
                    <td width="100"><?php echo $data['nis'];?></td>
                    <td width="160"><?php echo $data['nama'];?></td>
                    <td align="center" width="80"><?php echo $data['b_indo'];?></td>
                    <td align="center" width="80"><?php echo $data['b_ing'];?></td>
                    <td align="center" width="100"><?php echo $data['mtk'];?></td>
                    <td align="center" width="100"><?php echo $data['ekonomi'];?></td>
                    <td align="center" width="100"><?php echo $data['sosial'];?></td>
                    <td align="center" width="100"><?php echo $data['geografi'];?></td>
                    <td align="center" width="80"><?php echo $data['agama'];?></td>
                    <td align="center" width="80"><?php echo $data['olga'];?></td>
                    <td align="center" width="100"><?php echo $data['total'];?></td>
                    <td align="center" width="80"><?php echo $rangking++;?></td>
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