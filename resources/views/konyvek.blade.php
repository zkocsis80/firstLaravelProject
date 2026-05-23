    <a href="{{ url('/fooldal') }}">Főoldal</a>
    <a href="{{ url('/autok') }}">Autók</a>
    <a href="{{ url('/konyvek') }}">Könyvek</a>
    <a href="{{ url('/jatekok') }}">Játékok</a>
    <a href="{{ url('/filmek') }}">Filmek</a>
    
<ul>
    @foreach($konyvek as $konyv)
        <li>{{ $konyv['cim'] }} - {{ $konyv['szerzo'] }}</li>
    @endforeach
</ul>