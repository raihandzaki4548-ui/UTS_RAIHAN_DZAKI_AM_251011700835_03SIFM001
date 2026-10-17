@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-10">

            <div class="card border-0 shadow-lg overflow-hidden"
                 style="border-radius: 20px;">

                <div class="text-center p-4"
                     style="background: linear-gradient(135deg, #1f1f1f, #383838);">

                    <span class="badge mb-3"
                          style="background-color: #e63946;
                                 color: white;
                                 letter-spacing: 2px;
                                 padding: 8px 14px;">
                        ABOUT US
                    </span>

                    <h2 class="fw-bold mb-2 text-white">
                        Tentang <span style="color: #ff5964;">Garment Creative</span>
                    </h2>

                    <p class="mb-0" style="color: #dddddd;">
                        Kreativitas dalam setiap karya.
                    </p>

                </div>

                <div class="text-center p-4 p-md-5"
                     style="background-color: #ffffff;">

                    <div class="mx-auto d-flex align-items-center justify-content-center"
                         style="width: 170px;
                                height: 170px;
                                border-radius: 50%;
                                background-color: #111111;
                                padding: 10px;
                                box-shadow: 0 8px 25px rgba(0,0,0,0.18);">

                        <img
                            src="{{ asset('foto/logo.jpg') }}"
                            alt="Logo Garment Creative"
                            style="width: 100%;
                                   height: 100%;
                                   object-fit: contain;
                                   border-radius: 50%;">

                    </div>

                    <h3 class="fw-bold mt-4 mb-2"
                        style="color: #222222;">
                        Profile Garment Creative
                    </h3>

                    <p class="mx-auto mb-0"
                       style="color: #666666; max-width: 500px; line-height: 1.8;">
                        Garment Creative merupakan brand kreatif yang
                        berfokus pada desain grafis, pengembangan visual,
                        serta pembuatan desain produk dan promosi yang
                        menarik dan berkarakter.
                    </p>

                </div>

                <div class="card-body p-4 p-md-5"
                     style="background-color: #fafafa;">

                    <div class="text-center mb-4">
                        <h4 class="fw-bold" style="color: #222222;">
                            Mengenal Kami
                        </h4>

                        <p style="color: #777777;">
                            Identitas dan karakter Garment Creative
                        </p>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="p-4 h-100 rounded-3"
                                 style="background-color: white;
                                        border-left: 4px solid #e63946;
                                        box-shadow: 0 3px 12px rgba(0,0,0,0.05);">

                                <small class="fw-bold"
                                       style="color: #e63946; letter-spacing: 1px;">
                                    01 / BIDANG
                                </small>

                                <h5 class="fw-bold mt-2 mb-0"
                                    style="color: #222222;">
                                    Konfeksi & Fashion
                                </h5>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 h-100 rounded-3"
                                 style="background-color: white;
                                        border-left: 4px solid #e63946;
                                        box-shadow: 0 3px 12px rgba(0,0,0,0.05);">

                                <small class="fw-bold"
                                       style="color: #e63946; letter-spacing: 1px;">
                                    02 / FOKUS
                                </small>

                                <h5 class="fw-bold mt-2 mb-0"
                                    style="color: #222222;">
                                    Desain Grafis
                                </h5>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 h-100 rounded-3"
                                 style="background-color: white;
                                        border-left: 4px solid #e63946;
                                        box-shadow: 0 3px 12px rgba(0,0,0,0.05);">

                                <small class="fw-bold"
                                       style="color: #e63946; letter-spacing: 1px;">
                                    03 / LAYANAN
                                </small>

                                <h5 class="fw-bold mt-2 mb-0"
                                    style="color: #222222;">
                                    Desain Produk & Promosi
                                </h5>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 h-100 rounded-3"
                                 style="background-color: white;
                                        border-left: 4px solid #e63946;
                                        box-shadow: 0 3px 12px rgba(0,0,0,0.05);">

                                <small class="fw-bold"
                                       style="color: #e63946; letter-spacing: 1px;">
                                    04 / KONSEP
                                </small>

                                <h5 class="fw-bold mt-2 mb-0"
                                    style="color: #222222;">
                                    Creative Design
                                </h5>

                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-5">
                        <a href="{{ url('/project') }}"
                           class="btn btn-danger px-4 py-3 fw-semibold"
                           style="border-radius: 10px;">
                            Lihat Project Kami →
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
