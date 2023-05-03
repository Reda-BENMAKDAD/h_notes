<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('créer seance ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('seance.store')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="type" class="block mb-3">type</label>
                                <input type="text" name="type" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('type') is-invalid @enderror" />
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="date " class="block mb-3">date</label>
                            <input type="date" name="date" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('date') is-invalid @enderror" />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="">
                        <label for="description " class="block mb-3">description</label>
                        <textarea name="description" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('description') is-invalid @enderror" ></textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pt-3 mt-3">
                        <label for="infos" class="block">Prof: </label>
                        <select name='idProf' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($profs as $prof)
                                <option value="{{$prof->id}}">{{$prof->nom}}</option>
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
                                <option value="{{$groupe->id}}">{{$groupe->libelle}}</option>
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
                                <option value="{{$module->id}}">{{$module->nom}}</option>
                            @endforeach
                        </select>
                        @error('idModule')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="flex justify-end">
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
</x-admin-layout>

