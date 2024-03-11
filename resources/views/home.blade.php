<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="Larvel Model & Controller">
    <title>Larvel Model & Controller</title>

    <!-- App Js -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Section Movies -->
    <section id="movies">
    <!-- Row -->
    <div class="row">
        <!-- Foreach -->
        @foreach ($movies as $movie)
            <!-- Col -->
            <div class="col-3">
                <!-- Card -->
                <div class="card">
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->date}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
</body>
</html>