<?php
    include "../asset/koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM nilai_10a WHERE nis='$id'");
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
        <div class="header"><b>Edit Nilai Siswa Kelas 10A</b></div>
        <div class="info">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <script src="../asset/js/jquery.js"></script>
        </head>
            <body>
               <form action="" method ="post">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nis" value="<?php echo $data ['nis']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $data ['nama']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">BAHASA INDONESIA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="b_indo" id="b_ind" value="<?php echo $data ['b_indo']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">BAHASA INGGRIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="b_ing" id="b_ing" value="<?php echo $data ['b_ing']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">MATEMATIKA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mtk" id="mtk" value="<?php echo $data ['mtk']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">FISIKA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fisika" id="fisika" value="<?php echo $data ['fisika']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">KIMIA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kimia" id="kimia" value="<?php echo $data ['kimia']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">BIOLOGI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="biologi" id="biologi" value="<?php echo $data ['biologi']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">AGAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="agama" id="agama" value="<?php echo $data ['agama']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">OLAHRAGA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="olga" id="olga" value="<?php echo $data ['olga']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">TOTAL NILAI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="total" id="total" value="<?php echo $data ['total']?>" Readonly value="0">
                        </div>
                    </div>        
                    <button type="submit" class="btn btn-primary mb-2" name="proses">Submit</button>
                    
                        <script type="text/javascript">
                            $("#b_ind").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });
                            
                            $("#b_ing").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });

                            $("#mtk").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });
                            
                            $("#fisika").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });

                            $("#kimia").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });

                            $("#biologi").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });

                            $("#agama").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });

                            $("#olga").keyup(function(){   
                            var a = parseFloat($("#b_ind").val());
                            var b = parseFloat($("#b_ing").val());
                            var c = parseFloat($("#mtk").val());
                            var d = parseFloat($("#fisika").val());
                            var e = parseFloat($("#kimia").val());
                            var f = parseFloat($("#biologi").val());
                            var g = parseFloat($("#agama").val());
                            var h = parseFloat($("#olga").val());
                            var i = (a+b+c+d+e+f+g+h)/8;
                            $("#total").val(i);
                            });
                        </script>
                    
                    <?php
                        include "../asset/koneksi.php";  
                        if(isset($_POST['proses']))
                        {
                            $nis= $_POST['nis'];
                            $nama= $_POST['nama'];
                            $b_indo= $_POST['b_indo'];
                            $b_ing= $_POST['b_ing'];
                            $mtk= $_POST['mtk'];
                            $fisika= $_POST['fisika'];
                            $kimia= $_POST['kimia'];
                            $biologi= $_POST['biologi'];
                            $agama= $_POST['agama'];
                            $olga= $_POST['olga'];
                            $total= $_POST['total'];
                            $tambah= mysqli_query($koneksi,"UPDATE  nilai_10a SET nama='$nama',b_indo='$b_indo',b_ing='$b_ing',mtk='$mtk',fisika='$fisika',kimia='$kimia',biologi='$biologi',agama='$agama',olga='$olga',total='$total' WHERE nis='$id'");
                            if($tambah){
                                ?>
                                <script type="text/javascript">
                                    alert('edit data berhasil');
                                </script>
                                <?php
                            }else {
                                echo "gAGAL";
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