<?php
    include "../asset/koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM data_siswa_10b WHERE nis='$id'");
    $data = mysqli_fetch_array($ambilData)

?>  

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
            <div class="text">GURU</div>
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
        <div class="header">Tambah Data Siswa Kelas 10B</div>
        <div class="info">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        </head>
            <body>
               <form action="" method ="post">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nis" value="<?php echo $data ['nis']?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $data ['nama']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">KELAS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kelas" value="<?php echo $data ['kelas']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat" value="<?php echo $data ['tempat']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal" value="<?php echo $data ['tanggal']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $data ['alamat']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">NO TELP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tlp" value="<?php echo $data ['tlp']?>">
                        </div>
                    <button type="submit" class="btn btn-primary mb-2" name="proses">Submit</button>
                    <?php 
                    if(isset($_POST['proses']))
                    {
                        $nis= $_POST['nis'];
                        $nama= $_POST['nama'];
                        $kelas= $_POST['kelas'];
                        $tempat= $_POST['tempat'];
                        $tanggal= $_POST['tanggal'];
                        $alamat= $_POST['alamat'];
                        $tlp= $_POST['tlp'];
                        $tambah= mysqli_query($koneksi,"UPDATE  data_siswa_10b SET nama='$nama',kelas='$kelas',tempat='$tempat',tanggal='$tanggal',alamat='$alamat',tlp='$tlp' WHERE nis='$id'");
                        if($tambah){
                            ?>
                            <script type="text/javascript">
                                alert('edit data berhasil');
                            </script>
                            <?php
                        }else {
                            echo "GAGAL";
                        }

                    }
                    ?>
                </form>
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