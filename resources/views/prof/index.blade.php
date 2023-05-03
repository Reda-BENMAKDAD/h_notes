<x-admin-layout>
    <x-slot name="header">
       <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Prof') }}
            </h2>
            <div class=" text-right">
                <a href="prof/create" class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg text-white font-medium "> + Créer prof</a>
            </div>
       </div>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    prenom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profs as $prof)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $prof->nom }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $prof->prenom }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ Route('prof.destroy', $prof->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ Route('prof.edit', $prof->id) }}"
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
</x-admin-layout>
