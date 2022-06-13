<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{('css/app.css')}}">

    </head>
    <header>
        <h1 class="text-center text-succes py-4">Films</h1>
    </header>
    <body class="bg-dark">
        <div class="container">
            <div class="row p-4 justify-content-center">
                @foreach ($movies as $key => $movie)
                <div class="card col-3 m-2" style="">
                    <img class="card-img-top w-50 align-self-center" src="https://img.wallpapic.it/i0389-833-517/medium/halloween-film-notte-buio-sfondo.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title">Titolo: {{$movie->title}}</h5>
                      <h4 class="card-title mb-5">Titolo Originale: {{$movie->original_title}}</h4>
                      <div class="card-text">
                        <p>Nazionalità: {{$movie->nationality}}</p>
                        <p>Data di Uscita: {{$movie->date}}</p>
                        <p>Voto: {{$movie->vote}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>

    </body>
</html>