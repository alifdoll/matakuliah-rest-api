<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pusing Kuliah</title>

    <!-- Source CSS -->
    <link rel="stylesheet" href="css/tentangStyle.css">
    <link rel="stylesheet" href="responsive/responsive-tentang.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Source Fonts -->
    <link href="http://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">

  </head>
  <body>
    
     <!-- Navbar -->
     @extends('navbar')
     <!-- Akhir Nabvar -->

    <section class="tentang-kami" id="tentang-kami">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row main-content">
                        <div class="col-sm-6">
                            <img src="asset/pusing_kuliah_hitam.png" alt="" srcset="">
                        </div>
                        <div class="col-sm-6">
                            <p>sekumpulan mahasiswa yang pusing akan kuliahnya, sehingga mereka membuat sebuah tempat untuk berkeluh kesah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-tentang" id="content-tentang">
        <div class="container text-center">
            <div class="row">
                <h1>TENTANG KAMI</h1>
                <div class="col-sm-4">
                    <img src="asset/Alip.jfif" alt="" class="img-circle">
                    <h2>ALIFIAN FAJAR P.</h2>
                    <h5>Founder Pusing Kuliah</h5>
                    <p>""</p>
                    <div class="sosmed-tentang text-center">
                        <a href="https://www.instagram.com/pixel.alif/?hl=en"  target="_blank" class="btn-social-media"><span class="fa fa-instagram"></span></a>
                        <a href="https://twitter.com/AlifiaFajarPrat"  target="_blank" class="btn-social-media"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.facebook.com/alifianfajar321"  target="_blank" class="btn-social-media"><span class="fa fa-facebook"></span></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="asset/Azriel.jpeg" alt="" class="img-circle">
                    <h2>AZRIEL RIZKY W.</h2>
                    <h5>Founder Pusing Kuliah</h5>
                    <p>"Kerja keras sampai oshimu jadi tamu podcastmu"</p>
                    <div class="sosmed-tentang text-center">
                        <a href="https://www.instagram.com/azrielrzky/?hl=en"  target="_blank" class="btn-social-media"><span class="fa fa-instagram"></span></a>
                        <a href="https://twitter.com/Jisatsuhey"  target="_blank" class="btn-social-media"><span class="fa fa-twitter"></span></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="asset/aku.jpg" alt="" class="img-circle">
                    <h2>ARMANDO DIAZ</h2>
                    <h5>Founder Pusing Kuliah</h5>
                    <p>"Produktivitas dari dini sampai masuk Podcast Om Deddy Corbuzier"</p>
                    <div class="sosmed-tentang text-center">
                        <a href="https://www.instagram.com/armando.diazer/?hl=en"  target="_blank" class="btn-social-media"><span class="fa fa-instagram"></span></a>
                        <a href="https://twitter.com/Zaid_Odnam" target="_blank" class="btn-social-media"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.facebook.com/armando.diaz.942145/"  target="_blank" class="btn-social-media"><span class="fa fa-facebook"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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