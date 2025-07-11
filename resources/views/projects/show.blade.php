@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">{{ $project->title }}</h1>
    <p class="text-gray-700 mb-6">{{ $project->description }}</p>

    <a href="{{ route('projects.index') }}"
       class="text-blue-600 hover:underline">&larr; Kembali ke daftar proyek</a>
</div>

<form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus proyek ini?')" class="mt-4">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
        Hapus Proyek
    </button>
</form>


@endsection
