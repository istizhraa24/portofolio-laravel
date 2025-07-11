@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Proyek</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">+ Tambah Proyek</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Belum ada proyek.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
