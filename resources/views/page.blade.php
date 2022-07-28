<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">Movies</h1>
        <div class="row row-cols-4 gy-4 justify-content-center">
            @foreach ($movies as $movie)
                <div class="col">            
                    <div class="card border-danger h-100" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-danger">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <strong>Lingua originale:</strong>
                                    </div>
                                    <div class="col text-end">
                                        {{ $movie->nationality }}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <strong>Data di uscita:</strong>
                                    </div>
                                    <div class="col text-end">
                                        {{ date('M d Y', strtotime($movie->date)) }}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <strong>Voto medio:</strong>
                                    </div>
                                    <div class="col text-end">
                                        {{ $movie->vote }}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>