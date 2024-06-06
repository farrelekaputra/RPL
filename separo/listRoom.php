<?php
include('php/konek.php');
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
        .ruangan ul li p:hover{
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
        .ruangan{
            border-radius: 6px;
            border-right: 10px solid #35BEE7;
        }
        .ruangan p{
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
            flex-direction: column;
            background-color: #E8E8E8;
            justify-content: start;
            gap: 20px;
            align-items: center;
        }
        .container label h3{
          align-items: start;
        }
        .floor1{
          flex-direction: row;
            width: 800px;
            height: auto;
            padding: 1%;
            justify-content: space-around;
        }
        .floor1 div{
            padding: 1%;
            flex-direction: column;
            width: auto;
            background-color: white;
        }
        .floor2{
            flex-direction: row;
            width: 800px;
            height: auto;
            padding: 1%;
            justify-content: space-around;
        }
        .floor2 div{
            padding: 1%;
            flex-direction: column;
            width: auto;
            background-color: white;
        }
        .floor3{
          flex-direction: row;
            width: 800px;
            height: auto;
            padding: 1%;
            justify-content: space-around;
        }
        .floor3 div{
            padding: 1%;
            flex-direction: column;
            width: auto;
            background-color: white;
        }
        .fasilitas ul{
            list-style: none;
            gap: 8px;
            margin-left: -36px;
        }
        .fasilitas ul li{
            font-size: smaller;
            padding-top: 3px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px gray solid;
            border-radius: 4px;
        }
            @media only screen and (max-width: 1200px){
            .Sidebar{
                background-color: #414141;
                height: 100dvh;
                padding: 20px;
                padding-right: 20px;
                position: fixed;
                z-index: 999;
            }
            .container{
              margin-left: 86px !important;
            }
            .floor1{
              flex-direction: column;
              width: 80%;
            }
            .floor1 div{
              padding: 12px;
              margin-bottom:20px;
            }
            .floor2{
              flex-direction: column;
              width: 80%;
            }
            .floor2 div{
              padding: 12px;
              margin-bottom:20px;
            }
            .floor3{
              flex-direction: column;
              width: 80%;
            }
            .floor3 div{
              padding: 12px;
              margin-bottom:20px;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
                <a href="dashboard.php" class="Home nav-link mb-1 mt-2" style="display: flex;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#fff" d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10zm-2 2V9l8-6l8 6v12h-7v-6h-2v6zm8-8.75"/></svg>
                    <p style="color: white; margin-left: 6px;">Beranda</p>
                </a>
            </li>
            <li class="ruangan">
                <a href="#" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <g fill="none" stroke="#35BEE7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M5.978 3.212h6.938a2.775 2.775 0 0 1 2.775 2.775v14.8H3.203v-14.8a2.775 2.775 0 0 1 2.775-2.775M2.75 20.788h18.5" />
                            <path d="M8.531 14.313h1.85A1.388 1.388 0 0 1 11.77 15.7v5.088H7.144V15.7a1.387 1.387 0 0 1 1.387-1.387m-1.859-7.4h5.55m-5.55 3.7h5.55m3.468-1.388h1.85A2.775 2.775 0 0 1 20.317 12v8.788" />
                        </g>
                    </svg>
                <p style="color: white; margin-left: 6px; color: #35BEE7;" class="fs-5">Daftar Ruangan</p>
                </a>
            </li>
            <li class="form">
                <a href="form.php" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <path fill="#fff" d="M11 15h6v2h-6zM9 7H7v2h2zm2 6h6v-2h-6zm0-4h6V7h-6zm-2 2H7v2h2zm12-6v14c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h14c1.1 0 2 .9 2 2m-2 0H5v14h14zM9 15H7v2h2z" />
                    </svg>
                <p style="color: white;  margin-left: 6px;">Form Peminjaman</p>
                </a>
            </li>
            <li class="ketersediaan">
                <a href="Ketersediaan.php" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
                        <path fill="#fff" d="M11.916 6.083A5.002 5.002 0 0 0 2 7a5 5 0 0 0 4.083 4.916q-.076.49-.083 1.001A6.002 6.002 0 0 1 7 1a6 6 0 0 1 5.917 5q-.51.007-1 .083m-.562 4.563a.5.5 0 0 0-.708.708L12.293 13l-1.647 1.646a.5.5 0 0 0 .708.708L13 13.707l1.646 1.647a.5.5 0 0 0 .708-.708L13.707 13l1.647-1.646a.5.5 0 0 0-.708-.708L13 12.293zM13 19a6 6 0 1 0 0-12a6 6 0 0 0 0 12m0-1a5 5 0 1 1 0-10a5 5 0 0 1 0 10M9.354 5.354a.5.5 0 1 0-.708-.708L6 7.293L4.854 6.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                    </svg>
                <p style="color: white; margin-left: 6px;">Ketersediaan</p>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- container -->
    <div class="container d-flex p-2">
        <label for="lantai1"><h3>Lantai 1</h3></label>
        <div class="floor1 d-flex">
            <div class="seminar card" style="width: 14rem;">
                <img class="card-img-top" src="img/Ruang Seminar.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang Seminar</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>Proyektor</li>
                        <li>100 kursi</li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary fs-smaller">Pesan Ruang</a>
                </div>
              </div>
              <div class="107 card" style="width: 14rem;">
                <img class="card-img-top" src="img/111.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 111</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                      <li>Proyektor</li>
                      <li>Kap : 40</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
              <div class="101 card" style="width: 14rem;">
                <img class="card-img-top" src="img/112.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 112</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>Kap : 40</li>
                        <li>White Board</li>
                        <li>Proyektor</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
        </div>
        <label for="lantai2"><h3>Lantai 2</h3></label>
        <div class="floor1 d-flex">
            <div class="205 card" style="width: 14rem;">
                <img class="card-img-top" src="img/205.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 205</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>LCD</li>
                        <li>Kap 47</li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary fs-smaller">Pesan Ruang</a>
                </div>
              </div>
              <div class="207 card" style="width: 14rem;">
                <img class="card-img-top" src="img/207.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 207</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                      <li>AC</li>
                      <li>LCD</li>
                      <li>Kap 44</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
              <div class="210 card" style="width: 14rem;">
                <img class="card-img-top" src="img/210.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 210</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>AC</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
        </div>
        <label for="lantai3"><h3>Lantai 3</h3></label>
        <div class="floor1 d-flex">
            <div class="301 card" style="width: 14rem;">
                <img class="card-img-top" src="img/gedung e11.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 301</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>AC</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary fs-smaller">Pesan Ruang</a>
                </div>
              </div>
              <div class="305 card" style="width: 14rem;">
                <img class="card-img-top" src="img/gedung e11.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 305</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>AC</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
              <div class="306 card" style="width: 14rem;">
                <img class="card-img-top" src="img/gedung e11.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ruang 306</h5>
                  <div class="fasilitas">
                    <ul class="d-flex">
                        <li>AC</li>
                        <li>AC</li>
                    </ul>
                  </div>
                  <a href="form.php" class="btn btn-primary">Pesan Ruang</a>
                </div>
              </div>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>