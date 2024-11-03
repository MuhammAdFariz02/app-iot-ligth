@extends('layouts.master')
@section('title') Dashboard - Sistem Pencahayaan Otomatis @endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col-12 mb-4">
        <div class="card ribbon-box border shadow-none mb-lg-0">
            <div class="card-body">
                <div class="ribbon ribbon-success round-shape">Halo !</div>
                <div class="ribbon-content mt-4 text-muted">
                    <p class="mb-0">Selamat datang di Sistem Pencahayaan Otomatis! Atur pencahayaan sesuai kebutuhan Anda dengan mudah dan efisien. 
                        Mari mengenal lebih jauh sistem dan komponen yang digunakan, mulai dari ESP32 sebagai pusat kendali hingga relay otomatis yang mengatur pencahayaan sesuai jadwal Anda. Selamat menggunakan!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="h-100">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="rounded-start img-fluid h-100 object-fit-cover" src="{{ URL::asset('build/images/small/img-12.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Give your text a good structure</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text mb-2">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Manage white space in responsive layouts ?</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text mb-2">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="rounded-end img-fluid h-100 object-fit-cover" src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="Card image">
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
        
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="rounded-start img-fluid h-100 object-fit-cover" src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="Card image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">Give your text a good structure</h5>
                                            <p class="card-text text-muted mb-0">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
        
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">Manage white space in responsive layouts ?</h5>
                                            <p class="card-text text-muted mb-0">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="rounded-end img-fluid h-100 object-fit-cover" src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="Card image">
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
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
