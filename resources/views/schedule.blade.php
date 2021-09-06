<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pusing Kuliah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Source CSS -->
    <link rel="stylesheet" href="css/jadwalStyle.css">
    <link rel="stylesheet" href="responsive/responsive-jadwal.css">

    <!-- Source Fonts -->
    <link href="http://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">

  </head>
  <body>
    
   <!-- Navbar -->
   @extends('navbar')
   <!-- Akhir Nabvar -->

    <div class="work-in-progress" id="work-in-progress">
        <div class="container text-center">
            <h1>Oops Sorry! Work in Progress</h1>
            <div class="row">
                <div class="col-sm-12">
                    <img src="source/Coding2.png" alt="" srcset="">
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

    <!-- <section class="jadwal-kuliah" id="jadwal-kuliah">
        <div class="container-fluid text-center">
            <h1>JADWAL KULIAH</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="jadwal-searching">
                        <input type="search" name="search" id="search" placeholder="Searching">
                        <input type="button" value="Search">
                    </div>
                    <div class="jadwal-place">
                        <div class="row">
                            <div class="col-sm-12 text-center">

                                <div class="mata-kuliah">
                                    
                                    <div class="row">
                                        <p> NAMA MATA KULIAH</p>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP A">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP B">
                                        </div>
                                    </div>
                                </div>

                                <div class="mata-kuliah">
                                    
                                    <div class="row">
                                        <p> NAMA MATA KULIAH</p>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP A">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP B">
                                        </div>
                                    </div>
                                </div>

                                <div class="mata-kuliah">
                                    
                                    <div class="row">
                                        <p> NAMA MATA KULIAH</p>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP A">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP B">
                                        </div>
                                    </div>
                                </div>

                                <div class="mata-kuliah">
                                    
                                    <div class="row">
                                        <p> NAMA MATA KULIAH</p>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP A">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="button" value="KP B">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="jadwal-matkul">
                        <div class="table-responsive">
                            <table class="table table-condensed">

                                <tr>
                                    <th>WAKTU</th>
                                    <th>SENIN</th>
                                    <th>SELASA</th>
                                    <th>RABU</th>
                                    <th>KAMIS</th>
                                    <th>JUMAT</th>
                                    <th>SABTU</th>
                                </tr>

                                <tr>
                                    <td>07.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>08.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>09.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>10.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>11.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>12.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>13.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>14.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>15.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>16.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>18.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>19.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>20.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>