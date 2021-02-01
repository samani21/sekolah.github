<?php
@session_start();
    include "../asset/koneksi.php";
    if(@$_SESSION['siswa']){
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
            <div class="text">SISWA 10A</div>
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

    <?php
                if(@$_SESSION['siswa']){
                    $user = @$_SESSION['siswa'];
                }else if(@$_SESSION['guru'])
                $user = @$_SESSION['guru'];
            }
            
            $ambilData = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE nis ='$user'");
            $data = mysqli_fetch_array($ambilData);
                ?>
        
        <div class="header">Edit Data Siswa</div>
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
                            <input type="text" class="form-control" name="kelas" value="10A" readonly>
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
                        <label for="colFormLabel" class="col-sm-2 col-form-label">AGAMA</label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="inputGroupSelect03" aria-label="Example select with button addon" name="agama" value="<?php echo $data ['agama']?>">
                                <option selected><?php echo $data ['agama']?></option> 
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Kristen">Kristen</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputGroupSelect03" aria-label="Example select with button addon" name="jenis" value="<?php echo $data ['jenis']?>">
                                <option selected><?php echo $data ['jenis']?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
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
                         $agama= $_POST['agama'];
                         $jenis= $_POST['jenis'];
                         $alamat= $_POST['alamat'];
                         $tlp= $_POST['tlp'];
                         $tambah= mysqli_query($koneksi,"UPDATE  data_siswa SET nama='$nama',kelas='$kelas',tempat='$tempat',tanggal='$tanggal',alamat='$alamat',tlp='$tlp',agama='$agama',jenis='$jenis' WHERE nis='$nis'");
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