<x-main>
    <x-slot:title>Anime</x-slot>
    <h1>Anime</h1>
    <style>
        .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: auto;
        }

        .card-title {
            padding: 10px;
            background-color: #f1f1f1;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
        <div class="container">
            @foreach($listaAnime as $anime)
                <div class="card">
                    <img src="{{$anime['images']['jpg']['image_url']}}" alt="imamgine" class="card-image">
                    <div class="card-title">{{$anime['title']}}</div>
                </div>
            @endforeach
        </div>
</x-main>