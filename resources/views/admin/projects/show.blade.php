@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @include('partials.back')

        {{-- Messaggio di avvenuta aggiunta o modifica dell'elemento --}}
        @if (session('add_message'))
            <div class="container my-3 w-50 text-center alert alert-success">
                {{ session('add_message') }}
            </div>
        @elseif(session('edit_message'))
            <div class="container my-3 w-50 text-center alert alert-warning">
                {{ session('edit_message') }}
            </div>
        @endif
        {{-- /Messaggio di avvenuta aggiunta o modifica dell'elemento --}}

        {{-- Dettagli dell'elemento --}}
        <h2 class="mb-3 text-center">{{ $project->title }}</h2>
        <p class="mb-3 text-center">{{ $project->type?->name ?? 'Nessuna categoria' }}</p>
        <div class="my-3">
            Tecnologie usate:
            @if (count($project->technologies) !== 0)
                @foreach ($project->technologies as $technology)
                    <span class="badge" style="color: {{ $technology->hex_color }}">{{ $technology->name }}</span>
                @endforeach
            @else
                <span>nessuna tecnologia specificata</span>
            @endif
        </div>
        <p>{{ $project->description }}</p>
        <a class="d-inline-block btn btn-warning"
            href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Modifica</a>
        @include('admin.projects.partials.delete')
    </div>
@endsection
