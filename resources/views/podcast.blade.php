<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Podcast Pusing Kuliah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Source CSS -->
    <link rel="stylesheet" href="css/podcastStyle.css">
    <link rel="stylesheet" href="responsive/responsive-podcast.css">

    <!-- Source Fonts -->
    <link href="http://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">

  </head>
  <body>
    
    <div class="jumbotron">
        <div class="container title-desc">
            <h1>Selamat Datang di Podcast Pusing Kuliah!</h1>
            <a class="btn-spotify" href="#" role="button">Dengerin di Spotify</a>
        </div>
    </div>

    <div class="content-daftar-ppk" id="content-daftar-ppk">
      <div class="container-fluid text-center">
        <h1>DAFTAR PUTAR UNTUKMU</h1>
        <div class="row">
          <div class="col-sm-4 list-content">
            <img src="asset/eps_1_ppk.jpg" alt="">
            <p>Episode 1: Pertemanan Kuliah</p>
            <a class="btn-spotify spacing-btn" href="#" role="button">Dengerin di Spotify</a>
          </div>
          <div class="col-sm-4 list-content">
            <img src="asset/eps_2_ppk.jpg" alt="">
            <p>Episode 2: Kerja Kelompok Kuliah</p>
            <a class="btn-spotify spacing-btn" href="#" role="button">Dengerin di Spotify</a>
          </div>
          <div class="col-sm-4 list-content">
            <img src="asset/eps_3_ppk.jpg" alt="">
            <p>Episode 3: Lebaran Bersama Tugas</p>
            <a class="btn-spotify spacing-btn" href="#" role="button">Dengerin di Spotify</a>
          </div>
        </div>
        <h3><a class="endless btn-spotify spacing-btn" href="#" role="button">Dengerin di Spotify</a></h3>
      </div>
    </div>

    <div class="social-media-ppk" id="social-media-ppk">
      <div class="container text-center social-question">
        <h1>Mau berkeluh kesah tentang kuliah?</h1>
        <div class="row">
          <div class="col-lg-4 col-lg-offset-2 col-sm-6">
            <a href="" class="btn-social-media"><span class="fa fa-instagram"></span>Instagram</a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="" class="btn-social-media"><span class="fa fa-spotify"></span>Spotify</a>
          </div>
        </div>
      </div>
      <h2 class="text-center">@ 2021 ATIGA</h2>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
      $(Window).scroll(function(){

        const wScroll = $(this).scrollTop();

        if( wScroll > $('.content-daftar-ppk').offset().top - 250 ) {

          $('.content-daftar-ppk .list-content').each(function(i) {
              setTimeout(function(){
                  $('.content-daftar-ppk .list-content').eq(i).addClass('display');
              }, 300 * (i + 1));
          });
        }

        if( wScroll > $('.social-media-ppk').offset().top - 250 ) {

          $('.social-media-ppk .social-question').each(function(i) {
              setTimeout(function(){
                  $('.social-media-ppk .social-question').eq(i).addClass('display');
              }, 300 * (i + 1));
          });
        }

        if( wScroll > $('.jumbotron').offset().top - 250 ) {

          $('.jumbotron .title-desc').each(function(i) {
              setTimeout(function(){
                  $('.jumbotron .title-desc').eq(i).addClass('display');
              }, 300 * (i + 1));
          });
        }

      })
    </script>
  </body>
</html>