@extends('layouts.app')

@section('title', 'About | SOVEREIGN NOIR')

@section('content')
<div class="container py-5">
    <div class="text-center py-5">
        <p class="text-uppercase" style="color: #d4af72; letter-spacing: 3px;">
            About Us
        </p>

        <h1 class="fw-bold">SOVEREIGN NOIR</h1>

        <p class="mt-4 mx-auto" style="max-width: 700px;">
            SOVEREIGN NOIR adalah layanan penyewaan mobil mewah
            yang menghadirkan kenyamanan, performa, dan pengalaman
            berkendara eksklusif untuk setiap perjalanan.
        </p>

        <a href="{{ route('cars.index') }}" class="btn btn-dark mt-3">
            Explore Our Cars
        </a>
    </div>
</div>
@endsection
