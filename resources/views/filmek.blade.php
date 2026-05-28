@extends('layout')

@section('title', 'Filmek')

@section('content')
    <p>A filmek:</p>
    <ul>
        @forelse($filmek as $film)
            <li>
            <strong>{{ $film['cim'] }}</strong> - {{ $film['rendezo'] }}
        </li>
    @empty
        <li>Nincs megjeleníthető film.</li>
    @endforelse
</ul>
@endsection