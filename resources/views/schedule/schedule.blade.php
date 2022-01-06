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
    $(document).ready(function () {
        $(document).on("click", ".page-item", function (e) {
            e.preventDefault();
            var page = $(this).children().attr("href").split("page=")[1];
            var q = $(".search-input").val();
            fetch_data(page, q);
        });

        $(document).on("click", ".search", function (e) {
            var query = $(".search-input").val();
            fetch_data_search(query);
        });
    });

    function fetch_data_search(query) {
        $.ajax({
            url: `schedule?search=${query}`,
            success: function (data) {
                $(".jadwal-place").html(data);
            },
        });
    }

    function fetch_data(page, query) {
        $.ajax({
            url: `schedule?search=${query}&page=${page}`,
            success: function (data) {
                $(".jadwal-place").html(data);
            },
        });
    }
</script>
@endsection
