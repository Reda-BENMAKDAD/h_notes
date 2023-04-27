<head>
  <title>Module</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Détails de Module:</h2>
                <div class="form-group">
                    <h6 for="nom">Nom:</h6>
                    <p class="form-control-static">{{$module->nom}}</p>
                    <h6 for="nom">Masse Horraire:</h6>
                    <p class="form-control-static">{{$module->nom}}</p>
                    <h6 for="nom">Créer en:</h6>
                    <p class="form-control-static">{{$module->created_at}}</p>
                </div>
            </div>
        </div>
    </div>
</body>