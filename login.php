<?php
@session_start();
include "asset/koneksi.php";
if(@$_SESSION['admin']||@$_SESSION['guru']||@$_SESSION['siswa']){
    header("location:login.php");
}else{
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman login</title>
    <style type="text/css">

body{
    font-family: arial;
    font-size: 14px;
    background:url(asset/latar.jpg);
}    
#utama{
    width: 300px;
    margin: 0 auto;
    margin-top: 12%;

}

#judul{
    padding: 15px;
    text-align: center;
    color: #fff;
    font-size: 20px;
    background-color: #339966;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom: 3px solid #336666;
}
#inputan{
    background-color: #ccc;
    padding: 20px;
    border-bottom-right-radius:10px;
    border-bottom-left-radius: 10px;
}

input{
    padding:10px;
    border: 0;
}

.lg{
    width: 240px;
}

.btn{
    background-color: #339966;
    border-radius: 10px;
    color: #fff;
}
.btn:hover{
    background-color:#336666;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div id="utama">
        <div id="judul">
            Halaman Login
        </div>
        <div id="inputan">
            <form action="" method="post">
                <div>
                    <input type="text" name="user" placeholder="Username" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <input type="password" name="pass" placeholder="Password" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <input type="submit" name="login" value="login" class="btn" />
                    <input type="submit" name="daftar" value="Daftar" class="btn" />
                </div>
            </form>
            <?php
            $user = @$_POST['user'];
            $pass = @$_POST['pass'];
            $login = @$_POST['login'];
            $daftar = @$_POST['daftar'];

            if($daftar){
                header("location: daftar.php");

            }

            if($login){
                if($user == "" || $pass == ""){
                echo"Usernaem/Password kosong";
                    ?><script type="text/javascript">alert("Username / Password tidak boleh kosong");</script><?php
                }else {
                    $qry = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE username='$user' AND password = ('$pass')");
                    $data = mysqli_fetch_array($qry);
                    $cek = mysqli_num_rows($qry);

                    $qry10b = mysqli_query($koneksi,"SELECT * FROM tb_login_10b WHERE username='$user' AND password = ('$pass')");
                    $data10b = mysqli_fetch_array($qry10b);
                    $cek10b = mysqli_num_rows($qry10b);

                    $qry11a = mysqli_query($koneksi,"SELECT * FROM tb_login_11a WHERE username='$user' AND password = ('$pass')");
                    $data11a = mysqli_fetch_array($qry11a);
                    $cek11a = mysqli_num_rows($qry11a);

                    $qry11b = mysqli_query($koneksi,"SELECT * FROM tb_login_11b WHERE username='$user' AND password = ('$pass')");
                    $data11b = mysqli_fetch_array($qry11b);
                    $cek11b = mysqli_num_rows($qry11b);

                    $qry12a = mysqli_query($koneksi,"SELECT * FROM tb_login_12a WHERE username='$user' AND password = ('$pass')");
                    $data12a = mysqli_fetch_array($qry12a);
                    $cek12a = mysqli_num_rows($qry12a);

                    $qry12b = mysqli_query($koneksi,"SELECT * FROM tb_login_12b WHERE username='$user' AND password = ('$pass')");
                    $data12b = mysqli_fetch_array($qry12b);
                    $cek12b = mysqli_num_rows($qry12b);

                    $qryg = mysqli_query($koneksi,"SELECT * FROM tb_loging WHERE username='$user' AND password = ('$pass')");
                    $datag = mysqli_fetch_array($qryg);
                    $cekg = mysqli_num_rows($qryg);

                    $qry3 = mysqli_query($koneksi,"SELECT * FROM tb_login3 WHERE username='$user' AND password = ('$pass')");
                    $data3 = mysqli_fetch_array($qry3);
                    $cek3 = mysqli_num_rows($qry3);
        
                    if($cek >= 1){
                        if($data['level'] == "siswa"){
                            @$_SESSION['siswa'] =$data['kode_user'];
                            header("location:siswa/profil1.php");
                        }
                    }

                    if($cek10b >= 1){
                        if($data10b['level'] == "siswa 10B"){
                            @$_SESSION['siswa 10B'] =$data10b['kode_user'];
                            header("location:siswa_10b/profil1.php");
                        }
                    }
                
                    if($cek11a >= 1){
                        if($data11a['level'] == "siswa 11A"){
                            @$_SESSION['siswa 11A'] =$data11a['kode_user'];
                            header("location:siswa_11a/profil1.php");
                        }
                    }
                    
                    if($cek11b >= 1){
                        if($data11b['level'] == "siswa 11B"){
                            @$_SESSION['siswa 11B'] =$data11b['kode_user'];
                            header("location:siswa_11b/profil1.php");
                        }
                    }

                    if($cek12a >= 1){
                        if($data12a['level'] == "siswa 12A"){
                            @$_SESSION['siswa 12A'] =$data11a['kode_user'];
                            header("location:siswa_12a/profil1.php");
                        }
                    }
                    
                    if($cek12b >= 1){
                        if($data12b['level'] == "siswa 12B"){
                            @$_SESSION['siswa 12B'] =$data12b['kode_user'];
                            header("location:siswa_12b/profil1.php");
                        }
                    }

                    if($cekg >= 1){
                        if($datag['level'] == "guru"){
                            @$_SESSION['guru'] =$datag['kode_user'];
                            header("location:guru/profil1.php");
                        }
                    }

                    if($cek3 >= 1){
                        if($data3['level'] == "admin"){
                            @$_SESSION['admin'] =$data3['kode_user'];
                            header("location:admin/profil1.php");
                        }                
                }else {
                    ?>
                        <script type="text/javascript">
                            alert('Username / Password Salah');
                        </script>
                        <?php
                        echo"Username / Password Salah";
                }
            }
            }
            ?>

        </div>
    </div>
</body>
</html>
<?php
}
?>