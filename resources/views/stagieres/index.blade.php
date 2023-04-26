<table>
    <tr>
    <th>idgroupes</th>
    <th>nom</th>
    <th>prenom</th>
    <th>action</th>
    </tr>
    
    @foreach($stagieres as $stagieres)
    <tr>
        <td>{{ $stagieres->groupes->nom}}</td>
        <td>{{ $stagieres->nom }}</td>
        <td>{{ $stagieres->prenom }}</td>
        <td>
            <a href="{{ route('stagieres.edit', $stagieres->idstagiere) }}" class="btn btn-primary">Modifier</a>
            <form action="{{Route('stagieres.destroy',$stagieres->idstagiere)}}" method="POST">
                @method('delete')
                @csrf
                <input type="submit" value="supprimer" class="btn btn-danger bn"/>
            </form>
            <a href="{{Route('stagieres.show',$stagieres->idstagiere)}}">Details</a>
        </td>
    </tr>
@endforeach
</table>