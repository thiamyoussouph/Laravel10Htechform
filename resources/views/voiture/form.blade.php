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
    <h1>Créer une voiture</h1>
    <div class="col-md-8 ms-5">

        <form action="{{route('voitures.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="immatriculation" class="form-label">immatriculation:</label>
                <input type="text" id="immatriculation" name="matricule" class="form-control">

            </div>

            <div class="mb-3 py-t">
                <label for="marque" class="form-label">kilometrage:</label>
                <input type="text" id="marque" name="kilometrage" class="form-control  ">

            </div>

            <div class="mb-3">
                <label for="modele" class="form-label">description</label>
                <input type="text" id="modele" name="destination" class="form-control ">

            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">Status:</label>
                <input type="number" id="annee" name="motif" class="form-control  ">

            </div>


            <a></a>

            <button class="btn btn-primary">Créer la voiture</button>
        </form>
    </div>
</body>

</html>