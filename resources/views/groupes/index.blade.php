<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>libelle</th>
            <th>filiere</th>
        </tr>
        <tr>
            @foreach ($groupes as $groupe)
               <td>{{$groupe->libelle}}</td> 
               <td>{{$groupe->filiere->nom}}</td> 
               <td>
                <a href="{{ route('groupes.edit', $groupe->idgroupes) }}" class="btn btn-primary">Modifier</a>
                <form action="{{Route('groupes.destroy',$groupe->idgroupes)}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="supprimer" class="btn btn-danger bn"/>
                </form>
                <a href="{{Route('groupes.show',$groupe->idgroupes)}}">Details</a>
            </td>
            @endforeach
            
        </tr>
    </table>
</body>
</html>