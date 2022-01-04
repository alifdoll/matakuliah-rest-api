 @extends('layout.main')

 @section('css')
 <link rel="stylesheet" href="{{asset('responsive/responsive-index.css')}}">
 @endsection

 @section('content')
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

 @endsection