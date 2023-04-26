<head>
  <title>Filire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-5">

    <h3 class="text-center mt-3">Filiere</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
        </div>
        <div class="col-md-3 text-right">
            <a href="filiers/create" class="btn btn-success"> + Créer Filiere</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
    <table class="table">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </thead>
        <tbody>
        @foreach($filieres as $fil)
        <tr>
            <td>{{$fil->id}}</td>
            <td>{{$fil->nom}}</td>
            <td>
                <form action="{{Route('filiers.destroy',$fil->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    
                    <a href="{{Route('filiers.edit',$fil->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{Route('filiers.show',$fil->id)}}" class="btn btn-info">Détails</a>
                    <input type="submit" value="Supprimer" class="btn btn-danger"/>

                </form>
            </td>
        </tr>

            @endforeach
        </tbody>
        @if(session('message'))
        <span>{{session('message')}}</span>
        @endif
    </table>
    </table>
</body>