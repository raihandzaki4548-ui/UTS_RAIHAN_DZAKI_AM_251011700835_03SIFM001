@extends('layouts.app')

@section('title', 'Booking Kendaraan - SOVEREIGN NOIR')

@section('content')

<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('cars.show', $car->id) }}"
           class="btn"
           style="background: #c5a46d; color: #111;
                  padding: 10px 20px; border-radius: 0;
                  font-weight: 700;">
            ← Kembali ke Detail Mobil
        </a>
    </div>

    <div class="mb-4">
        <p style="color: #c5a46d; font-weight: 700;
                  letter-spacing: 3px;">
            SOVEREIGN NOIR COLLECTION
        </p>

        <h1 style="color: white; font-weight: 800;">
            Booking Kendaraan
        </h1>

        <p style="color: #aaa;">
            Reserve your luxury experience with us.
        </p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row g-4">

        <div class="col-lg-5">
            <div style="background: #121212;
                        border: 1px solid #30291e;
                        padding: 20px; color: white;">

                <img
                    src="{{ asset('foto/images/' . $car->image) }}"
                    alt="{{ $car->brand }} {{ $car->model }}"
                    class="w-100 mb-4"
                    style="height: auto; object-fit: contain;"
                >

                <p style="color: #c5a46d; font-weight: 700;
                          letter-spacing: 2px;">
                    {{ strtoupper($car->brand) }}
                </p>

                <h3 style="font-weight: 800;">
                    {{ $car->model }}
                </h3>

                <p style="color: #aaa;">
                    Tahun {{ $car->year }} |
                    {{ $car->transmission }}
                </p>

                <hr style="border-color: #403728;">

                <p style="color: #aaa; margin-bottom: 8px;">
                    DAILY RENTAL PRICE
                </p>

                <h4 style="color: #c5a46d; font-weight: 800;">
                    Rp {{ number_format($car->rent_price, 0, ',', '.') }}
                    <small style="color: #aaa; font-size: 14px;">
                        / hari
                    </small>
                </h4>

            </div>
        </div>

        <div class="col-lg-7">
            <div style="background: #121212;
                        border: 1px solid #30291e;
                        padding: 28px; color: white;">

                <h4 style="color: #c5a46d; font-weight: 700;
                           margin-bottom: 25px;">
                    Booking Information
                </h4>

                <form action="{{ route('booking.store', $car->id) }}"
                      method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input
                            type="text"
                            name="customer_name"
                            class="form-control"
                            value="{{ old('customer_name') }}"
                            placeholder="Masukkan nama lengkap"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            value="{{ old('phone') }}"
                            placeholder="Masukkan nomor telepon"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai Sewa</label>
                        <input
                            type="date"
                            name="start_date"
                            class="form-control"
                            min="{{ date('Y-m-d') }}"
                            value="{{ old('start_date') }}"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Tanggal Selesai Sewa</label>
                        <input
                            type="date"
                            name="end_date"
                            class="form-control"
                            min="{{ date('Y-m-d') }}"
                            value="{{ old('end_date') }}"
                            required
                        >
                    </div>

                    <button
                        type="submit"
                        class="btn w-100"
                        style="background: #c5a46d; color: #111;
                               padding: 13px; border-radius: 0;
                               font-weight: 800; letter-spacing: 1px;">
                        CONFIRM BOOKING →
                    </button>

                </form>

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
