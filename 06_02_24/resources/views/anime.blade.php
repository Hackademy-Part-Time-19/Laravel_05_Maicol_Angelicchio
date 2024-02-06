<x-main>
    <x-slot:title>Anime</x-slot>
    <h1>Anime</h1>

    <ul>
        @foreach($listaAnime as $anime)
            <h3>{{$anime['title']}}</h3>
        @endforeach
    </ul>

</x-main>