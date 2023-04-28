<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('créer Exam ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('exam.store')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="nom " class="block mb-3">libelle</label>
                                <input type="text" name="libelle" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('nom') is-invalid @enderror" />
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="date " class="block mb-3">date</label>
                            <input type="date" name="date" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('date') is-invalid @enderror" />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="">
                        <label for="idModule " class="block mb-3">Module</label>
                        <select name='idModule' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->nom}}</option>
                            @endforeach
                        </select>
                        @error('idModule')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="">
                        <label for="type " class="block mb-3">type</label>
                        <select name='type' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                            <option value="controle 1">controle 1</option>
                            <option value="controle 2">controle 2</option>
                            <option value="EFM">EFM</option>
                            <option value="EFM Régionale">EFM Régionale</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                        <!-- <div class="form-group">
                                <label for="infos">Infos</label>
                                <textarea name="infos" class="form-control @error('infos') is-invalid @enderror"></textarea>

                                @error('infos')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div> -->
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

