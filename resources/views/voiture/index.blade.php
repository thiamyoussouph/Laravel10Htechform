<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="card m-5 me-4">
        <div class="card-body">
            <div class="d-flex">
                <h1 class="card-title m-2">Liste des voitures</h1>
                <a href="" class="btn btn-primary m-2">Ajouter</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>kilometrage</th>
                        <th>description</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($voitures as $car)
                    <tr>
                        <td>{{ $car->matricule }}</td>
                        <td>{{ $car->kilometrage}}</td>
                        <td>{{ $car->destination }}</td>
                        <td>{{ $car->motif }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Voir</a>
                            <a href="" class="btn btn-secondary">Modifier</a>
                            <form action="" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>