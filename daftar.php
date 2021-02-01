<?php
@session_start();
include "asset/koneksi.php";
if(@$_SESSION['admin']||@$_SESSION['guru']||@$_SESSION['siswa']){
    header("location:laporan-siswa.php");
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
select{
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
            Halaman Daftar Akun
        </div>
        <div id="inputan">
            <form action="" method="post">
                <div>
                    <input type="text" name="kode_user" placeholder="Kode User" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <input type="text" name="username" placeholder="Username" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <input type="password" name="password" placeholder="Password" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="lg" />
                </div>
                <div style="margin-top:10px;">
                    <select type="text" name="level" placeholder="Level" class="lg" value="level" >
                                <option selected name="level">pilih</option>
                                <option value="admin" name="level">Admin</option>
                                <option value="guru" name="level">Guru</option>
                                <option value="siswa"  name="level">Siswa 10A</option>
                                <option value="siswa 10B"  name="level">Siswa 10B</option>
                                <option value="siswa 11A"  name="level">Siswa 11A</option>
                                <option value="siswa 11B"  name="level">Siswa 11B</option>
                                <option value="siswa 12A"  name="level">Siswa 12A</option>
                                <option value="siswa 12B"  name="level">Siswa 12B</option>
                            </select>
                </div>
                <div style="margin-top:10px;">
                    <input type="submit" name="daftar" value="Daftar" class="btn" />
                </div>
            </form>
            <?php
             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login_10b SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login_11a SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login_11b SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login_12a SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login_12b SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_loging SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
                mysqli_query($koneksi,"INSERT INTO tb_login3 SET
                kode_user= '$_POST[kode_user]',
                username= '$_POST[username]', 
                password= '$_POST[password]',
                nama_lengkap= '$_POST[nama_lengkap]',
                level= '$_POST[level]'");
             }

             if(isset($_POST['daftar']))
             {
               header("location:login.php");
              
             }
            ?>

        </div>
    </div>
</body>
</html>
<?php
}
?>