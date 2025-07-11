@extends('layouts.app')

@section('title', 'Proyek')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar Proyek</h1>

        @if($projects->count())
            <ul class="list-disc list-inside text-gray-700">
                @foreach($projects as $project)
                    <li>
                        <a href="{{ route('projects.show', $project->id) }}" class="text-blue-600 hover:underline">
                            {{ $project->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Belum ada proyek.</p>
        @endif
    </div>
@endsection
