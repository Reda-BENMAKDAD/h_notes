<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Note ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('notes.store')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="valeur" class="block mb-3">valeur</label>
                                <input type="number" step="0.25" name="valeur" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('valeur') is-invalid @enderror" />
                                @error('valeur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="idstagiere" class="block mb-3">stagiaire</label>
                            <select name='idstagiere' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($stagiaires as $stagiaire)
                                    <option value="{{$stagiaire->id}}">{{$stagiaire->nom . " " . $stagiaire->prenom}}</option>
                                @endforeach
                            </select>
                            @error('idstagiere')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="idexam" class="block mb-3">Exam: </label>
                            <select name='idexam' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->libelle}}</option>
                                @endforeach
                            </select>
                            @error('idexam')
                                <div class="invalid-feedback">{{ $message }}</div>
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

