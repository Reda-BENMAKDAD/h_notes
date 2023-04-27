<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Note') }}
            </h2>
            <div class=" text-right">
                <a href="note/create"
                    class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg text-white font-medium "> +
                    Ajouté Note</a>
            </div>
        </div>
    </x-slot>
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
</x-app-layout>    

