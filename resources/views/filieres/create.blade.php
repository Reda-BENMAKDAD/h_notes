<head>
  <title>Filiére</title>
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
        <h2 class="mb-4">Ajouter Filiére:</h2>
    <form action="{{Route('filiers.store')}}" method="POST">
        @csrf
        <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" />
                @error('nom')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
      
        <!-- <div class="form-group">
                <label for="infos">Infos</label>
                <textarea name="infos" class="form-control @error('infos') is-invalid @enderror"></textarea>
                
                @error('infos')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div> -->

        <button type="submit" class="btn btn-primary mt-2">Valider</button>
    </form>

    @if(session('message'))
      <span>{{session('message')}}</span>
    @endif
</body>