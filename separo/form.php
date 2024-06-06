<?php
    include('php/konek.php');
    include('php/session.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: #E8E8E8;
            display: flex;
        }
        .Sidebar{
            background-color: #414141;
            height: 100dvh;
            padding: 20px;
            padding-right: 20px;
        }
        .Sidebar ul li:hover{
            border-radius: 6px;
            border-right: 10px solid #35BEE7;
            transition: .3s
        }
        .Sidebar ul li p:hover{
            color: #35BEE7 !important;
            font-weight: 700;
            transition: .3s;
        }
        .form ul li p:hover{
            padding-left: 1.6rem;
            font-weight: 700;
            transition: .3s;
        }
        .Sidebar ul li{
            list-style: none;
        }
        .menu svg{
            margin-left: -16px;
        }
        .form{
            border-radius: 6px;
            border-right: 10px solid #35BEE7;
        }
        .form p{
            color: #35BEE7;
            font-weight: 700;
        }
        .menu{
            list-style: none;
        }
        .logo{
            margin-left: -1rem;
        }
        .container{
            width: 800px;
            flex-direction:column;
            background-color: #E8E8E8;
            justify-content: start;
        }
        .navbar{
            justify-content: space-around !important;
            width: 80%;
        }
        input{
            width: 680px;
            height: 52px;
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
            border: .5px rgb(212, 212, 212) solid ;
            flex-wrap: nowrap;
        }
        .Button{
            width: 46px;
            height: 52px;
            margin-left: -10px !important;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
            margin-top: -5px !important;
        }
        .login{
            width: 287px;
            height: 52px;
            gap: 20px;
            justify-content: center;
        }
        .content{
            justify-content: space-evenly;
            display: flex;
            flex-direction: column;
            justify-self: center;
            justify-items: center;
        }
        .Selectroom{
            justify-content: start;
            width: 600px;
            flex-direction: row;
        }
        form{
            width: 84%;
            align-items: center;
            margin: auto;
        }
        .form-select{
            margin-left: 50%;
        }
        .Date{
            margin-left: 5.4% ;
        }
            @media only screen and (max-width: 1200px){
            .Sidebar{
                background-color: #414141;
                height: 110dvh;
                padding: 20px;
                padding-right: 20px;
                position: fixed;
                z-index: 999;
            }
            .container{
                margin-left: 100px !important;
            }
            .navbar input{
                width: 120px;
                height: 42px;
            }
            .navbar .Button{
                height: 42px;
            }
            .navbar{
                margin-left: -34px;
                gap: 40px;
            }
            .login{
                width: 76px;
                height: 42px;
                margin-left: -100px;
            }
            .login p{
                font-size: 0px !important;
            }
            .content{
                flex-direction: column;
            }
            form{
                width: 95%;
            }
            .Date{
                margin-left: .6% ;
                width: 100%;
            }
            .Selectroom{
                flex-direction: column;
            }
            .form-select{
                margin-left: 0%;
            }
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:#E8E8E8;">

    <!-- sidebar -->
    <div class="Sidebar d-flex flex-column flex-shrink-0 p-3">
        <ul class="menu">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24">
                    <path fill="#fff" d="M4 13c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m0 4c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m0-8c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1m0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1M7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1m-3 5c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m0 4c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m0-8c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1m4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1m0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1M7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1" />
                </svg>
            </li>
        </ul>
        <ul class="logo">
            <li class="d-flex"><img src="img/logo1.png" width="32px" alt=""><p class="fw-bolder fs-5 text-light gap-2">SEPARO</p></li>
        </ul>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="home">
                <a href="dashboard.html" class="Home nav-link mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#fff" d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10zm-2 2V9l8-6l8 6v12h-7v-6h-2v6zm8-8.75"/></svg>
                <p style="color: white; margin-left: 6px; color: #fff;">Beranda</p>
                </a>
            </li>
        <li class="ruangan">
            <a href="listRoom.html" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M5.978 3.212h6.938a2.775 2.775 0 0 1 2.775 2.775v14.8H3.203v-14.8a2.775 2.775 0 0 1 2.775-2.775M2.75 20.788h18.5" />
                        <path d="M8.531 14.313h1.85A1.388 1.388 0 0 1 11.77 15.7v5.088H7.144V15.7a1.387 1.387 0 0 1 1.387-1.387m-1.859-7.4h5.55m-5.55 3.7h5.55m3.468-1.388h1.85A2.775 2.775 0 0 1 20.317 12v8.788" />
                    </g>
                </svg>
            <p style="color: white; margin-left: 6px;">Daftar Ruangan</p>
            </a>
        </li>
        <li class="form">
            <a href="form.html" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="#35BEE7" d="M11 15h6v2h-6zM9 7H7v2h2zm2 6h6v-2h-6zm0-4h6V7h-6zm-2 2H7v2h2zm12-6v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2m-2 0H5v14h14zM9 15H7v2h2z" />
                </svg>
            <p style="color: #35BEE7;  margin-left: 6px;" class="fs-5">Form Peminjaman</p>
            </a>
        </li>
        <li class="ketersediaan">
            <a href="Ketersediaan.php" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
                    <path fill="#fff" d="M11.916 6.083A5.002 5.002 0 0 0 2 7a5 5 0 0 0 4.083 4.916q-.076.49-.083 1.001A6.002 6.002 0 0 1 7 1a6 6 0 0 1 5.917 5q-.51.007-1 .083m-.562 4.563a.5.5 0 0 0-.708.708L12.293 13l-1.647 1.646a.5.5 0 0 0 .708.708L13 13.707l1.646 1.647a.5.5 0 0 0 .708-.708L13.707 13l1.647-1.646a.5.5 0 0 0-.708-.708L13 12.293zM13 19a6 6 0 1 0 0-12a6 6 0 0 0 0 12m0-1a5 5 0 1 1 0-10a5 5 0 0 1 0 10M9.354 5.354a.5.5 0 1 0-.708-.708L6 7.293L4.854 6.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                </svg>
            <p style="color: #fff; margin-left: 6px;">Ketersediaan</p>
            </a>
        </li>
        <li class="status">
            <a href="status.php" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <g fill="none" stroke="#fff" stroke-width="2">
                        <rect width="14" height="17" x="5" y="4" rx="2" />
                        <path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4" />
                    </g>
                </svg>
            <p style="color: #ffffff; margin-left: 6px;">Status</p>
            </a>
        </li>
        </ul>
    </div>

    <!-- container -->
    <div class="container d-flex p-2">
        <div class="content d-flex mt-3">
            <center>
                <label for="header"><h3>Form Peminjaman</h3></label>
            </center>
            <form method="post" class="bg-light p-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan NIM</label>
                  <input type="text" class="form-control" name="nim" aria-describedby="emailHelp" placeholder="" >

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Masukkan Nama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="nama">
                </div>
                
                <div class="Selectroom form-group d-flex mt-3">
                    <label for="ruang" >Pilih Ruangan</label>
                    <div class="dropdown">
                      <select class="form-select" name="id_ruangan" aria-label="Default select example">
                        <option selected>Daftar Ruangan</option>
                        <option label="">-- lantai 1 --</option>
                        <option label="" value="3">Ruang Seminar</option>
                        <option label="" value="1">R 101</option>
                        <option label="" value="2">R 107</option>
                        <option label="">-- lantai 2 --</option>
                        <option label="" value="12">R 205</option>
                        <option label="" value="13">R 207</option>
                        <option label="" value="11">R 210</option>
                        <option label="">-- lantai 3 --</option>
                        <option label="" value="23">R 301</option>
                        <option label="" value="21">R 305</option>
                        <option label="" value="22">R 306</option>
                      </select>
                    </div>
                  </div>
                <div class="DateForm form-group mt-3">
                    <label for="exampleInputPassword1">Masukkan Tanggal</label>
                    <input type="date" class="Date" name="tanggal_pinjam">
                </div>
                <div class="DateForm form-group mt-3">
                    <label for="exampleInputPassword1">Jam Pinjam</label>
                    <input type="time" class="Time" name="jam_pinjam">
                </div>
                <div class="DateForm form-group mt-3">
                    <label for="exampleInputPassword1">Jam Selesai</label>
                    <input type="time" class="Time" name="jam_done">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>

<?php

  // Ambil input tanggal dan waktu peminjaman dari user
 if (isset($_POST['submit'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $tanggal_pinjam = $_POST['tanggal_pinjam'];
  $ruangan_id = $_POST['id_ruangan'];
  $jampinjam = $_POST['jam_pinjam'];
  $jamdone = $_POST['jam_done']; 

  $jampinjam_24 = date ('H:i:s', strtotime($jampinjam));
  $jamdone_24 = date ('H:i:s', strtotime($jamdone));

  // mengubah agar sistem bisa mengetahui nama ruangan berdasarkan id ruangan
  $query_ruangan = "SELECT ruangan FROM ruangan WHERE id_ruangan = '$ruangan_id'";
  $result_ruangan = mysqli_query($koneksi, $query_ruangan);
  $row_ruangan = mysqli_fetch_assoc($result_ruangan);
  $nama_ruangan = $row_ruangan['ruangan'];

  // Query untuk input ke tabel "tabel_peminjaman"
  $query = "INSERT INTO tabel_peminjaman 
  (id_ruangan, nama_ruangan, tgl_pinjam, jam_mulai, jam_selesai, nama, nim) VALUES 
  ('$ruangan_id', '$nama_ruangan', '$tanggal_pinjam', '$jampinjam', '$jamdone', '$nama', '$nim')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Update table "kondisi"
    $update = "UPDATE kondisi SET kondisi = 'TERISI',tgl_pinjam='$tanggal_pinjam' WHERE id_ruangan = '$ruangan_id' AND waktu BETWEEN '$jampinjam_24' AND '$jamdone_24'";
    $hasil = mysqli_query($koneksi, $update);

    if ($hasil) {
        echo "<script>showAlert('Data berhasil disimpan!!!
        Kondisi Ruangan Berhasil Diubah');</script>";
    } else {
        echo "<p>Maaf, terjadi kesalahan saat mengubah kondisi ruangan</p>";
    }
} else {
    echo "<p>Maaf, terjadi kesalahan saat menyimpan data.</p>";
}
 }
  // Tutup koneksi
  mysqli_close($koneksi);
?>
                  </form>    
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var menuButton = document.querySelector(".menu");
      
          var sidebar = document.querySelector(".Sidebar");
      
          menuButton.addEventListener("click", function() {
            var isSidebarCollapsed = sidebar.style.width === "80px";
      
            if (isSidebarCollapsed) {
              sidebar.style.width = "250px";
              var sidebarLinks = sidebar.querySelectorAll("p");
              sidebarLinks.forEach(function(link) {
                link.style.display = "block";
              });
            } 
            else {
              sidebar.style.width = "80px";
              var sidebarLinks = sidebar.querySelectorAll("p");
              sidebarLinks.forEach(function(link) {
                link.style.display = "none";
              });
            }
          });
      
          sidebar.style.transition = "width 0.3s";
        });

        function showAlert(message){
            alert(message);
        }
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>