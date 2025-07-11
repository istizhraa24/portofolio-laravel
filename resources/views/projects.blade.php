@extends('layouts.app')

@section('title', 'Projek')

@section('content')
<div class="container mx-auto px-4 py-12">

    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-red-600 mb-3">📁 Projek Saya</h1>
        <p class="text-gray-700 text-lg max-w-2xl mx-auto">
            Berikut adalah beberapa proyek pengembangan web dan analisis data yang telah saya kerjakan.
        </p>
    </div>

    @php
        $projects = [
            [
                'title' => 'Sistem Informasi Perpustakaan',
                'date' => 'Mei 2025 – Universitas Tadulako',
                'desc' => 'Aplikasi web untuk manajemen data peminjaman dan pengembalian buku. Dibangun dengan Laravel & MySQL.',
                'tags' => ['Laravel', 'PHP', 'MySQL'],
            ],
            [
                'title' => 'Sistem Perpustakaan Online',
                'date' => 'Juni 2025 – Universitas Tadulako',
                'desc' => 'Sistem informasi akademik kampus: login multi-role, manajemen data akademik, dan nilai.',
                'tags' => ['Laravel', 'PHP', 'MySQL'],
            ],
            [
                'title' => 'Website Portofolio Pribadi',
                'date' => 'Mei–Juli 2025',
                'desc' => 'Website pribadi untuk menampilkan profil, proyek, dan kontak. Dibangun secara mandiri.',
                'tags' => ['Laravel', 'TailwindCSS', 'MySQL'],
            ],
            [
                'title' => 'Capstone Project – IBM Granite',
                'date' => 'Juni 2025',
                'desc' => 'Analisis data bencana Indonesia 2010–2024 menggunakan AI & NLP. Sertifikat dari Hacktiv8 x IBM.',
                'tags' => ['AI', 'NLP', 'Data Analysis'],
            ],
        ];
    @endphp

    <!-- Project Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        @foreach ($projects as $project)
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-red-600 hover:shadow-xl transition-all duration-300">
            <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $project['title'] }}</h3>
            <p class="text-sm text-gray-500 mb-3 italic">{{ $project['date'] }}</p>
            <p class="text-gray-700 mb-4">{{ $project['desc'] }}</p>
            <div class="flex flex-wrap gap-2">
                @foreach ($project['tags'] as $tag)
                <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full font-semibold">
                    {{ $tag }}
                </span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
