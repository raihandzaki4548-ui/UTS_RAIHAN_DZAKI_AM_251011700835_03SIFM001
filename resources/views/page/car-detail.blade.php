@extends('layouts.app')

@section('title', 'Detail Mobil - ' . $car->brand . ' ' . $car->model)

@section('content')

<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('cars.index') }}"
           class="btn"
           style="background: #c5a46d; color: #111;
                  border-radius: 0; padding: 10px 20px;
                  font-weight: 700;">
            ← Kembali ke Our Cars
        </a>
    </div>

    <div class="mb-4">
        <p style="color: #c5a46d; font-weight: 700;
                  letter-spacing: 3px; margin-bottom: 8px;">
            SOVEREIGN NOIR COLLECTION
        </p>

        <h1 style="color: white; font-weight: 800;
                   font-size: clamp(28px, 4vw, 42px);">
            Detail Kendaraan
        </h1>

        <p style="color: #aaa;">
            Discover exceptional performance and timeless luxury.
        </p>
    </div>

    <div class="row g-4 align-items-stretch">

        <div class="col-lg-7">
            <div style="background: #121212;
                        border: 1px solid #30291e;
                        padding: 8px;
                        height: fit-content;">

                <img
                    src="{{ asset('foto/images/' . $car->image) }}"
                    alt="{{ $car->brand }} {{ $car->model }}"
                    class="d-block w-100"
                    style="width: 100%; height: auto; object-fit: contain;"
                >

            </div>
        </div>

        <div class="col-lg-5">
            <div style="background: #121212;
                        border: 1px solid #30291e;
                        padding: 28px; height: 100%; color: white;">

                <p style="color: #c5a46d; font-size: 13px;
                          font-weight: 700; letter-spacing: 3px;">
                    {{ strtoupper($car->brand) }}
                </p>

                <h2 style="font-size: clamp(24px, 3vw, 32px);
                           font-weight: 800; line-height: 1.3;
                           overflow-wrap: anywhere; margin-bottom: 20px;">
                    {{ $car->model }}
                </h2>

                <div style="width: 60px; height: 3px;
                            background: #c5a46d; margin-bottom: 24px;">
                </div>

                <h5 style="font-weight: 700; color: #c5a46d;
                           margin-bottom: 12px;">
                    Vehicle Description
                </h5>

                <p style="color: #ddd; line-height: 1.9;
                          overflow-wrap: anywhere;">
                    {{ $car->description ?: 'Informasi kendaraan belum tersedia.' }}
                </p>

                <hr style="border-color: #403728; margin: 28px 0;">

                <h5 style="color: #c5a46d; font-weight: 700;
                           margin-bottom: 16px;">
                    Vehicle Specifications
                </h5>

                <div class="d-flex justify-content-between py-3"
                     style="border-bottom: 1px solid #30291e;">
                    <span style="color: #aaa;">Brand</span>
                    <span>{{ $car->brand }}</span>
                </div>

                <div class="d-flex justify-content-between py-3"
                     style="border-bottom: 1px solid #30291e;">
                    <span style="color: #aaa;">Model</span>
                    <span class="text-end">{{ $car->model }}</span>
                </div>

                <div class="d-flex justify-content-between py-3"
                     style="border-bottom: 1px solid #30291e;">
                    <span style="color: #aaa;">Year</span>
                    <span>{{ $car->year }}</span>
                </div>

                <div class="d-flex justify-content-between py-3">
                    <span style="color: #aaa;">Transmission</span>
                    <span>{{ $car->transmission }}</span>
                </div>

                <hr style="border-color: #403728; margin: 20px 0;">

                <p style="color: #aaa; font-size: 12px;
                          letter-spacing: 2px; margin-bottom: 8px;">
                    DAILY RENTAL PRICE
                </p>

                <h3 style="color: #c5a46d; font-weight: 800;">
                    Rp {{ number_format($car->rent_price, 0, ',', '.') }}
                    <small style="font-size: 14px; color: #aaa;">
                        / hari
                    </small>
                </h3>

                <a href="{{ route('booking.create', $car->id) }}"
                   class="btn w-100 mt-4"
                   style="background: #c5a46d; color: #111;
                          padding: 12px; border-radius: 0;
                          font-weight: 700; letter-spacing: 1px;">
                    BOOK THIS CAR →
                </a>

                <a href="{{ route('cars.index') }}"
                   class="btn w-100 mt-3"
                   style="border: 1px solid #c5a46d; color: #c5a46d;
                          padding: 12px; border-radius: 0;
                          font-weight: 700; letter-spacing: 1px;">
                    EXPLORE MORE CARS →
                </a>

            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <p style="color: #888; font-size: 13px;">
            SOVEREIGN NOIR — Exceptional Cars. Extraordinary Journeys.
        </p>
    </div>

</div>

@endsection
