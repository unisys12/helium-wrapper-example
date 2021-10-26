<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWCCP</title>
</head>
<body>
    <header>
        <h1>Json World Component Content Paths</h1>
    </header>
    <main>
    @foreach ($data as $manifest)
        {{-- <code>{{ var_dump($manifest) }}</code> --}}
        <ul>
        @foreach ($manifest as $key => $value)
        @php
            $table = explode("/", $value);
        @endphp
            <li><code>{{ $key }}</code> - <a href={{ route('json.content', ['lang' => $table[4], 'table' => $table[5]]) }}>{{ $value }}</a></li>
        @endforeach
        </ul>
    @endforeach
    </main>
</body>
</html>
