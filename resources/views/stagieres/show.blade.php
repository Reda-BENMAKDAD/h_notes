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
                                
                                <div class="rounded-full w-32 h-32 bg-blue-600 bg-no-repeat bg-cover" style="background-image: url('{{ asset('profile_pictures/'.$stagieres->pp_path) }}')">
                                    
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
                                    <tr class="">
                                        <td class="py-2">groupe: </td>
                                        <td class="pl-3">{{$stagieres->groupes->libelle}} </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-10">
                    <div class="flex justify-center my-4 space-x-4 ">
                        <a href="{{ route('stagieres.show', [$stagieres->id, 'section' => 'modules']) }}" 
                            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'modules' ) font-bold @endif">
                            Modules
                        </a>
                        <a href="{{ route('stagieres.show', [$stagieres->id, 'section' => 'notes']) }}" 
                            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'notes') font-bold @endif">
                            Notes
                        </a>
                        <a href="{{ route('stagieres.show', [$stagieres->id, 'section' => 'seances']) }}" 
                            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'seances') font-bold @endif">
                            Séances
                        </a>
                    </div>
                  
                    @if(request()->section == 'modules')
                    <div class="px-10">
                        <div class="mb-4">
                            <h2 class="dark:text-gray-200 text-xl font-medium">
                                Modules
                            </h2>
                        </div>
                    <div class="rounded-lg overflow-hidden">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" >
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
                @elseif(request()->section == 'notes')
                <div class="px-10">
                    <div class="mb-4">
                        <h2 class="dark:text-gray-200 text-xl font-medium">
                            Notes
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
                                        exam
                                    </th>
                                    <th>
                                        note
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notes as $note)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $note->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $note->exam->libelle }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $note->valeur }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                @elseif(request()->section == 'seances')
                <div class="px-10">
                    <div class="mb-4">
                        <h2 class="dark:text-gray-200 text-xl font-medium">
                            siances
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
                                        date
                                    </th>
                                    <th>
                                        type
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seances as $seances)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $seances->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $seances->date   }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $seances->type }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

