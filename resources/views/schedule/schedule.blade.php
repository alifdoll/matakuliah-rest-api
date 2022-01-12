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
        const daftarHari = [
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jumat",
            "Sabtu",
            "Minggu",
        ];

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
            const menit = Number.parseInt(time.substring(time.indexOf(":") + 1));
            return jam * 60 + menit;
        }

        function getStorageKey() {

            var values = [];

            for (var i = 0, len = localStorage.length; i < len; ++i) {
                values.push((localStorage.key(i)));
            }

            return values;
        }

        async function addClassTable(selectedClass) {
            selectedClass.kelas.jadwal.forEach((kelas) => {
                const waktuMulai = time(kelas.mulai.toString());
                const waktuBerakhir = time(kelas.akhir.toString());
                const perbedaan = waktuBerakhir - waktuMulai;

                var test = `
                <div class="jadwal" kode-mata-kuliah="${selectedClass.kode}" kode-kelas="${selectedClass.kelas.kode}" style="height: calc(7.33333rem - 1px); margin-top: calc(3.28333rem + 1px);">
                    <div class="jadwal__detail">
                        <p>${selectedClass.nama}</p>
                        <p>Kelas ${selectedClass.kelas.kode}</p>
                        <p>${kelas.mulai} - ${kelas.akhir}</p>
                    </div>
                </div>
                `;

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

        async function removeClassTable(selectedClass) {
            const kodeMatkul = selectedClass.attr("kode-matkul");
            const kodeKelas = selectedClass.attr("value");
            const tabble = $(`.jadwal[kode-mata-kuliah="${kodeMatkul}"][kode-kelas="${kodeKelas}"]`);
            tabble.remove();
        }

        async function pilihKelas(selectedKelas) {
            selectedKelas.addClass("terpilih");
            selectedKelas.attr("terpilih", true);

            const kodeKelas = selectedKelas.attr("value");
            const idMatkul = selectedKelas.attr("id-matkul");

            const result = (await getMatkul(idMatkul))["data"][0];
            const selectedClass = result.kelas.find(
                (kelas) => kelas.kode == kodeKelas
            );

            let selectedMatkul = result;
            selectedMatkul.kelas = selectedClass;
            localStorage.setItem(selectedMatkul.id, JSON.stringify(selectedMatkul));
            addClassTable(selectedMatkul);
        }

        async function batalPilihKelas(kelas) {
            const idMatkul = kelas.attr("id-matkul");
            localStorage.removeItem(idMatkul);
            kelas.removeClass("terpilih");
            kelas.removeAttr("terpilih");
            removeClassTable(kelas);
        }

        $(".jadwal-place").on("DOMSubtreeModified", function(e) {
            changeButtonColor();
        });

        $(document).ready(function() {
            changeButtonColor();

            let selectedClasses = getStorageKey();
            selectedClasses.forEach((key) => {
                let classes = JSON.parse(localStorage.getItem(key));
                console.log(classes)
                addClassTable(classes);
            })

            $(document).on("click", '.kp-button', async function(e) {
                const alreadySelected = $(this).attr("terpilih");
                const idMatkul = $(this).attr("id-matkul");
                if (typeof alreadySelected === 'undefined' || alreadySelected === false) {
                    pilihKelas($(this));
                } else {
                    batalPilihKelas($(this));
                }

            })
        });
    </script>
@endsection
