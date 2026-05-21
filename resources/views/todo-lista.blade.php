<ul>
    @foreach ($taskok as $task)
    <li>{{ $task }}</li>
    @endforeach
    @if (count($taskok) == 0)
    <li>Nincsenek feladatok</li>
    @endif
</ul>
fontosak:
<ul>
    @forelse ($fontosak as $fontos)
    <li>{{ $fontos }}</li>
    @empty
    <li>Nincsenek fontos feladatok</li>
    @endforelse
</ul>