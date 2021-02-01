<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Side</title>
        <link rel="stylesheet" href="../asset/style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
    <div class="wrapper">
    <nav class="sidebar">
            <div class="text">SISWA 12B</div>
            <ul>
                <li><a href="data_admin.php"><i class="fas fa-address-card"></i> Data Admin</a></li>
                <li><a href="data_guru.php"><i class="fas fa-address-card "></i> Data Guru</a></li>
                <li><a href="kelas.php"><i class="fas fa-address-card "></i> Data Kelas</a></li>
                <li><a href="nilai.php"><i class="fas fa-address-card "></i> Data Nilai</a></li>
                <li><a href="profil.php"><i class="fas fa-user"></i> profil</a></li>
                <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
        
        <div class="main_content">
        <div class="header">Laporan Nilai Siswa Kelas 12B</div>
        <div class="info">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        </head>
        <form action="" method="post" class="form-inline">
            <button type="submit" class="btn btn-primary mb-2" name="submit"><i class="fas fa-search"></i></button>
            <div class="col-sm-11">
                <input type="text" name="cari" palceholder="pencarian" autocomplete="off" class="col-sm-2 col-form-label">
            </div>
        </form>
        <br>
            <body>
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr  align="center"><th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bahasa Indonesia</th>
                    <th scope="col">Bahasa Inggris</th>
                    <th scope="col">Matematika</th>
                    <th scope="col">Ekonomi</th>
                    <th scope="col">Sosial</th>
                    <th scope="col">Geografi</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Olahraga</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Ranking</th>
                </tr>
            <tbody>
        </thead>
        <?php
                include "../asset/koneksi.php";
                $rangking=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['cari'];
                    $query = mysqli_query($koneksi,"SELECT * FROM nilai_12b WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM nilai_12b ORDER BY total DESC ");
                }
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
                    <td align="center" width="100"><?php echo $data['agama'];?></td>
                    <td align="center" width="100"><?php echo $data['olga'];?></td>
                    <td align="center" width="100"><?php echo $data['total'];?></td>
                    <td align="center" width="80"><?php echo $rangking++;?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
                </table>
            </body>
        </div>
    </div>
    </div>

        <script>
            $('.feat-btn').click(function(){
                $('nav ul .feat-show').toggleClass("show");
                $('nav ul .first').toggleClass("rotate");
            });
            $('.serv-btn').click(function(){
                $('nav ul .serv-show').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate");
            });
            $('nav ul li').click(function(){
                $(this).addClass("active").siblings().removeClass("active");
            })
        </script>
    </body>
</html>