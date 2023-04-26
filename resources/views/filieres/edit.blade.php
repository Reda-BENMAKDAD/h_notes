<head>
  <title>Editer Filiere</title>
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
        <h2 class="mb-4">Modifier Catégorie:</h2>

        <form action="{{Route('filiers.update',$filier->id)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
              <label for="nom">nom</label>  
              <input type="text" name="nom" value="{{$filier->nom}}" class="form-control @error('nom') is-invalid @enderror"/>
              @error('nom')
              <span style="color:red;">{{$message}}
              @enderror
              <br/>
            </div>

          <!-- <div class="form-group">
            <label for="infos">Infos</label> 
            <textarea name="infos" class="form-control @error('infos') is-invalid @enderror">{{$filier->infos}}</textarea>
            @error('infos')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <br/>
          </div> -->

          <button type="submit" class="btn btn-primary">Valider</button>
            

        </form>
        @if(session('message'))
          <span>{{session('message')}}</span>
        @endif
      </div>
    </div>
  </div>
</body>