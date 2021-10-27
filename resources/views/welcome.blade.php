<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Algoritmos-Geneticos</title>
</head>
<body>
<div class="">
    <div class="card">
        <div class="card-header">
           Parcial Segundo Corte
        </div>
        <div class="card-body">
            <h5 class="card-title">Tabla de Algoritmos-Geneticos</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Individuo</th>
                    <th scope="col">Decimal</th>
                    <th scope="col">Valor Adaptacion</th>
                    <th scope="col">Probabilidad</th>
                    <th scope="col">Q</th>
                    <th scope="col">Quartiles</th>
                </tr>
                </thead>
                <tbody>

                @foreach($view as $data)
                    <tr>
                        <td>Individuo {{$data->id}}</td>
                        <td>{{$data->decimal}}</td>
                        <td>{{$data->adaptacion}}</td>
                        <td>{{$data->probabilidad}}</td>
                        <td>{{$data->q}}</td>
                        <td>Q {{$data->id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
