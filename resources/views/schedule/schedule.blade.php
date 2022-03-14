@extends('layout.main') @section('css')
<link rel="stylesheet" href="{{ asset('css/jadwalStyle.css') }}" />
{{--
<link rel="stylesheet" href="{{ asset('responsive/responsive-jadwal.css') }}" />
--}} @endsection @section('content') {{--
<div class="work-in-progress" id="work-in-progress">
    <div class="container text-center">
        <h1>Oops Sorry! Work in Progress</h1>
        <div class="row">
            <div class="col-sm-12">
                <img src="source/Coding2.png" alt="" srcset="" />
            </div>
        </div>
    </div>
</div>
--}}

<section class="jadwal-kuliah" id="jadwal-kuliah">
    <div class="container-fluid text-center">
        <h1>JADWAL KULIAH</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="jadwal-searching">
                    <input
                        class="search-input"
                        type="search"
                        name="search"
                        id="search"
                        placeholder="Searching"
                    />
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
@endsection @section('script')
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

    //Function cari matkul
    function searchSchedule(query) {
        $.ajax({
            url: `schedule?search=${query}`,
            success: function (data) {
                $(".jadwal-place").html(data);
            },
        });
    }

    //Function ganti halaman
    function changePage(page, query) {
        $.ajax({
            url: `schedule?search=${query}&page=${page}`,
            success: function (data) {
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
        $(".kelas-info").each(function (i, obj) {
            const button = $(this).children(".kp-button");
            const idMatkul = button.attr("id-matkul");

            let selected = JSON.parse(localStorage.getItem(idMatkul));

            if (selected !== null) {
                if (idMatkul == selected.id) {
                    button.addClass("terpilih");
                    button.attr("terpilih", true);
                }
            }
        });
    }

    function time(time) {
        const jam = Number.parseInt(time.substring(0, time.indexOf(":")));
        const menit = Number.parseInt(time.substring(time.indexOf(":") + 1));
        const asd = jam * 60 + menit;
        return jam * 60 + menit;
    }

    function getStorageKey() {
        var values = [];

        for (var i = 0, len = localStorage.length; i < len; ++i) {
            values.push(localStorage.key(i));
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

            $(
                `.table-condensed tbody > tr:nth-child(${
                    Number.parseInt(waktuMulai / 60) - "07.00" + 1
                })>td:nth-child(${daftarHari.indexOf(kelas.hari) + 2})`
            ).append(test);
        });
    }

    async function removeClassTable(selectedClass) {
        const kodeMatkul = selectedClass.attr("kode-matkul");
        const kodeKelas = selectedClass.attr("value");
        const tabble = $(
            `.jadwal[kode-mata-kuliah="${kodeMatkul}"][kode-kelas="${kodeKelas}"]`
        );
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
        addClassTable(selectedMatkul);
        localStorage.setItem(selectedMatkul.id, JSON.stringify(selectedMatkul));
    }

    async function batalPilihKelas(kelas) {
        const idMatkul = kelas.attr("id-matkul");
        localStorage.removeItem(idMatkul);
        kelas.removeClass("terpilih");
        kelas.removeAttr("terpilih");
        removeClassTable(kelas);
    }

    function tabrakanStorage() {
        $(".kelas-info").each(function (i, obj) {
            const button = $(this).children(".kp-button");
            const info = $(this).children(".jadwal-info").html().split(" ");

            const hari = info[0];
            const time = info[1].split("-");
            const awal = time[0];
            const akhir = time[1];

            const jadwal = {
                hari: hari,
                mulai: awal,
                akhir: akhir,
            };

            let storage = getStorageKey();

            storage.forEach((key) => {
                let selectedClasses = JSON.parse(localStorage.getItem(key));
                selectedClasses.kelas.jadwal.forEach((sch) => {
                    if (bertabrakan(jadwal, sch)) {
                        if (button.attr("terpilih") != "true") {
                            button.addClass("kelas-tabrakan");
                            button.attr("kelas-tabrakan", true);
                        }
                    }
                });
            });
        });
    }

    async function tabrakan(selectedKelas) {
        const kodeKelas = selectedKelas.attr("value");
        const idMatkul = selectedKelas.attr("id-matkul");
        const result = (await getMatkul(idMatkul))["data"][0];
        const selectedClass = result.kelas.find(
            (kelas) => kelas.kode == kodeKelas
        );
        $(".kelas-info").each(function (i, obj) {
            const button = $(this).children(".kp-button");
            const info = $(this).children(".jadwal-info").html().split(" ");
            const hari = info[0];
            const time = info[1].split("-");
            const awal = time[0];
            const akhir = time[1];
            const jadwal = {
                hari: hari,
                mulai: awal,
                akhir: akhir,
            };
            // console.table(selectedClass);
            selectedClass.jadwal.forEach((sch) => {
                if (bertabrakan(jadwal, sch)) {
                    if (button.attr("terpilih") != "true") {
                        button.addClass("kelas-tabrakan");
                        button.attr("kelas-tabrakan", true);
                    }
                }
            });
        });
    }

    function bertabrakan(jadwal1, jadwal2) {
        if (jadwal1.hari !== jadwal2.hari) return false;

        const waktuMulai1 = time(jadwal1.mulai);
        const waktuAkhir1 = time(jadwal1.akhir);
        const waktuMulai2 = time(jadwal2.mulai);
        const waktuAkhir2 = time(jadwal2.akhir);

        if (waktuAkhir2 <= waktuMulai1) {
            return false;
        } else {
            return !(waktuMulai2 >= waktuAkhir1);
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //Untuk ganti halaman
        $(document).on("click", ".page-item", function (e) {
            e.preventDefault();
            var page = $(this).children().attr("href").split("page=")[1];
            var q = $(".search-input").val();
            changePage(page, q);
        });

        //Untuk search matkul
        $(document).on("click", ".search", function (e) {
            var query = $(".search-input").val();
            searchSchedule(query);
        });
    });

    $(".jadwal-place").on("DOMSubtreeModified", function (e) {
        changeButtonColor();
        tabrakanStorage();
    });

    $(document).ready(function () {
        changeButtonColor();
        tabrakanStorage();

        let selectedClasses = getStorageKey();
        selectedClasses.forEach((key) => {
            let classes = JSON.parse(localStorage.getItem(key));
            addClassTable(classes);
        });

        $(document).on("click", ".kp-button", async function (e) {
            const alreadySelected = $(this).attr("terpilih");
            const idMatkul = $(this).attr("id-matkul");
            if (
                typeof alreadySelected === "undefined" ||
                alreadySelected === "false"
            ) {
                console.log("Test");
                pilihKelas($(this));
                await tabrakan($(this));
            } else {
                batalPilihKelas($(this));
            }
        });
    });
</script>
@endsection
