<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pusing Kuliah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Source CSS -->
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="responsive/responsive-index.css">

    <!-- Source Fonts -->
    <link href="http://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">

  <body>
    
    <!-- Navbar -->
    @extends('navbar')
    <!-- Akhir Nabvar -->

    <div class="jumbotron">
        <div class="container">
            <h1>Pusing Banyak Tugas? Capek Kuliah?</h1>
            <p>Dibuat santai aja! Daripada dipikirin dan menjadi beban hidup, mending dengerin Podcast Pusing Kuliah!</p>
            <a class="btn-spotify" href="#" role="button">Dengerin di Spotify</a>
        </div>
    </div>

    <section class="info-podcast" id="info-podcast">
        <div class="container text-center">
            <h1>Episode Terbaru Podcast Pusing Kuliah</h1>
            <div class="row spacing-bottom">
                <div class="col-sm-4">
                    <img src="asset/eps_1_ppk.jpg" alt="" srcset="">
                    <p>Episode 1 : Pertemanan Kuliah</p>
                    <a class="btn-spotify" href="#" role="button">PUTAR SEKARANG</a>
                </div>
                <div class="col-sm-4">
                    <img  src="asset/eps_2_ppk.jpg" alt="" srcset="">
                    <p>Episode 2 : Kerja Kelompok Kuliah</p>
                    <a class="btn-spotify" href="#" role="button">PUTAR SEKARANG</a>
                </div>
                <div class="col-sm-4">
                    <img  src="asset/eps_3_ppk.jpg" alt="" srcset="">
                    <p>Episode 3 : Lebaran Bersama Tugas</p>
                    <a class="btn-spotify" href="#" role="button">PUTAR SEKARANG</a>
                </div>
            </div>
        </div>
    </section>

    <section class="info-jadwal" id="info-jadwal">
        <div class="container text-center">
            <h1>Tanggal KRS sudah dekat, tapi masih belum nyusun mata kuliah semester depan ?</h1>
            <a class="btn-solusi" href="#" role="button">INI SOLUSINYA</a>
            <p></p>
        </div>
    </section>

    <footer>
        <div class="container text-left">
            <div class="row spacing-top-footer">
                <div class="col-sm-3 col-md-3 col-lg-2">
                    <a href=""><img class="img-footer" src="asset/pusing_kuliah_putih.png" alt=""></a>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-2 text-left">
                    <h3>TENTANG KAMI</h3>
                    <p>JADWAL KULIAH</p>
                    <p>PODCAST PUSING KULIAH</p>
                    <p>SAWERIA</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-2 text-left">
                    <h3>PATNER</h3>
                    <p>SPOTIFY</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-6 text-right">
                    <h2>SOSIAL MEDIA</h2>
                    <div class="group-social-media text-center">
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span class="fa fa-spotify"></span></a>
                    </div>
                </div>
                
            </div>
            <h5 class="text-right">@ 2021 ATIGA</h5>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>