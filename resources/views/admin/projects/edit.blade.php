@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Proyek: {{ $project->title }}</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Proyek</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required>{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>
            @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" width="150">
            @else
                <p><i>Belum ada gambar</i></p>
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
