<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('modifier seance ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('seance.update', $seance->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="">
                            <label for="nom" class="block mb-3">nom: </label>
                            <input type="text" value="{{ $seance->nom }}" name="nom" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('type') is-invalid @enderror" />
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                                <label for="type" class="block mb-3">type</label>
                                <input type="text" name="type" value="{{ $seance->type }}" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('type') is-invalid @enderror" />
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="date " class="block mb-3">date</label>
                            <input type="date" value="{{ $seance->date }}" name="date" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('date') is-invalid @enderror" />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="">
                        <label for="description " class="block mb-3">description</label>
                        <textarea  name="description" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('description') is-invalid @enderror" >{{ $seance->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pt-3 mt-3">
                        <label for="infos" class="block">Prof: </label>
                        <select name='idProf' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($profs as $prof)
                                <option value="{{$prof->id}}"  {{ $seance->prof->id == $prof->id ? "selected" : "" }}  >{{$prof->nom}}</option>
                            @endforeach
                        </select>
                        @error('idProf')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pt-3 mt-3">
                        <label for="idGroupe" class="block">Groupe: </label>
                        <select name='idGroupe' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($groupes as $groupe)
                                <option value="{{$groupe->id}}" {{ $seance->groupe->id == $groupe->id ? "selected" : "" }}>{{$groupe->libelle}}</option>
                            @endforeach
                        </select>
                        @error('idGroupe')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="pt-3 mt-3">
                        <label for="idModule" class="block">Module: </label>
                        <select name='idModule' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}" {{ $seance->module->id == $module->id ? "selected" : "" }}>{{$module->nom}}</option>
                            @endforeach
                        </select>
                        @error('idModule')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">Modifier</button>
                        </div>
                    </form>

                    @if(session('message'))
                        <span>{{session('message')}}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

