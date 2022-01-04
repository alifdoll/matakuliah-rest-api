@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/jadwalStyle.css')}}">
{{-- <link rel="stylesheet" href="{{asset('responsive/responsive-jadwal.css')}}"> --}}
@endsection

@section('content')
{{-- <div class="work-in-progress" id="work-in-progress">
    <div class="container text-center">
        <h1>Oops Sorry! Work in Progress</h1>
        <div class="row">
            <div class="col-sm-12">
                <img src="source/Coding2.png" alt="" srcset="">
            </div>
        </div>
    </div>
</div> --}}

<section class="jadwal-kuliah" id="jadwal-kuliah">
        <div class="container-fluid text-center">
            <h1>JADWAL {{app()->version()}}</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="jadwal-searching">
                        <input type="search" name="search" id="search" placeholder="Searching">
                        <input type="button" value="Search">
                    </div>
                    <div class="jadwal-place">
                        <div id="row-matkul" class="row">
                            <div class="col-sm-12 text-center">
                                @foreach($lecture as $lct)
                                <div class="mata-kuliah">
                                    <div id="row-mata-kuliah" class="row">
                                        <p> {{$lct->nama}}</p>
                                        @foreach($lct->groups as $kp)
                                        <div id="kelas-paralel" class="col-sm-6">
                                            <input type="button" value="{{$kp->kode}}">
                                            @foreach($kp->schedules as $sch)
                                            <p>{{$sch->hari}} {{$sch->waktuMulai}}-{{$sch->waktuBerakhir}}</p>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination">
                            {{ $lecture->onEachSide(1)->links() }}
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
    </section>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.paginaton', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        })
    });

    function fetch_data(page) {
        $.ajax(
            {
                url: `schedule?page=${page}`,
                success: function(data) {
                    $('.jadwal-place').html(data);
                }
            }
        )
    }
</script>
@endsection