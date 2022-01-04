@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/podcastStyle.css')}}">
<link rel="stylesheet" href="{{asset('responsive/responsive-podcast.css')}}">
@endsection

@section('content')
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
@endsection

@section('script')
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
@endsection