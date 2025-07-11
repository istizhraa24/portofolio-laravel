@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="min-h-screen bg-gray-50">

    {{-- Header Hero Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

               {{-- Left --}}
<div class="order-2 lg:order-1">
    <p class="text-sm uppercase tracking-widest text-gray-400 mb-3">Welcome </p>

    <h1 class="text-3xl lg:text-6xl font-extrabold text-gray-900 mb-4 leading-tight">
        Hi! I'm <span class="text-red-600">Isti Zahra</span>
    </h1>
    
    <p class="text-sm lg:text-base text-gray-500 mb-6">
        <i class="fas fa-map-marker-alt mr-1 text-red-500"></i> Palu, Indonesia
    </p>

    <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-xl">
        I am a passionate Web Developer & UI/UX Designer who loves crafting clean, user-friendly digital experiences.
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
        <a href="{{ asset('cv/IstiZahra_CV.pdf') }}" 
           download 
           class="bg-white text-gray-700 border border-gray-300 hover:bg-gray-100 px-8 py-3 rounded-full text-center shadow-sm">
           📄 Download CV
        </a>

        <a href="{{ route('sertifikat') }}" 
           class="bg-red-600 text-white px-8 py-3 rounded-full hover:bg-red-700 transition shadow-lg">
           📜 Lihat Sertifikat
        </a>
    </div>
</div>



                {{-- Right Image --}}
                <div class="order-1 lg:order-2 flex justify-center">
                    <div class="w-80 h-80 lg:w-96 lg:h-96 rounded-full overflow-hidden bg-gray-200 shadow-lg">
                        <img src="{{ asset('images/profile.png') }}" alt="Isti Zahra Profile" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</div>
@endsection
