



</body>
</html>




<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Groupes') }}
            </h2>
            <div class=" text-right">
                <a href="groupes/create"
                    class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg text-white font-medium "> +
                    Créer Groupe</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Libelle
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Filier
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($groupes as $groupe)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$groupe->libelle}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$groupe->filiere->nom}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{Route('groupes.destroy',$groupe->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <a  href="{{ route('groupes.edit', $groupe->id) }}"
                                                    class="text-blue-600">Modifier</a>
                                                {{-- <a href="{{ Route('filiers.show', $fil->id) }}"
                                                    class="text-green-600 ml-4">Détails</a> --}}
                                                <input type="submit" value="Supprimer" class="text-red-600 ml-4" />
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            @if (session('message'))
                                <span>{{ session('message') }}</span>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

