@extends('layouts.master')
@section('title') Setel Waktu - Sistem Pencahayaan Otomatis @endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <form action="/lampu/setel-waktu/{{ $lamp->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="nameInput" class="form-label">Nama</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="nameInput" name="lamp_name" placeholder="Lampu {{ $lamp->lamp_number }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="onTimeInput" class="form-label">Lampu Hidup</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" id="on_time" name="on_time" class="form-control" placeholder="Pilih waktu hidup" value="{{ old('on_time', $lamp->on_time) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="offTimeInput" class="form-label">Lampu Mati</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" id="off_time" name="off_time" class="form-control" placeholder="Pilih waktu mati" value="{{ old('off_time', $lamp->off_time) }}">
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Setel Waktu</button>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#on_time", {
            enableTime: true
            , noCalendar: true
            , dateFormat: "H:i"
            , time_24hr: true
        });

        flatpickr("#off_time", {
            enableTime: true
            , noCalendar: true
            , dateFormat: "H:i"
            , time_24hr: true
        });
    });

</script>
