<table>
    <tr>
    <th>nom</th>
    <th>prenom</th>
    <th>groupe</th>
    <th>action</th>
    </tr>
    
    @foreach($stagieres as $stagieres)
    <tr>
        
        <td>{{ $stagieres->nom }}</td>
        <td>{{ $stagieres->prenom }}</td>
        <td>{{ $stagieres->groupes->libelle}}</td>
        <td>
            <a href="{{ route('stagieres.edit', $stagieres->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{Route('stagieres.destroy',$stagieres->id)}}" method="POST">
                @method('delete')
                @csrf
                <input type="submit" value="supprimer" class="btn btn-danger bn"/>
            </form>
            <a href="{{Route('stagieres.show',$stagieres->id)}}">Details</a>
        </td>
    </tr>
@endforeach
</table>