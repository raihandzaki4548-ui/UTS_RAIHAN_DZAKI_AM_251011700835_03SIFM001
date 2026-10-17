@extends('layouts.app')

@section('title', 'Our Collection | Sovereign Noir')

@section('content')
@if (session('success'))
    <div class="container mt-4">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

<div style="position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 650px;
            background: radial-gradient(
                ellipse at 50% 0%,
                rgba(197, 164, 109, 0.10),
                transparent 70%
            );
            pointer-events: none;
            z-index: -1;">
</div>

<div class="container py-5 position-relative"
     style="isolation: isolate;">   

    {{-- PAGE HEADER --}}
    <div class="text-center mb-5">
        <p class="text-uppercase mb-3"
           style="color: #c5a46d; letter-spacing: 5px; font-size: 12px;">
            THE ART OF LUXURY DRIVING
        </p>

        <h1 class="fw-bold text-white mb-3"
            style="font-size: clamp(2.2rem, 5vw, 3.8rem); letter-spacing: 3px;">
            OUR COLLECTION
        </h1>

        <div class="mx-auto mb-3"
             style="width: 65px; height: 2px; background: #c5a46d;">
        </div>

        <p class="mx-auto"
           style="color: #aaa; max-width: 600px; line-height: 1.9;">
            Discover an exclusive collection of luxury vehicles,
            selected to deliver exceptional comfort, performance,
            and unforgettable journeys.
        </p>
    </div>

    {{-- CAR COLLECTION --}}
    <div class="row g-4">

        @forelse ($cars as $car)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 rounded-0"
                     style="background: #121212; border: 1px solid #30291e !important;
                            transition: transform 0.25s ease, border-color 0.25s ease;">

                    {{-- CAR IMAGE --}}
                    <div class="position-relative overflow-hidden">
                        <img
                            src="{{ asset('foto/images/' . $car->image) }}"
                            class="card-img-top"
                            alt="{{ $car->brand }} {{ $car->model }}"
                            loading="lazy"
                            style="height: 235px; object-fit: cover;"
                        >

                        <div class="position-absolute bottom-0 start-0 w-100"
                             style="height: 65px;
                                    background: linear-gradient(transparent, rgba(0,0,0,0.65));">
                        </div>

                        <span class="position-absolute top-0 start-0 m-3 px-3 py-2"
                              style="background: rgba(11,11,11,0.85);
                                     color: #c5a46d; font-size: 10px;
                                     letter-spacing: 2px;">
                            {{ strtoupper($car->brand) }}
                        </span>
                    </div>

                    {{-- CAR INFORMATION --}}
                    <div class="card-body d-flex flex-column p-4">

                        <p class="text-uppercase mb-2"
                           style="color: #c5a46d; font-size: 10px; letter-spacing: 2px;">
                            {{ $car->year }} &nbsp; / &nbsp; {{ $car->transmission }}
                        </p>

                        <h4 class="fw-bold text-white mb-3"
                            style="font-size: 1.25rem;">
                            {{ $car->model }}
                        </h4>

                        <p class="mb-4"
                           style="color: #aaa; font-size: 14px; line-height: 1.8;">
                            {{ $car->description }}
                        </p>

                        <div class="mt-auto pt-3"
                             style="border-top: 1px solid #30291e;">

                            <p class="mb-1"
                               style="color: #888; font-size: 11px; letter-spacing: 1px;">
                                DAILY RENTAL
                            </p>

                            <div class="d-flex align-items-baseline flex-wrap gap-1 mb-3">
                                <span class="fw-bold"
                                      style="color: #c5a46d; font-size: 1.2rem;">
                                    Rp {{ number_format($car->rent_price, 0, ',', '.') }}
                                </span>

                                <small style="color: #888;">/ hari</small>
                            </div>

                            <a
                                href="{{ route('cars.show', $car->id) }}"
                                class="btn w-100 rounded-0 py-3 fw-bold"
                                style="background: #c5a46d; color: #111;
                                       border: 1px solid #c5a46d;
                                       font-size: 12px; letter-spacing: 1.5px;"
                            >
                                VIEW DETAILS &nbsp; →
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center py-5">
                <p class="mb-2" style="color: #c5a46d; letter-spacing: 2px;">
                    THE COLLECTION
                </p>

                <h4 class="text-white">Belum ada mobil tersedia.</h4>

                <p style="color: #aaa;">
                    Silakan kembali lagi untuk melihat koleksi kendaraan kami.
                </p>
            </div>

        @endforelse

    </div>

    {{-- BOTTOM BRAND STATEMENT --}}
    <div class="text-center mt-5 pt-4">
        <p class="mb-2"
           style="color: #c5a46d; font-size: 11px; letter-spacing: 3px;">
            SOVEREIGN NOIR
        </p>

        <p class="mb-0" style="color: #888; font-size: 13px;">
            Exceptional Cars. Extraordinary Journeys.
        </p>
    </div>

</div>

@endsection
