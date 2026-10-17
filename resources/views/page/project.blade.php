@extends('layouts.app')

@section('title', 'Project')

@section('content')

<div class="container mt-5 mb-5">

   
    <div class="text-center mb-5">
        <span class="badge mb-3"
              style="background-color: #e63946; color: white; letter-spacing: 2px;">
            OUR PORTFOLIO
        </span>

        <h1 class="fw-bold mb-3"
            style="color: white; font-size: clamp(2rem, 5vw, 3rem);">
            Portfolio <span style="color: #ff5964;">Project</span>
        </h1>

        <p class="mx-auto"
           style="color: #eeeeee; max-width: 600px;">
            Jelajahi berbagai karya desain dari Garment Creative
            yang menggabungkan kreativitas, detail, dan kualitas.
        </p>

        <div class="mx-auto mt-3"
             style="width: 70px; height: 4px; background-color: #e63946; border-radius: 5px;">
        </div>
    </div>

    
    <div class="row g-4">

        @forelse ($projects as $project)

        <div class="col-md-6 col-lg-4">

            <div class="card h-100 border-0 shadow-lg overflow-hidden"
                 style="border-radius: 16px; transition: transform 0.3s ease, box-shadow 0.3s ease;">

               
                <div style="position: relative; overflow: hidden; background-color: #eeeeee;">

                    <img
                        src="{{ asset('foto/images/' . $project->image) }}"
                        alt="{{ $project->title }}"
                        class="card-img-top"
                        loading="lazy"
                        style="height: 240px; object-fit: cover;">

                    <span
                        class="badge position-absolute top-0 end-0 m-3 {{ strtolower($project->status) === 'selesai' ? 'bg-success' : 'bg-warning text-dark' }}"
                        style="padding: 8px 12px; border-radius: 20px;">
                        {{ $project->status }}
                    </span>

                </div>

               
                <div class="card-body p-4 d-flex flex-column">

                    <h5 class="card-title fw-bold mb-3"
                        style="color: #222222; font-size: 1.2rem;">
                        {{ $project->title }}
                    </h5>

                    <p class="card-text mb-4"
                       style="color: #666666; line-height: 1.7;">
                        {{ Str::limit($project->description, 100) }}
                    </p>

                    <div class="mt-auto">

                       
                        <p class="mb-3"
                           style="color: #888888; font-size: 0.85rem;">
                            Harga project
                        </p>

                        <h4 class="fw-bold mb-3"
                            style="color: #e63946;">
                            Rp {{ number_format($project->harga, 0, ',', '.') }}
                        </h4>

                        
                        <div class="mb-4 p-3 rounded-3"
                             style="background-color: #f5f5f5;">
                            <small style="color: #666666;">
                                <strong style="color: #333333;">Teknologi:</strong>
                                {{ $project->teknologi }}
                            </small>
                        </div>

                       
                        <a
                            href="{{ route('project.show', $project->id) }}"
                            class="btn btn-danger w-100 fw-semibold"
                            style="border-radius: 8px; padding: 11px;">
                            Lihat Detail <span class="ms-1">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">
            <div class="text-center p-5 rounded-4"
                 style="background-color: rgba(20, 20, 20, 0.85);">
                <h4 class="fw-bold text-white mb-3">
                    Belum Ada Project
                </h4>

                <p class="mb-0" style="color: #dddddd;">
                    Project akan ditampilkan di sini setelah tersedia.
                </p>
            </div>
        </div>

        @endforelse

    </div>

</div>

@endsection
