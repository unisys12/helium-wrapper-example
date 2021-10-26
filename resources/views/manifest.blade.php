<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manifest</title>
</head>
<body>
    <header>
        <h1>Destiny 2 Manifest</h1>
        @foreach ($manifest as $data)
            <sub>{{ $data->version }}</sub>
        @endforeach
        <p>{{ count((array)$data) }} root properties</p>
        <br>
    </header>
    <main>
        <header>
            <h2>jsonWorldComponentContentPaths</h2>
        </header>
        <div>
            @foreach ($manifest as $data)
            <sub>{{ count((array)$data->jsonWorldComponentContentPaths->en) }} properties</sub>
            @endforeach
        </div>
    </main>
</body>
</html>
