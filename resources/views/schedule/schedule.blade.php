@extends('layout.main')

@section('css')
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
        function getMatkul(id) {
            return $.ajax({
                url: `api/lectures/detail/${id}`,
                accepts: "application/json; charset=utf-8",
            });
        }

        function changeButtonColor() {
            $(".kp-button").each(function(i, obj) {
                let idMatkul = $(this).attr('id-matkul');
                let selected = JSON.parse(localStorage.getItem(idMatkul));
                if (selected !== null) {
                    if (idMatkul == selected.id) {
                        $(this).addClass("terpilih");
                        $(this).attr("terpilih", true);
                    }
                }
            });
        }

        function time(time) {
            const jam = Number.parseInt(time.substring(0, time.indexOf(":")));
            console.log(time);
            const menit = Number.parseInt(time.substring(time.indexOf(":") + 1));
            return jam * 60 + menit;
        }

        async function selectClass(selectedClass) {
            console.log(selectedClass);
            selectedClass.kelas.jadwal.forEach((kelas) => {
                const waktuMulai = time(kelas.mulai.toString());
                const waktuBerakhir = time(kelas.akhir.toString());
                const perbedaan = waktuBerakhir - waktuMulai;

                // $(".table-condensed tbody")

                const daftarHari = [
                    "Senin",
                    "Selasa",
                    "Rabu",
                    "Kamis",
                    "Jumat",
                    "Sabtu",
                    "Minggu",
                ];

                var test = `
                <div class="jadwal" kode-mata-kuliah="${selectedClass.kode}" kode-kelas="${selectedClass.kelas.kode}" style="height: calc(7.33333rem - 1px); margin-top: calc(3.28333rem + 1px);">
                    <div class="jadwal__detail">
                        <p>${selectedClass.nama}</p>
                        <p>Kelas ${selectedClass.kelas.kode}</p>
                        <p>${kelas.mulai} - ${kelas.akhir}</p>
                    </div>
                </div>
                `;

                let testN = Number.parseInt(waktuMulai / 60) - "07.00" + 1;
                console.log(testN);

                $(`.table-condensed tbody > tr:nth-child(${
                    Number.parseInt(waktuMulai / 60) -
                    "07.00" +
                    1
                })>td:nth-child(${
                    daftarHari.indexOf(kelas.hari) + 2
                })`).append(
                    test
                );
            })

        }

        $(".jadwal-place").on("DOMSubtreeModified", function(e) {
            changeButtonColor();
        });

        $(document).ready(function() {
            changeButtonColor();

            $(document).on("click", '.kp-button', async function(e) {
                const alreadySelected = $(this).attr("terpilih");
                const idMatkul = $(this).attr("id-matkul");
                if (typeof alreadySelected === 'undefined' || alreadySelected === false) {
                    console.log("clicked belum terpilih");
                    $(this).addClass("terpilih");
                    $(this).attr("terpilih", true);

                    const kodeKelas = $(this).attr("value");

                    const result = (await getMatkul(idMatkul))["data"][0];
                    const selectedClass = result.kelas.find(
                        (kelas) => kelas.kode == kodeKelas
                    );

                    let selectedMatkul = result;
                    selectedMatkul.kelas = selectedClass;
                    localStorage.setItem(selectedMatkul.id, JSON.stringify(selectedMatkul));
                    selectClass(selectedMatkul);
                    console.log(selectedMatkul);
                } else {
                    localStorage.removeItem(idMatkul);
                    $(this).removeClass("terpilih");
                    $(this).removeAttr("terpilih");
                    console.log("clicked sudah terpilih");
                }

            })
        });
    </script>
@endsection
