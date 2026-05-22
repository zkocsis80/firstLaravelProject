<p>Autók:</p>
<ol>
    @forelse($cars as $car)
    <li>{{ $car }}</li>
    @empty
        <li>Nincs elérhető autó.</li>
    @endforelse
</ol>