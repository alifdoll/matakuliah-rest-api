@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/tentangStyle.css')}}">
<link rel="stylesheet" href="{{asset('responsive/responsive-tentang.css')}}">
@endsection

@section('content')
<section class="tentang-kami" id="tentang-kami">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="row main-content">
                    <div class="col-sm-6">
                        <a href="/"><img src="asset/pusing_kuliah_hitam.png" alt="" srcset=""></a>
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
@endsection
