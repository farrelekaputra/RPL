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
        width: 460px;
        height: auto;
        background-color:#6B6A6A;
        border-radius: 12px;
        box-shadow: 0px 0px 8px 4px rgba(255, 255, 255, 0.445);
    }
    .kiri{
      justify-content: space-around;
      flex-direction: row;
    }
    .kanan{
      justify-content: space-evenly;
      flex-direction: row;
    }
    .password{
      width: 180%;
    }
    .Selectprodi{
      flex-direction: column;
      justify-content: start;
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
    @media only screen and (max-width: 1200px){
      .kiri{
        flex-direction: column;
      }
      .kanan{
        flex-direction: column;
      }
      .password{
        width: 100%;
      }
    }
</style>
<body>
    <div class="container-fluid mt-5">
        <img src="img/logo.svg" width="80%" alt="" class="logo mb-n3">
        <?php
        if(isset($_POST['tambah'])){ //apabila tombol "Buat Akun" dengan properti name "tambah" ditekan
            $nim    = mysqli_real_escape_string($koneksi, htmlentities($_POST['nim']));
            $passwd = mysqli_real_escape_string($koneksi, htmlentities(($_POST['password'])));
            $nama    = mysqli_real_escape_string($koneksi, htmlentities($_POST['nama']));
            $prodi    = mysqli_real_escape_string($koneksi, htmlentities($_POST['prodi']));

            $cek=$koneksi->query("select*from akun_mhs WHERE nim_akun='$nim'"); //chek nim dalam database
            if($cek->num_rows == 0){ //apabila nim belum ada
                $pass =md5($passwd);
                $insert = $koneksi->query("insert into akun_mhs(
                                            nim_akun,
                                            passwd,
                                            nama,
                                            prodi) 

                                            Values (
                                            '$nim',
                                            '$pass',
                                            '$nama',
                                            '$prodi')") or die(mysqli_error($koneksi));

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
        <form method="post">
            <label for="LoginForm" class="form-label text-light fw-bolder fs-3 mb-3">Buat Akun</label>
            <!-- form sebelah kiri -->
            <div class="kiri d-flex">
              <div class="mb-3">
                  <!-- Input Nama -->
                <label for="InputNama" class="form-label text-light fw-bolder">Masukan Nama</label>
                <input type="text" name ="nama" class="form-control" id="InputNama" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <!-- Input NIM -->
                <label for="InputNIM" class="form-label text-light fw-bolder">Masukan NIM</label>
                <input type="number" name="nim" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
              </div>
            </div>
            <!-- form sebelah kanan -->
            <div class="kanan d-flex">
            <div class="mb-3">
                <!-- Input Password -->
                <div class="password">
                  <label for="InputPassword1" class="form-label text-light fw-bolder">Masukan Password</label>
                  <input type="password" name="password" class="mb-4 form-control" id="exampleInputPassword">
                </div>
              </div>
                  <!-- Pilih Prodi -->
              <div class="Selectprodi d-flex mb-3 d-flex text-light fw-bolder" style="margin-left: 25%;">
                <label for="Prodi">Masukkan Prodi</label>
                  <div class="dropdown">
                    <select class="form-select" name="prodi" aria-label="Default select example" style="width: 94%;">
                      <option selected>Pilih Prodi</option>
                      <option label="" value="Teknik Elektro">Teknik Elektro</option>
                      <option label="" value="Teknik Komputer">Teknik Komputer</option>
                      <option label="" value="Pendidikan Teknik Elektro">Pendidikan Teknik Elektro</option>
                      <option label="" value="Pendidikan Teknik Informatika dan Komputer">Pendidikan Teknik Informatika dan Komputer</option>
                    </select>
                  </div>
                </div>
              </div>
            <button type="submit" name="tambah" class="btn btn-primary fw-bolder">Buat Akun</button>
          </form>
          <label for="BuatAkun" class="createAccount mt-3 mx-auto text-light d-flex">Sudah Punya Akun?<p class="href text-primary fw-bolder"> Masuk</p> </label>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
