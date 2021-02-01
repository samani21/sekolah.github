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
            <div class="text">ADMIN</div>
            <ul>
                <li><a href="data_admin.php"><i class="fas fa-address-card"></i> Data Admin</a></li>
                <li><a href="data_guru.php"><i class="fas fa-address-card "></i> Data Guru</a></li>
                <li>
                    <a class="nil-btn"><i class="fas fa-plus-circle"></i> Tambah nilai
                    <span class="fas fa-caret-down tam"></span>
                    </a>
                    <ul class="nil-show">
                        <li><a href="tambah_nilai.php"><i class="fas fa-address-card "></i> Kelas 10A</a></li>
                        <li><a href="tambah_nilai_10b.php"><i class="fas fa-address-card "></i> Kelas 10B</a></li>
                        <li><a href="tambah_nilai_11a.php"><i class="fas fa-address-card "></i> Kelas 11A</a></li>
                        <li><a href="tambah_nilai_11b.php"><i class="fas fa-address-card "></i> Kelas 11B</a></li>
                        <li><a href="tambah_nilai_12a.php"><i class="fas fa-address-card "></i> Kelas 12A</a></li>
                        <li><a href="tambah_nilai_12b.php"><i class="fas fa-address-card "></i> Kelas 12B</a></li>
                    </ul>
                </li>
                <li>
                    <a class="feat-btn"><i class="fas fa-address-card "></i> Data Kelas
                        <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="feat-show">
                        <li><a href="kelas_10a.php"><i class="fas fa-address-card "></i> Kelas 10A</a></li>
                        <li><a href="kelas_10b.php"><i class="fas fa-address-card "></i> Kelas 10B</a></li>
                        <li><a href="kelas_11a.php"><i class="fas fa-address-card "></i> Kelas 11A</a></li>
                        <li><a href="kelas_11b.php"><i class="fas fa-address-card "></i> Kelas 11B</a></li>
                        <li><a href="kelas_12a.php"><i class="fas fa-address-card "></i> Kelas 12A</a></li>
                        <li><a href="kelas_12b.php"><i class="fas fa-address-card "></i> Kelas 12B</a></li>
                    </ul>
                </li>
                <li>
                    <a class="serv-btn"><i class="fas fa-book"></i> Data Nilai
                    <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="serv-show">
                        <li><a href="nilai_10a.php"><i class="fas fa-book"></i> Nilai Kelas 10A</a></li>
                        <li><a href="nilai_10b.php"><i class="fas fa-book"></i> Nilai Kelas 10B</a></li>
                        <li><a href="nilai_11a.php"><i class="fas fa-book"></i> Nilai Kelas 11A</a></li>
                        <li><a href="nilai_11b.php"><i class="fas fa-book"></i> Nilai Kelas 11B</a></li>
                        <li><a href="nilai_12a.php"><i class="fas fa-book"></i> Nilai Kelas 12A</a></li>
                        <li><a href="nilai_12b.php"><i class="fas fa-book"></i> Nilai Kelas 12B</a></li>
                    </ul>
                </li>
                <li><a href="profil.php"><i class="fas fa-user"></i> profil</a></li>
                <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
        
        <div class="main_content">
        <div class="header">Laporan Data Siswa Kelas 12A</div>
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
            <a href="cetak_12a.php"><button type="button" class="btn btn-outline-success btn-lg btn-block">Cetak</button>
            <br>
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            <tbody>
        </thead>
            <?php
                include "../asset/koneksi.php";
                $no=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['cari'];
                    $query = mysqli_query($koneksi,"SELECT * FROM data_siswa_12a WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM data_siswa_12a");
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['nis'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['kelas'];?></td>
                    <td><?php echo $data['tempat'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['agama'];?></td>
                    <td><?php echo $data['jenis'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['tlp'];?></td>
                    <td align="center" width="80"><a href="edit-siswa_12a.php?id=<?php echo $data['nis']; ?> ">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <td align="center" width="80"><a href="hapus-siswa_12a.php?id=<?php echo $data['nis']; ?>">
                    <button type="button" class="btn btn-danger">Delet</button>
                    </td>
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
            $('.nil-btn').click(function(){
                $('nav ul .nil-show').toggleClass("show1");
                $('nav ul .tam').toggleClass("rotate");
            });

            $('.serv-btn').click(function(){
                $('nav ul .serv-show').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate");
            });
            $('nav ul li').click(function(){
                $(this).addClass("active").siblings().removeClass("active");
            });
        </script>
    </body>
</html>