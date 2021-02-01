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
        <div class="header">Data Admin</div>
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
            <br>
        </form>
        <br>
            <body>
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">No Admin</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                </tr>
            <tbody>
        </thead>
            <?php
                include "../asset/koneksi.php";
                $no=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['cari'];
                    $query = mysqli_query($koneksi,"SELECT * FROM data_admin WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM data_admin");
                }
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