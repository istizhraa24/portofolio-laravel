@extends('layouts.app')

@section('title', 'Sertifikat')

@section('content')
<div class="container mx-auto px-4 py-12">

    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-red-600 mb-3">📜 Sertifikat Profesional</h1>
        <p class="text-gray-700 text-lg max-w-2xl mx-auto">
            Beberapa pencapaian yang saya kumpulkan selama mengikuti kelas, workshop, dan program pengembangan keterampilan.
        </p>
    </div>

    <!-- Certificates Data -->
    @php
        $certificates = [
            [
                'icon' => '📘',
                'year' => '2025',
                'title' => 'Data Classification and Summarization Using IBM Granite',
                'desc' => 'Sertifikat dari IBM SkillsBuild untuk klasifikasi dan ringkasan data menggunakan model Granite.',
                'tags' => ['IBM', 'Granite', 'Data Classification'],
                'source' => 'IBM SkillsBuild',
                'color' => 'bg-red-600 text-white',
                'image' => 'images/ibm-data-classification.png',
                'link' => 'https://www.credly.com/badges/51c59948-3a9c-436f-9b28-77f03041d7eb'
            ],
            [
                'icon' => '☁️',
                'year' => '2025',
                'title' => 'CompTIA Cloud Essentials+: Essential Cloud Principles',
                'desc' => 'Sertifikat dari Codecademy untuk menyelesaikan seluruh materi CompTIA Cloud Essentials+ tentang prinsip dasar cloud.',
                'tags' => ['Cloud Computing', 'CompTIA', 'Codecademy'],
                'source' => 'Codecademy',
                'color' => 'bg-red-100 text-red-800',
                'image' => 'images/comptia-cloud.png', 
                'link' => '#' // jika ada link verifikasi, bisa diganti
            ],

            [
                'icon' => '🌐',
                'year' => '2025',
                'title' => 'CompTIA Cloud Essentials+: Essential Cloud Networking',
                'desc' => 'Sertifikat dari Codecademy untuk menyelesaikan materi tentang jaringan cloud fundamental.',
                'tags' => ['Cloud', 'Networking', 'CompTIA'],
                'source' => 'Codecademy',
                'color' => 'bg-red-100 text-red-800',
                'image' => 'images/comptia-cloud-networking.png',
                'link' => '#' // bisa diubah jika kamu punya link verifikasinya
            ],


            [
                'icon' => '☁️',
                'year' => '2025',
                'title' => 'AWS Cloud Practitioner 2023: ML, AI, & Data Analytics',
                'desc' => 'Sertifikat dari Codecademy atas penyelesaian kursus AWS Cloud Practitioner tentang machine learning, AI, dan analitik data.',
                'tags' => ['AWS', 'Cloud', 'ML', 'AI', 'Data Analytics'],
                'source' => 'Codecademy',
                'color' => 'bg-red-100 text-red-800',
                'image' => 'images/aws-cloud-practitioner.png', // simpan gambar ini dengan nama ini
                'link' => '#' // bisa diubah ke link verifikasi jika tersedia
            ],

            [
                'icon' => '☁️',
                'year' => '2025',
                'title' => 'AWS Cloud Practitioner: Benefits & Design Principles',
                'desc' => 'Sertifikat dari Codecademy untuk memahami manfaat dan prinsip desain dari AWS Cloud.',
                'tags' => ['AWS', 'Cloud Design', 'Benefits'],
                'source' => 'Codecademy',
                'color' => 'bg-black text-white',
                'image' => 'images/aws-benefits-design.png',
                'link' => '#' // isi jika kamu punya link verifikasi
            ],

            [
                'icon' => '🎤',
                'year' => '2024',
                'title' => 'Palu Dev Day 2024 – Tech Seminar & Talkshow',
                'desc' => 'Partisipasi sebagai peserta pada acara Palu Dev Day 2024 dengan tema AI-Powered IT from Concept to Reality.',
                'tags' => ['Seminar', 'AI', 'Tech Event'],
                'source' => 'Hammercode & Palu Dev Day',
                'color' => 'bg-red-100 text-red-800',
                'image' => 'images/palu-devday.png',
                'link' => '#' // opsional, bisa diisi jika ada link
            ],


        ];
    @endphp

    <!-- Certificates Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($certificates as $cert)
        <div class="bg-white border border-gray-100 rounded-2xl shadow hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 p-6 flex flex-col justify-between relative group">
            <div class="absolute -top-4 -left-4 {{ $cert['color'] }} text-xs px-3 py-1 rounded-full shadow-md">
                {{ $cert['icon'] }} {{ $cert['year'] }}
            </div>

            <!-- Gambar -->
            @if(isset($cert['image']))
            <a href="{{ $cert['link'] ?? '#' }}" target="_blank" class="block mb-4 overflow-hidden rounded-xl shadow hover:shadow-md transition">
                <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}" class="w-full h-40 object-contain bg-gray-100 p-2">
            </a>
            @endif

            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-red-600 mb-1">{{ $cert['title'] }}</h3>
            <p class="text-sm text-gray-600 mb-4">{{ $cert['desc'] }}</p>

            <div class="flex flex-wrap gap-2 mb-4">
                @foreach ($cert['tags'] as $tag)
                <span class="text-xs bg-gray-100 border border-red-300 text-red-700 px-2 py-1 rounded-full">
                    {{ $tag }}
                </span>
                @endforeach
            </div>

            <div class="text-sm text-gray-500">
                <span class="italic">Diterbitkan oleh:</span> <strong>{{ $cert['source'] }}</strong>
            </div>
        </div>
        @endforeach
    </div>

@endsection
