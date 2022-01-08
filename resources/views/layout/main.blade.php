<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pusing Kuliah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Source CSS -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">



    <!-- Source Fonts -->
    <link href="http://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/"><img class="img-footer" src="asset/pusing_kuliah_putih.png" /></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/schedule" class="page-scroll">JADWAL</a></li>
                    <li><a href="/podcast" class="page-scroll">PODCAST</a></li>
                    <li><a href="/about" class="page-scroll">TENTANG</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer>
        <div class="container text-left">
            <div class="row spacing-top-footer">
                <div class="col-sm-3 col-md-3 col-lg-2">
                    <a href="/"><img class="img-footer" src="asset/pusing_kuliah_putih.png" alt=""></a>
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
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span
                                class="fa fa-instagram"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span
                                class="fa fa-twitter"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span
                                class="fa fa-facebook"></span></a>
                        <a href="https://www.instagram.com/armando.diazer/?hl=en" class="btn-social-media"><span
                                class="fa fa-spotify"></span></a>
                    </div>
                </div>

            </div>
            <h5 class="text-right">@ 2021 ATIGA</h5>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    @yield('script')
</body>

</html>
