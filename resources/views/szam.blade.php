<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>A kedvenc számod: {{ $szam }}</h1>
    @if ($szam > 10)
    <p><i>Ez egy nagy szám!</i></p>
    @endif

</body>

</html>