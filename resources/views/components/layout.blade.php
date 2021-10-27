<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>D2 Manifest</title>
</head>
<body>
    {{-- <x-site-header-component/> --}}
    <header>
        <div class="site-title">
            <h1>D2 Manifest</h1>
        </div>
        <div class="version">
            <code>version info here</code>
        </div>
    </header>
    <main>
    <nav>
        <ul>
            <li><a href="/manifest">Manifest</a></li>
            <li><a href="/manifest/jsonWorldComponentContentPaths">Json Component Paths</a></li>
        </ul>
    </nav>
        {{ $slot }}
    </main>
    <footer>
        <div class="site-footer">
            <h4>&copy; unisys12</h4>
        </div>
    </footer>
</body>
</html>
