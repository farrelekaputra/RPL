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
        .ketersediaan ul li p:hover{
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
        .menu svg{
            margin-left: -16px;
        }
        .home{
            border-radius: 6px;
            border-right: 10px solid #35BEE7;
        }
        .home p{
            padding-left: 1.6rem;
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
        }
        .navbar{
            justify-content: space-around !important;
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
            margin-bottom: -120px;
        }
        .welcome{
            flex-direction: column;
            width: 726px;
            height: 300px;
            background-color: white;
            border-radius:12px ;
            background-image: url(img/gedung\ e11.jpg);
            background-size: 100%;
            justify-content: space-between;
            padding: 2%;
        }
        .welcome .desc{
            flex-direction: column;
        }
        .welcome .desc p{
            text-align: end;
        }
        .features{
            flex-direction: column;
            width: 287px;
            height: 300px;
            border-radius: 8px;
            justify-content: space-between;
        }
        .features div{
            height: 80px;
            width: 287px;
            margin: auto;
            border-radius: 8px;
            background-color: white;
            justify-content: space-evenly;
            align-content: center;
            align-items: center;
        }
        .features div p{
            color: #6E6E6E;
        }
        .floor{
            height: 30px;
            margin: auto;
            gap: 30px;
        }
        .floor div{
            flex-direction: column;
            width: 320px;
            height: 160px;
            background-color: white;
            align-content: center;
            align-items: center;
            margin: auto;
            border-radius: 8px;
        }
        .floor3{
            margin-bottom: 50px;
        }
        a{
            text-decoration: none;
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
            .welcome{
                width: 95%;
                background-repeat: no-repeat;
                background-size: 160%;
            }
            .welcome .desc p{
                font-size: small;
            }
            .welcome p{
                font-size: smaller;
            }
            .features{
                margin-top: 18px;
                height: 60%;
                margin-left: -10px;
            }
            .features div{
                width: 95%;
                height: 60px;
            }
            .features div p{
                font-size: smaller;
            }
            .features div svg{
                width: 1.4em;
                padding: 2px !important;
            }
            .floor{
                flex-direction: column;
                margin-top: 140px;
                margin-left: -10px;
                gap: 12px;
            }
            .floor3{
                margin-bottom: 50px;
            }
            .floor div{
                width: 96%;
                border-radius: 8px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .schedule{
                margin-top: -12px !important;
            }
            .contact{
                margin-top: -12px !important;
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
                <a href="#" class="Home nav-link mb-1 mt-2" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#35BEE7" d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10zm-2 2V9l8-6l8 6v12h-7v-6h-2v6zm8-8.75"/></svg>
                <p style="color: white; margin-left: 6px; color: #35BEE7;" class="fs-5">Beranda</p>
                </a>
            </li>
        <li class="ruangan">
            <a href="listRoom.php" class="nav-link link-dark mb-1 mt-2" style="display: flex;">
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
        <nav class= "navbar d-flex">
            <div class="search">
                <input class="p-1" type="text">
                <button type="button" class="Button btn btn-primary p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                        <path fill="#fff" d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5l-1.5 1.5l-5-5v-.79l-.27-.27A6.52 6.52 0 0 1 9.5 16A6.5 6.5 0 0 1 3 9.5A6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14S14 12 14 9.5S12 5 9.5 5" />
                    </svg>
                </button>
            </div>
            <button type="button" class="login btn btn-primary p-n2 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="#fff" d="M10.3 7.7a.984.984 0 0 0 0 1.4l1.9 1.9H3c-.55 0-1 .45-1 1s.45 1 1 1h9.2l-1.9 1.9a.984.984 0 0 0 0 1.4c.39.39 1.01.39 1.4 0l3.59-3.59a.996.996 0 0 0 0-1.41L11.7 7.7a.984.984 0 0 0-1.4 0M20 19h-7c-.55 0-1 .45-1 1s.45 1 1 1h7c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-7c-.55 0-1 .45-1 1s.45 1 1 1h7z" />
                </svg> 
                <p class="fs-4">Login</p>
            </button>
        </nav>
        <div class="content d-flex mt-3">
            <div class="welcome d-flex">
                <p class="fs-1 fw-bolder text-light">Welcome</p>
                <div class="desc d-flex">
                    <p class="brand fs-4 text-light">SEPARO (Sistem Peminjaman Ruang Online)</p>
                    <p class="text-light"> Merupakan sebuah aplikasi berbasis sistem informasi tentang peminjmana ruangan di gedung e11 lingkungan teknik elektro unnes</p>
                </div>
            </div>
            <div class="features d-flex">
                <a href="#" id="komentar" style="text-decoration: none;">
                    <div class="comment d-flex fs-5">
                        <p>Komentar</p> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="#35BEE6" d="M6 14h12v-2H6zm0-3h12V9H6zm0-3h12V6H6zm16 14l-4-4H4q-.825 0-1.412-.587T2 16V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4zM4 16h14.85L20 17.125V4H4zm0 0V4z" />
                        </svg>
                    </div>
                </a>
                <a href="Ketersediaan.php" style="text-decoration: none;">
                    <div class="schedule d-flex fs-5">
                        <p>Jadwal Book</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="#35BEE6" d="M12 12h5v5h-5zm7-9h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 2v2H5V5zM5 19V9h14v10z" />
                        </svg>
                    </div>
                </a>
                <a href="contact.php" style="text-decoration: none;">
                    <div class="contact d-flex fs-5">
                        <p>Contact Person</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="#35BEE6" d="M21 8a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 0 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.962 7.962 0 0 1-4.24-1.215" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="floor d-flex">
            <div class="floor1 d-flex" style="flex-direction: column;">
                <label for="lantai1">Lantai 1</label>
                <img src="img/lantai1.jpg" width="66%" alt="denahLantai1">
            </div>
            <div class="floor2 d-flex" style="flex-direction: column;">
                <label for="lantai1">Lantai 2</label>
                <img src="img/lantai2.jpg" width="66%" alt="denahLantai1">
            </div>
            <div class="floor3 d-flex" style="flex-direction: column;">
                <label for="lantai1">Lantai 3</label>
                <img src="img/lantai3.jpg" width="66%" alt="denahLantai1">
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var commentLink = document.getElementById("komentar");

    commentLink.addEventListener("click", function(event) {
        event.preventDefault();

        alert("Fitur ini masih dalam pengembangan");
        });
    });

    </script>
</body>
</html>
