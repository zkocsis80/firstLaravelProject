<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zsolt Weboldala - @yield('title')</title>
    <link rel="stylesheet" href="pastel.css">
</head>

<body>
    <header>

        <nav>
            <input type="checkbox" id="show-menu" role="button">
            <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
            <label for="show-menu" class="close"><span class="fa fa-times"></label>
            <ul id="menu">

                <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="{{ url('/fooldal') }}">Főoldal</a></li>
                <li><a class="{{ Request::path() === 'autok' ? 'active' : '' }}" href="{{ url('/autok') }}">Autók</a></li>
                <li><a class="{{ Request::path() === 'konyvek' ? 'active' : '' }}" href="{{ url('/konyvek') }}">Könyvek</a></li>
                <li><a class="{{ Request::path() === 'jatekok' ? 'active' : '' }}" href="{{ url('/jatekok') }}">Játékok</a></li>
                <li><a class="{{ Request::path() === 'filmek' ? 'active' : '' }}" href="{{ url('/filmek') }}">Filmek</a></li>
                <li><a class="{{ Request::path() === 'kapcsolat' ? 'active' : '' }}" href="{{ url('/kapcsolat') }}">Kapcsolat</a></li>
            </ul>
        </nav>
    </header>
    <div id="banner">
        <div id="header">
            <h1>Zsolt Weboldala</h1>
            <p class="sub">Mottó</p>
        </div>
    </div>
    <div id="content">
        <div class="pageitem">
            @yield('content')
        </div>
    </div>

    <div id="footer">
        <p>&copy; 2023 Weboldalam. Minden jog fenntartva.</p>
    </div>
</body>

</html>
