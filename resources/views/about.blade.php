@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <section id="about" class="bg-white rounded-2xl shadow-xl p-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        {{-- kiri: Deskripsi Tentang Saya --}}
            <div>
                <h2 class="text-4xl font-extrabold text-gray-900 leading-tight mb-4">About Me!</h2>
                <p class="text-lg text-gray-600 mb-5 leading-relaxed">
                    Halo! Saya <span class="font-semibold text-gray-800">Isti Zahra Eka Putri Katili</span>, seorang Web Designer
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                        Mahasiswa semester 4 Teknik Informatika Universitas Tadulako yang aktif dan berorientasi pada  pengembangan diri di bidang teknologi, khususnya pengembangan web dan analisis data. Memiliki kemampuan dalam kolaborasi tim, desain, serta pengolahan dan visualisasi data dengan pendekatan analitis dan kreatif. Saya adalah individu yang komunikatif, adaptif, dan peduli terhadap lingkungan sekitar, dengan semangat belajar yang tinggi serta dedikasi untuk memberikan performa terbaik dalam setiap tugas, sekaligus berkomitmen membangun karier di bidang teknologi informasi.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ url('/projects') }}"
                       class="bg-red-600 hover:bg-red-700 text-white text-sm font-semibold px-8 py-3 rounded-full shadow-md transition duration-300">
                        Lihat Projects
                    </a>
                    <a href="https://wa.me/6282259970246?text=Halo%20Isti,%20saya%20tertarik%20dengan%20portfolio%20Anda!" 
   target="_blank"
   class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 text-sm font-semibold px-8 py-3 rounded-full transition duration-300">
    Hubungi Saya
</a>

                </div>
            </div>

           {{-- Bagian Kanan: Skills (tanpa persentase) --}}
<div class="bg-gray-50 rounded-xl p-6 shadow-sm border border-gray-100">
    <h3 class="text-xl font-bold text-white bg-gradient-to-r from-gray-800 to-gray-700 px-4 py-2 rounded w-fit mb-6">
        MY SKILLS
    </h3>

    @php
        $skills = [
            ['name' => 'Web Design', 'icon' => '🎨'],
            ['name' => 'HTML & CSS', 'icon' => '🧱'],
            ['name' => 'JavaScript', 'icon' => '⚡'],
                    ['name' => 'Python', 'icon' => '🐍'],
                    ['name' => 'Git', 'icon' => '🔧'],
                    ['name' => 'Laravel', 'icon' => '🌀'],
        ];
    @endphp

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        @foreach ($skills as $skill)
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 text-center hover:shadow-md transition">
                <div class="text-3xl mb-2">{{ $skill['icon'] }}</div>
                <div class="font-semibold text-gray-800 mb-1">{{ $skill['name'] }}</div>
                <div class="text-yellow-500 text-sm">
                
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
