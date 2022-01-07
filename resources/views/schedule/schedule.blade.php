@extends('layout.main') @section('css')
    <link rel="stylesheet" href="{{ asset('css/jadwalStyle.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('responsive/responsive-jadwal.css') }}" /> --}} @endsection @section('content') {{-- <div class="work-in-progress" id="work-in-progress">
    <div class="container text-center">
        <h1>Oops Sorry! Work in Progress</h1>
        <div class="row">
            <div class="col-sm-12">
                <img src="source/Coding2.png" alt="" srcset="" />
            </div>
        </div>
    </div>
</div> --}}

    <section class="jadwal-kuliah" id="jadwal-kuliah">
        <div class="container-fluid text-center">
            <h1>JADWAL KULIAH</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="jadwal-searching">
                        <input class="search-input" type="search" name="search" id="search" placeholder="Searching" />
                        <input class="search" type="button" value="Search" />
                    </div>
                    <div class="jadwal-place">
                        @include('schedule.schedule_data')
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="jadwal-matkul">
                        <div class="table-responsive">
                            @include('schedule.schedule_table')
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

            //Untuk ganti halaman
            $(document).on("click", ".page-item", function(e) {
                e.preventDefault();
                var page = $(this).children().attr("href").split("page=")[1];
                var q = $(".search-input").val();
                changePage(page, q);
            });

            //Untuk search matkul
            $(document).on("click", ".search", function(e) {
                var query = $(".search-input").val();
                searchSchedule(query);
            });
        });

        //Function cari matkul
        function searchSchedule(query) {
            $.ajax({
                url: `schedule?search=${query}`,
                success: function(data) {
                    $(".jadwal-place").html(data);
                },
            });
        }


        //Function ganti halaman
        function changePage(page, query) {
            $.ajax({
                url: `schedule?search=${query}&page=${page}`,
                success: function(data) {
                    $(".jadwal-place").html(data);
                },
            });
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            var listMataKuliah = (@json($lecture)).data;

            $(document).on("click", '.kp-button', function(e) {
                const kodeMatkul = $(this).attr("kode-matkul");
                const kodeKelas = $(this).attr("value");


                $.ajax({
                    url: `api/lectures/search`,
                    type: "POST",
                    data: {
                        _token: "<?= csrf_token() ?>",
                        test: kodeMatkul
                    },
                    success: function(data) {
                        console.log(data);
                        // PROSES DI SINI
                    },
                });

                console.log(listMataKuliah);

                const matkuldipilih = listMataKuliah.find(
                    (mk) => mk.kode === kodeMatkul
                );

                const kelasdipilih = listMataKuliah.groups.find(
                    (kelas) => kelas.kode == kodeKelas
                );



            })
        });
    </script>
@endsection
