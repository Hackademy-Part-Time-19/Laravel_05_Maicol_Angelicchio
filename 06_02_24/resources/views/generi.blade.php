<x-main>
    <x-slot:title>Generi</x-slot>
    <h1>Generi</h1>

    <ul>
        @foreach($generi as $genere)
            <li>
                <a href="{{ route('anime', ['id'=>$genere['mal_id']])}}">{{$genere['name']}}</a>
            </li>
        @endforeach
    </ul>

</x-main>