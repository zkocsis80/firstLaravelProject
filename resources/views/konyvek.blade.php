@extends('layout')

@section('title', 'Könyvek')

@section('content')
    <h1>Könyvek oldal</h1>
    <p>Itt találhatók a kedvenc könyveim.</p>
<ul>
    @foreach($konyvek as $konyv)
        <li>{{ $konyv['cim'] }} - {{ $konyv['szerzo'] }}</li>
    @endforeach
</ul>
@endsection