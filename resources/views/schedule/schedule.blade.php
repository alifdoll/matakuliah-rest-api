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
            <h1>JADWAL KULIAH</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="jadwal-searching">
                        <input type="search" name="search" id="search" placeholder="Searching">
                        <input type="button" value="Search">
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
        $(document).on('click', '.page-item', function(e) {
            // console.log($(this).children().attr('href'));
            e.preventDefault();
            var page = $(this).children().attr('href').split('page=')[1];
            fetch_data(page);
        })
    });

    function fetch_data(page) {
        console.log('test');
        $.ajax(
            {
                url: `schedule/fetchajax?page=${page}`,
                success: function(data) {
                    console.log('test');
                    console.log(data);
                    $('.jadwal-place').html(data);
                }
            }
        )
    }
</script>
@endsection