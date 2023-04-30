<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stagiere Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full justify-center py-10">
                <div class="w-full flex justify-center">
                    <div class="p-6 text-gray-900 dark:text-gray-100 w-[60%]">
                        <div class="px-10 flex items-center w-full">
                            <div class="" >
                                <div class="rounded-full w-28 h-28 bg-blue-600">
                                    {{-- image place --}}
                                </div>
                            </div>
                            <div class="p-3 bg-gray-300 dark:bg-gray-700 rounded-lg  w-full border-gray-600 ml-3">
                                <table>
                                    <tr class="">
                                        <td class="py-2">Nom: </td>
                                        <td class="pl-3">{{$stagieres->nom}} </td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-2">Prenom: </td>
                                        <td class="pl-3">{{$stagieres->prenom}} </td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-2">Fillier: </td>
                                        <td class="pl-3">{{$stagieres->groupes->filliere->nom}} </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-10">
                    <div class="mb-4">
                        <h2 class="dark:text-gray-200 text-xl font-medium">
                            Modules
                        </h2>
                    </div>
                    <div class="rounded-lg overflow-hidden">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom
                                    </th>
                                    <th>
                                        Masse Horraire
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modules as $mod)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $mod->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $mod->nom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $mod->masseHorraire }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

