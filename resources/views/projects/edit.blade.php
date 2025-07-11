@extends('layouts.app')

@section('title', 'Edit Proyek')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6">Edit Proyek</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Judul Proyek</label>
            <input type="text" name="title" id="title" value="{{ $project->title }}" required
                   class="mt-1 p-2 w-full border rounded shadow-sm">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="description" id="description" rows="4"
                      class="mt-1 p-2 w-full border rounded shadow-sm">{{ $project->description }}</textarea>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('projects.index') }}" class="text-gray-600 hover:underline">← Batal</a>
            <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
