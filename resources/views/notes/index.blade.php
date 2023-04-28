<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Notes') }}
            </h2>
            <div class=" text-right">
                <a href="notes/create"
                    class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg text-white font-medium "> +
                    Ajouté Note</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Value</th>
                                <th scope="col" class="px-6 py-3">Student</th>
                                <th scope="col" class="px-6 py-3">Exam</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $note->id }}</td>
                                    <td class="px-6 py-4">{{ $note->valeur }}</td>
                                    <td class="px-6 py-4">{{ $note->stagieres->nom }} {{ $note->stagieres->prenom }}</td>
                                    <td class="px-6 py-4">{{ $note->exam->libelle }}</td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('notes.edit', $note->id) }}" class="text-blue-600">Modifier</a>
                                            <button type="submit" class="text-red-600 ml-4">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>    

