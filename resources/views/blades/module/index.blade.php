<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Module') }}
            </h2>
            <div class=" text-right">
                <a href="module/create"
                    class="px-3 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg text-white font-medium "> +
                    Créer Module</a>
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
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Masse Horraire
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($modules as $mod)
                            <tr>
                                <td>{{$mod->id}}</td>
                                <!-- <td>{{$mod->idFiliers}}</td>
                                <td>{{$mod->idProfs}}</td> -->
                                <td>{{$mod->nom}}</td>
                                <td>{{$mod->masseHorraire}}</td>
                                <td>
                                    <form action="{{Route('module.destroy',$mod->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        
                                        <a href="{{Route('module.edit',$mod->id)}}" class="btn btn-primary">Modifier</a>
                                        <a href="{{Route('module.show',$mod->id)}}" class="btn btn-info">Détails</a>
                                        <input type="submit" value="Supprimer" class="btn btn-danger"/>

                                    </form>
                                </td>
                            </tr>

                                @endforeach
                            </tbody>
                            @if(session('message'))
                            <span>{{session('message')}}</span>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>