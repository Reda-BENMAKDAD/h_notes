<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Module ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('module.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="nom" class="block">Nom</label>
                            <input type="text" name="nom"  class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg block"/>
                            @error('nom')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group" class="pt-3">
                            <label for="masseHorraire" class="block ">Masse Horrair</label>
                            <input type="number" name="masseHorraire"  class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg"/>

                            @error('masseHorraire')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>


                        <div  class="pt-3">
                            <label for="infos" class="block">filiere:</label>
                            <select name='idFilliere' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($filiere as $filiere)
                                    <option value="{{$filiere->id}}">{{$filiere->nom}}</option>
                                @endforeach
                            </select>
                            @error('idFilliere')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="pt-3 mt-3">
                            <label for="infos" class="block">filiere:</label>
                            <select name='idProf' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($prof as $prf)
                                    <option value="{{$prf->id}}">{{$prf->nom}}</option>
                                @endforeach
                            </select>
                            @error('idProf')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="flex justify-center">
                            <button type="submit" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">Valider</button>
                        </div>
                    </form>

                    @if(session('message'))
                      <span>{{session('message')}}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

