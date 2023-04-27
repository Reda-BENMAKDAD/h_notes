<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier l'exam {{ $exam->id }}</title>
</head>
<body>
    <form action="{{ route("exam.update") }}" method="POST">
        @csrf
           <input type="text" name="libelle" value={{ $exam->libelle }}>
           <input type="date" name="date" value="{{ $exam->date }}">
           <select name="type" id="">
               <option value="controle">controle 1</option>
               <option value="controle">controle 2</option>
               <option value="examen">EFM</option>
               <option value="controle">EFM Régionale</option>
           </select>
           <select name="module_id" id="">
               @foreach ($modules as $module)
                   <option value="{{ $module->id }}" {{ $module->id == $exam->module->id ? "selected" : "" }}>{{ $module->nom }}</option>
               @endforeach
           </select>
       <input type="submit" value="sauvegarder">
   </form>
</body>
</html>