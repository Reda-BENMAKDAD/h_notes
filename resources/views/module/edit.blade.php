<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier Module ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('module.update',$module->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="">
                                <label for="nom " class="block mb-3">Nom</label>
                                <input type="text" name="nom" value="{{$module->nom}}" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('nom') is-invalid @enderror" />
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="mt-5">
                                <label for="masseHorraire" class="block mb-3">Masse Horraire</label>
                                <input type="number" name="masseHorraire" value="{{$module->masseHorraire}}" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('masseHorraire') is-invalid @enderror" />
                                @error('masseHorraire')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>


                        <div  class="pt-3">
                            <label for="infos" class="block">filiere:</label>
                            <select name='idFilliere' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($filiere as $filiere)
                                    <option value="{{$filiere->id}}" @if ($filiere->id == $module->idFiliere ) selected @endif>{{$filiere->nom}}</option>
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
                                    <option value="{{$prf->id}}" @if ($filiere->id == $module->idFiliere ) selected @endif>{{$prf->nom}}</option>
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
