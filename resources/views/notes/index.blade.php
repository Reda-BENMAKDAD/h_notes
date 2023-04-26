
    <div class="container">
        <h1>Notes</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Value</th>
                    <th>Student</th>
                    <th>Exam</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->id }}</td>
                        <td>{{ $note->valeur }}</td>
                        <td>{{ $note->stagieres->nom }} {{ $note->stagieres->prenom }}</td>
                        <td>{{ $note->exam->libelle }}</td>
                        <td>
                            <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

