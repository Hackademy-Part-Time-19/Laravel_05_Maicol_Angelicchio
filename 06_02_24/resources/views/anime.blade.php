<x-main>
    <x-slot:title>Anime</x-slot>
    <a href="{{ route('generi')}}">Generi</a>
    <h1>Anime</h1>
        <div class="container">
            @foreach($listaAnime as $anime)
                <div class="card">
                    <img src="{{$anime['images']['jpg']['image_url']}}" alt="imamgine" class="card-image">
                    <div class="card-title">{{$anime['title']}}</div>
                </div>
            @endforeach
        </div>
</x-main>