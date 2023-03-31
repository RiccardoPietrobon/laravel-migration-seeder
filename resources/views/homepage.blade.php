<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1>Trains</h1>
        <div class="row">
           @foreach ($trains as $train)
                <div class="col-3 g-2">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Azienda: <strong>{{$train -> Azienda}}</strong></li>
                            <li class="list-group-item">Codice Treno: <strong>{{$train -> CodiceTreno}}</strong></li>
                            <li class="list-group-item">Orario Di Partenza: <strong>{{$train -> OrarioDiPartenza}}</strong></li>
                        </ul>
                    </div>
                </div>
            @endforeach 
        </div>

    </div>

</body>
</html>
