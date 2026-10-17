@extends('layouts.app')

@section('title', 'SOVEREIGN NOIR | Luxury Car Rental')

@section('content')

<div class="container-fluid px-0">

    <!-- HERO SECTION -->
    <section class="position-relative d-flex align-items-center"
        style="
            min-height: 80vh;
            background:
                linear-gradient(90deg, rgba(0,0,0,0.95), rgba(0,0,0,0.55), rgba(0,0,0,0.25)),
                url('{{ asset('foto/images/lamborghini-revuelto.jpg') }}') center/cover no-repeat;
        ">

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 col-xl-7">

                    <p class="text-uppercase mb-3"
                        style="color: #d4af72; letter-spacing: 5px;">
                        The Art of Luxury Driving
                    </p>

                    <h1 class="display-2 fw-bold text-white mb-4">
                        SOVEREIGN<br>
                        <span style="color: #d4af72;">NOIR</span>
                    </h1>

                    <p class="fs-5 text-light mb-4"
                        style="max-width: 560px; line-height: 1.8;">
                        Elevate every journey with our exclusive collection
                        of luxury and performance cars. Exceptional vehicles,
                        extraordinary experiences.
                    </p>

                    <a href="{{ route('cars.index') }}"
                        class="btn px-4 py-3 fw-bold"
                        style="
                            background-color: #d4af72;
                            color: #111;
                            letter-spacing: 1px;
                        ">
                        EXPLORE OUR COLLECTION
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- BRAND INTRODUCTION -->
    <section class="container py-5">
        <div class="row align-items-center g-4 py-4">

            <div class="col-lg-6">
                <p class="text-uppercase mb-2"
                    style="color: #d4af72; letter-spacing: 3px;">
                    Beyond Ordinary
                </p>

                <h2 class="fw-bold mb-4">
                    Luxury Is Not Just a Destination.
                </h2>
            </div>

            <div class="col-lg-6">
                <p class="text-secondary mb-0"
                    style="line-height: 1.9;">
                    SOVEREIGN NOIR menghadirkan pengalaman berkendara
                    premium melalui pilihan kendaraan eksklusif yang
                    mengutamakan kenyamanan, performa, dan gaya.
                    Temukan mobil yang sesuai dengan perjalanan istimewa Anda.
                </p>

                <a href="{{ route('cars.index') }}"
                    class="btn btn-outline-light mt-4 px-4 py-2">
                    DISCOVER OUR CARS →
                </a>
            </div>

        </div>
    </section>

    <!-- BRAND VALUES -->
    <section class="container pb-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="h-100 p-4"
                    style="background: #161616; border: 1px solid #333;">
                    <h5 style="color: #d4af72;">01 — Exclusive Collection</h5>
                    <p class="text-secondary mb-0">
                        Pilihan kendaraan premium untuk pengalaman
                        berkendara yang istimewa.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4"
                    style="background: #161616; border: 1px solid #333;">
                    <h5 style="color: #d4af72;">02 — Refined Comfort</h5>
                    <p class="text-secondary mb-0">
                        Kenyamanan dan kemewahan untuk menemani
                        setiap perjalanan Anda.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4"
                    style="background: #161616; border: 1px solid #333;">
                    <h5 style="color: #d4af72;">03 — Exceptional Performance</h5>
                    <p class="text-secondary mb-0">
                        Rasakan karakter dan performa kendaraan
                        pilihan dalam setiap perjalanan.
                    </p>
                </div>
            </div>

        </div>
    </section>

</div>

@endsection
