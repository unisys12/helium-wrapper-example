<x-layout>
    <section class="card">
        <header>
            <h2>jsonWorldComponentContentPaths</h2>
        </header>
        <div>
            @foreach ($manifest as $data)
            <sub>{{ count((array)$data->jsonWorldComponentContentPaths->en) }} properties</sub>
            @endforeach
        </div>
    </section>
</x-layout>
