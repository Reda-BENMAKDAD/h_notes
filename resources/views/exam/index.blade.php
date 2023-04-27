<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>la liste des exams</title>
</head>
<body>
    @foreach ($exams as $exam )
    <table>
        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    libelle
                </th>
                <th>
                    date
                </th>
                <th>
                    type
                </th>
                <th>
                   module
                </th>
                <th>
                    action
                </th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>
                    {{$exam->id}}
                </td>
                <td>
                    {{$exam->libelle}}
                </td>
                <td>
                    {{$exam->date}}
                </td>
                <td>
                    {{$exam->type}}
                </td>
                <td>
                    {{$exam->module->nom}}
                </td>
                <td>
                    <a href="{{route('exam.show',$exam->id)}}">détails</a>
                    <a href="{{route('exam.edit',$exam->id)}}">modifier</a>
                    <form action="{{route('exam.destroy',$exam->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">supprimer</button>
                    </form>
            </tr>
        </tbody>
    </table>
    @endforeach
</body>
</html>