<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Model Controller</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center gap-4">
            @foreach ($arrayMovie as $movie)
                <div class="col-sm-5 col-md-3 col-lg-2 bg-warning border border-1 border-dark">
                    <h1 class="text-center">{{$movie->title}}</h1>
                    <h3>Original Title: {{$movie->original_title}}</h3>
                    <p>Nationality: {{$movie->nationality}}</p>
                    <p>Date: {{$movie->reorderedData()}}</p>
                    <p>Vote: {{$movie->vote}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>