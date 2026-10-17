@extends('layouts.app')

@section('title', 'About | SOVEREIGN NOIR')

@section('content')

<div class="position-relative overflow-hidden">

    {{-- BACKGROUND GOLD GLOW --}}
    <div style="position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 600px;
                background: radial-gradient(
                    ellipse at 50% 0%,
                    rgba(197, 164, 109, 0.12),
                    transparent 70%
                );
                pointer-events: none;">
    </div>

    <div class="container py-5 position-relative">

        {{-- PAGE HEADER --}}
        <div class="text-center py-5">

            <p class="text-uppercase mb-3"
               style="color: #c5a46d;
                      letter-spacing: 5px;
                      font-size: 12px;">
                OUR STORY & PHILOSOPHY
            </p>

            <h1 class="fw-bold text-white mb-3"
                style="font-size: clamp(2.2rem, 5vw, 3.8rem);
                       letter-spacing: 4px;">
                SOVEREIGN NOIR
            </h1>

            <div class="mx-auto mb-4"
                 style="width: 65px;
                        height: 2px;
                        background: #c5a46d;">
            </div>

            <p class="mx-auto"
               style="color: #aaa;
                      max-width: 700px;
                      line-height: 2;
                      font-size: 15px;">
                SOVEREIGN NOIR adalah layanan penyewaan mobil mewah
                yang menghadirkan kenyamanan, performa, dan pengalaman
                berkendara eksklusif untuk setiap perjalanan.
                Kami percaya bahwa setiap perjalanan memiliki cerita,
                dan setiap kendaraan harus memberikan pengalaman yang istimewa.
            </p>

            <a href="{{ route('cars.index') }}"
               class="btn mt-4 rounded-0 px-4 py-3 fw-bold"
               style="background: #c5a46d;
                      color: #111;
                      border: 1px solid #c5a46d;
                      font-size: 12px;
                      letter-spacing: 1.5px;">
                EXPLORE OUR CARS &nbsp; →
            </a>

        </div>

        {{-- BRAND VALUES --}}
        <div class="row g-4 mt-2 mb-5">

            <div class="col-md-4">
                <div class="h-100 p-4 text-center"
                     style="background: #121212;
                            border: 1px solid #30291e;">

                    <div class="mb-3"
                         style="color: #c5a46d; font-size: 30px;">
                        ◆
                    </div>

                    <h5 class="text-white fw-bold mb-3">
                        EXCLUSIVITY
                    </h5>

                    <p class="mb-0"
                       style="color: #aaa;
                              font-size: 14px;
                              line-height: 1.8;">
                        Koleksi kendaraan pilihan untuk pengalaman
                        berkendara yang lebih istimewa.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4 text-center"
                     style="background: #121212;
                            border: 1px solid #30291e;">

                    <div class="mb-3"
                         style="color: #c5a46d; font-size: 30px;">
                        ◈
                    </div>

                    <h5 class="text-white fw-bold mb-3">
                        COMFORT
                    </h5>

                    <p class="mb-0"
                       style="color: #aaa;
                              font-size: 14px;
                              line-height: 1.8;">
                        Mengutamakan kenyamanan untuk menemani
                        setiap perjalanan Anda.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4 text-center"
                     style="background: #121212;
                            border: 1px solid #30291e;">

                    <div class="mb-3"
                         style="color: #c5a46d; font-size: 30px;">
                        ✦
                    </div>

                    <h5 class="text-white fw-bold mb-3">
                        PERFORMANCE
                    </h5>

                    <p class="mb-0"
                       style="color: #aaa;
                              font-size: 14px;
                              line-height: 1.8;">
                        Perpaduan karakter, performa, dan gaya
                        dalam satu pengalaman berkendara.
                    </p>

                </div>
            </div>

        </div>

        {{-- BRAND STATEMENT --}}
        <div class="text-center py-4">
            <p class="mb-2"
               style="color: #c5a46d;
                      font-size: 11px;
                      letter-spacing: 4px;">
                SOVEREIGN NOIR
            </p>

            <p class="mb-0"
               style="color: #888;
                      font-size: 13px;">
                Exceptional Cars. Extraordinary Journeys.
            </p>
        </div>

    </div>

</div>

@endsection
