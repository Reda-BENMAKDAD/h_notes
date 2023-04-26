<head>
  <title>Module</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-5">

    <h3 class="text-center mt-3">Module</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
        </div>
        <div class="col-md-3 text-right">
            <a href="module/create" class="btn btn-success"> + Créer un module</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
    <table class="table">
        <thead class="thead-dark">
            <th>ID</th>
            <!-- <th>IdFilliere</th>
            <th>IdProfs</th> -->
            <th>Nom</th>
            <th>Masse Horraire</th>
            <th>Actions</th>
        </thead>
        <tbody>
        @foreach($module as $mod)
        <tr>
            <td>{{$mod->id}}</td>
            <!-- <td>{{$mod->idFiliers}}</td>
            <td>{{$mod->idProfs}}</td> -->
            <td>{{$mod->nom}}</td>
            <td>{{$mod->masseHorraire}}</td>
            <td>
                <form action="{{Route('module.destroy',$mod->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    
                    <a href="{{Route('module.edit',$mod->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{Route('module.show',$mod->id)}}" class="btn btn-info">Détails</a>
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