<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
<<<<<<< HEAD
            {{ __('Ajouter une nouvelle note ') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 >
                    <form action={{ route('notes.store') }} method='POST'>
                        @csrf
                        <div class="form-group">
                            <label for="valeur">Value:</label>
                            <input type="number" class="form-control" id="valeur" name="valeur" value="{{ old('valeur') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="idstagiere">stagiere:</label>
                            <select class="form-control" id="idstagiere" name="idstagiere" required>
                                @foreach ($stagieres as $stagiere)
                                    <option value="{{ $stagiere->id }}">{{ $stagiere->nom }} {{ $stagiere->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idexam">Exam:</label>
                            <select class="form-control" id="idexam" name="idexam" required>
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam->id }}">{{ $exam->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
=======
            {{ __('Ajouter Note ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('notes.store')}}" method="POST">
                        @csrf
                        <div class="">
                                <label for="valeur" class="block mb-3">valeur</label>
                                <input type="number" step="0.25" name="valeur" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('valeur') is-invalid @enderror" />
                                @error('valeur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="idstagiere" class="block mb-3">stagiaire</label>
                            <select name='idstagiere' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
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
                            <select name='idexam' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                                @foreach($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->libelle}}</option>
                                @endforeach
                            </select>
                            @error('idexam')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">Valider</button>
                        </div>
                    </form>

                    @if(session('message'))
                        <span>{{session('message')}}</span>
                    @endif
>>>>>>> 25d5655cbf23a5b8b3db485dc409069fee1a6ab4
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

