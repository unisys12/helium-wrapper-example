<x-layout>
    @foreach ($data as $manifest)
        <ul>
        @foreach ($manifest as $key => $value)
        @php
            $table = explode("/", $value);
        @endphp
            <li><code>{{ $key }}</code> - <a href={{ route('json.content', ['lang' => $table[4], 'table' => $table[5]]) }}>{{ $value }}</a></li>
        @endforeach
        </ul>
    @endforeach
</x-layout>
