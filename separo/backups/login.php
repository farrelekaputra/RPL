<?php
    session_start();
    include('php/konek.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        margin-left: 40%;
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

            <?php
                if (isset($_POST['login'])){
                    $nim = mysqli_real_escape_string($koneksi, htmlentities($_POST['nim']));
                    $pass = mysqli_real_escape_string($koneksi, htmlentities(md5($_POST['password'])));

                    $sql = mysqli_query($koneksi, "SELECT*FROM akun_mhs WHERE nim_akun='$nim' AND passwd='$pass'") or die(mysqli_error($koneksi));
                        if(mysqli_num_rows($sql) == 0){
                            echo '<center><span>User tidak ditemukan</span></center>';
                        }else{
                            $row = mysqli_fetch_assoc($sql);
                                if($row){
                                    $_SESSION['nim_akun']=$nim;
                                    include('php/session.php');
                                    echo '<script language="javascript">document.location="dashboard.php";</script>';
                                }else{
                                    echo'<center><div class="alert alert-danger">UPSS..!!!! GAGAL LOGIN!</div></center>';
                                }
                        }
                }
            ?>
        <form method="post" action="">
            <label for="LoginForm" class="form-label text-light fw-bolder fs-3 mb-3">Masuk</label>
            <div class="mb-3">
              <label for="exampleInputNIM" class="form-label text-light fw-bolder">Masukan NIM</label>
              <input type="number" class="form-control"  aria-describedby="emailHelp" name="nim">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-light fw-bolder">Masukan Password</label>
              <input type="password" class="mb-4 form-control" name="password">
            </div>
            <button type="submit" name ="login" class="btn btn-primary fw-bolder">Login</button>
          </form>
          <label for="BuatAkun" class="createAccount mt-3 mx-auto text-light d-flex">Belum punya akun? <a href="createAccount.php" target="_blank"><p class="href text-primary fw-bolder">Buat Akun</p></a></label>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>