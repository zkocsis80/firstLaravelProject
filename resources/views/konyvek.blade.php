<ul>
    @foreach($konyvek as $konyv)
        <li>{{ $konyv['cim'] }} - {{ $konyv['szerzo'] }}</li>
    @endforeach
</ul>