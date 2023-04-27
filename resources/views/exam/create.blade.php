<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="{{ route("exam.create") }}" method="POST">
         @csrf
            <label for="">libelle</label>
            <input type="text" name="libelle" placeholder="libelle">
            <label for="date">date</label>
            <input type="date" name="date" placeholder="date">
            <label for="type">type</label>
            <select name="type" id="">
                <option value="controle">controle 1</option>
                <option value="controle">controle 2</option>
                <option value="examen">EFM</option>
                <option value="controle">EFM Régionale</option>
            </select>
            <label for="module">module</label>
            <select name="module_id" id="">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->nom }}</option>
                @endforeach
            </select>
        <input type="submit" value="créer">
    </form>
</body>
</html>