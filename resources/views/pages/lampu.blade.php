@extends('layouts.master')
@section('title') Lampu - Sistem Pencahayaan Otomatis @endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Lampu 1</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-bulb text-success"></i>
                                    </span>
                                </div>
                                <div class="m-3">
                                    <h4 class="fs-22 fw-semibold ff-secondary"><span>Hidup</span></h4>
                                </div>
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <a href="/aturJam" title="Atur Waktu Hidup/Mati"><i class="bx bx-alarm-add text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Lampu 2</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-dark-subtle rounded fs-3">
                                        <i class="bx bx-bulb text-dark"></i>
                                    </span>
                                </div>
                                <div class="m-3">
                                    <h4 class="fs-22 fw-semibold ff-secondary text-danger "><span>Mati</span></h4>
                                </div>
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <a href="/aturJam" title="Atur Waktu Hidup/Mati"><i class="bx bx-alarm-add text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Lampu 3</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-bulb text-success"></i>
                                    </span>
                                </div>
                                <div class="m-3">
                                    <h4 class="fs-22 fw-semibold ff-secondary"><span>Hidup</span></h4>
                                </div>
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <a href="/aturJam" title="Atur Waktu Hidup/Mati"><i class="bx bx-alarm-add text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Lampu 4</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-dark-subtle rounded fs-3">
                                        <i class="bx bx-bulb text-dark"></i>
                                    </span>
                                </div>
                                <div class="m-3">
                                    <h4 class="fs-22 fw-semibold ff-secondary text-danger "><span>Mati</span></h4>
                                </div>
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <a href="/aturJam" title="Atur Waktu Hidup/Mati"><i class="bx bx-alarm-add text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

            </div> <!-- end row-->
        </div> <!-- end .h-100-->
    </div> <!-- end col -->
</div>

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
