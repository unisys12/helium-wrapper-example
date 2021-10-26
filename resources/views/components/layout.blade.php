<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D2 Manifest</title>
</head>
<body>
    <x-site-header-component/>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <div class="site-footer">
            <h4>&Copy; unisys12</h4>
        </div>
    </footer>
</body>
</html>
