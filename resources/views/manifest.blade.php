<x-layout>
    <header>
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
</x-layout>
