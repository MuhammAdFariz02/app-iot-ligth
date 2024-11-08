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
                @foreach ($lamp as $l)
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Lampu {{ $l->lamp_number }}</p>
                                    <hr class="text-dark">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title {{ $l->status ? 'bg-warning' : 'bg-dark-subtle' }} rounded fs-3" id="lamp-{{ $l->id }}">
                                        <i class="bx bx-bulb text-dark"></i>
                                    </span>
                                </div>
                                <div class="m-3">
                                    <h4 class="fs-22 fw-semibold ff-secondary"><span id="lamp-status-{{ $l->id }}">{{ $l->status ? 'Hidup' : 'Mati' }}</span></h4>
                                </div>
                                <div class="avatar-sm items-center">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <a href="/lampu/setel-waktu/{{ $l->id }}" title="Setel Waktu Hidup/Mati"><i class="bx bx-alarm-add text-success"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                @endforeach
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
<script>
    // Ambil CSRF token dari meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    setInterval(() => {
        fetch(`{{ route('getLampData') }}`, {
            method: 'GET', // Jika GET request, CSRF biasanya tidak perlu, tetapi jika POST maka diperlukan
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Access-Control-Allow-Origin': 'no-cors',
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Memastikan data yang diterima ditampilkan ke console

            document.getElementById('lamp-1').classList.remove('bg-dark-subtle');
            document.getElementById('lamp-1').classList.add('bg-warning');

            let i = 1;
            data.forEach(lamp => {
                if (!lamp.status) {
                    document.getElementById(`lamp-${lamp.id}`).classList.add('bg-dark-subtle');
                    document.getElementById(`lamp-${lamp.id}`).classList.remove('bg-warning');
                    document.getElementById(`lamp-status-${lamp.id}`).textContent = lamp.status ? 'Hidup' : 'Mati';
                } else {
                    document.getElementById(`lamp-${lamp.id}`).classList.add('bg-warning');
                    document.getElementById(`lamp-${lamp.id}`).classList.remove('bg-dark-subtle');
                    document.getElementById(`lamp-status-${lamp.id}`).textContent = lamp.status ? 'Hidup' : 'Mati';
                }

                i++;
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error); // Menangkap dan menampilkan error
        });
    }, 1000);
</script>

@endsection

