<?php
    include('php/konek.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="../img/logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        margin: auto;
        background-color:#414040;
    }
    .container-fluid{
        display: flex;
        flex-direction: column;
        margin: auto;
        width: 416px;
        height: auto;
        background-color:#6B6A6A;
        border-radius: 12px;
        box-shadow: 0px 0px 8px 4px rgba(255, 255, 255, 0.445);
    }
    img{
        display: flex;
        margin: auto;
        margin-bottom: -36px;
        margin-top: -36px;
    }
    button{
        margin-left: 36%;
    }
   .href:hover{
        color: white !important;
        cursor: pointer;
        transition: .3s;
    }
</style>
<body>
    <div class="container-fluid mt-5">
        <img src="img/logo.svg" width="80%" alt="" class="logo mb-n3">
        <!-- PROSES INPUT AKUN -->
        <?php
        if(isset($_POST['tambah'])){ //apabila tombol "Buat Akun" dengan properti name "tambah" ditekan
            $nim    = mysqli_real_escape_string($koneksi, htmlentities($_POST['nim']));
            $passwd = mysqli_real_escape_string($koneksi, htmlentities(($_POST['password'])));

            $cek=$koneksi->query("select*from akun_mhs WHERE nim_akun='$nim'"); //chek nim dalam database
            if($cek->num_rows == 0){ //apabila nim belum ada
                $pass =md5($passwd);
                $insert = $koneksi->query("insert into akun_mhs(
                                            nim_akun,
                                            passwd) 

                                            Values (
                                            '$nim',
                                            '$pass')") or die(mysqli_error($koneksi));

                if($insert){
                    $pesan = '<p><b>DONE!!!</b>, Registrasi Akun Berhasil, silahkan tunggu akun diaktivasi</p>';

                }else{
                    $pesan = '<p><b>GAGAL!!!</b>, Gagal melalukan registrasi</p>';
                }
            } else {
                $pesan = '<p><b>WARNING!</b>, NIM sudah digunakan.</p';
            }
        } else {
            $pesan='';
        }
        ?>  
        <form method="post" enctype="multipart/form-data">
            <label for="LoginForm" class="form-label text-light fw-bolder fs-3 mb-3">Buat Akun</label>
            <div class="mb-3">
              <label for="exampleInputNIM" class="form-label text-light fw-bolder">Masukan NIM</label>
              <input type="number" name="nim" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-light fw-bolder">Masukan Password</label>
              <input type="password" name="password" class="mb-4 form-control">
            </div>
            <button type="submit" name="tambah" class="btn btn-primary fw-bolder">Buat Akun</button>
          </form>
          <label for="BuatAkun" class="createAccount mt-3 mx-auto text-light d-flex">Sudah Punya Akun?<p class="href text-primary fw-bolder"> Masuk</p> </label>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
