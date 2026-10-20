@extends('layouts.app')

@section('title', 'Home - Sovereign Noir')

@section('content')

<div class="container mt-5 mb-5">

    {{-- BRAND INTRODUCTION --}}
    <div class="text-center py-5 mb-5">
        <p class="mb-3" style="color: #c5a46d; letter-spacing: 5px;">
            S O V E R E I G N &nbsp; N O I R
        </p>

        <h1 class="fw-bold text-white mb-4"
            style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: 2px;">
            DRIVE BEYOND<br>
            <span style="color: #c5a46d;">ORDINARY.</span>
        </h1>

        <p class="mx-auto mb-4"
           style="color: #b8b8b8; max-width: 650px; line-height: 1.9;">
            Experience the art of luxury driving.
            Temukan koleksi kendaraan premium yang menghadirkan
            kenyamanan, performa, dan pengalaman berkendara eksklusif.
        </p>

        
        <a href="{{ route('cars.index') }}"
            class="btn px-4 py-3 rounded-0"
            style="background: #c5a46d; color: #111; font-weight: bold; letter-spacing: 1px;">
                EXPLORE OUR CARS &nbsp;›
        </a>

    </div>


    {{-- FEATURED CARS --}}
    <div class="mb-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">
            <div>
                <p class="mb-2"
                   style="color: #c5a46d; letter-spacing: 3px;">
                    THE COLLECTION
                </p>

                <h2 class="fw-bold text-white mb-0">
                    Featured Cars
                </h2>
            </div>

            <a href="{{ url('/project') }}"
               class="text-decoration-none"
               style="color: #c5a46d;">
                View All Cars →
            </a>
        </div>
    </div>

    <div class="row g-4 mb-5">

        {{-- LAMBORGHINI --}}
        <div class="col-md-4">
            <div class="h-100 p-3"
                 style="background: #151515; border: 1px solid #292929;">
                <img src="{{ asset('foto/images/lamborghini-revuelto.jpg') }}"
                     alt="Lamborghini Revuelto"
                     class="img-fluid w-100 mb-3"
                     style="height: 220px; object-fit: cover;">

                <p class="mb-2"
                   style="color: #c5a46d; font-size: 12px; letter-spacing: 2px;">
                    PERFORMANCE
                </p>

                <h3 class="h5 fw-bold text-white">
                    Lamborghini Revuelto
                </h3>

                <p class="mb-3" style="color: #aaa;">
                    Performa agresif dengan desain supercar yang ikonik.
                </p>

                <a href="{{ url('/project') }}"
                   class="text-decoration-none"
                   style="color: #c5a46d;">
                    Discover More →
                </a>
            </div>
        </div>

        {{-- FERRARI --}}
        <div class="col-md-4">
            <div class="h-100 p-3"
                 style="background: #151515; border: 1px solid #292929;">
                <img src="{{ asset('foto/images/ferrari-sf90-xx.jpg') }}"
                     alt="Ferrari SF90 XX"
                     class="img-fluid w-100 mb-3"
                     style="height: 220px; object-fit: cover;">

                <p class="mb-2"
                   style="color: #c5a46d; font-size: 12px; letter-spacing: 2px;">
                    EXCELLENCE
                </p>

                <h3 class="h5 fw-bold text-white">
                    Ferrari SF90 XX
                </h3>

                <p class="mb-3" style="color: #aaa;">
                    Perpaduan teknologi modern dan karakter sport yang kuat.
                </p>

                <a href="{{ url('/project') }}"
                   class="text-decoration-none"
                   style="color: #c5a46d;">
                    Discover More →
                </a>
            </div>
        </div>

        {{-- ROLLS-ROYCE --}}
        <div class="col-md-4">
            <div class="h-100 p-3"
                 style="background: #151515; border: 1px solid #292929;">
                <img src="{{ asset('foto/images/rolls-royce-ghost.jpg') }}"
                     alt="Rolls-Royce Ghost"
                     class="img-fluid w-100 mb-3"
                     style="height: 220px; object-fit: cover;">

                <p class="mb-2"
                   style="color: #c5a46d; font-size: 12px; letter-spacing: 2px;">
                    PRESTIGE
                </p>

                <h3 class="h5 fw-bold text-white">
                    Rolls-Royce Ghost
                </h3>

                <p class="mb-3" style="color: #aaa;">
                    Kemewahan elegan dengan kenyamanan kelas premium.
                </p>

                <a href="{{ url('/project') }}"
                   class="text-decoration-none"
                   style="color: #c5a46d;">
                    Discover More →
                </a>
            </div>
        </div>

    </div>


    {{-- BRAND IDENTITY --}}
    <div class="row align-items-center g-4 py-5 px-3"
         style="background: #151515; border: 1px solid #292929;">

        <div class="col-lg-5">
            <p class="mb-3"
               style="color: #c5a46d; letter-spacing: 3px;">
                OUR IDENTITY
            </p>

            <h2 class="fw-bold text-white"
                style="font-size: clamp(2rem, 4vw, 3rem);">
                More Than<br>
                <span style="color: #c5a46d;">Just A Drive.</span>
            </h2>
        </div>

        <div class="col-lg-7">
            <p style="color: #b8b8b8; line-height: 2;">
                Sovereign Noir hadir untuk memberikan pengalaman
                berkendara yang lebih dari sekadar perjalanan.
                Kami mengutamakan kualitas kendaraan, kenyamanan,
                dan karakter eksklusif bagi setiap pelanggan.
            </p>

            <p class="mb-0" style="color: #b8b8b8; line-height: 2;">
                Dari supercar berperforma tinggi hingga kendaraan
                mewah yang elegan, setiap koleksi dipilih untuk
                menghadirkan pengalaman berkendara yang berkesan.
            </p>
        </div>

    </div>

</div>

@endsection