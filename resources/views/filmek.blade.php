    <a href="{{ url('/fooldal') }}">Főoldal</a>
    <a href="{{ url('/autok') }}">Autók</a>
    <a href="{{ url('/konyvek') }}">Könyvek</a>
    <a href="{{ url('/jatekok') }}">Játékok</a>
    <a href="{{ url('/filmek') }}">Filmek</a>

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