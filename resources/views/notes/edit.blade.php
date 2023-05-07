<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Note ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('notes.update', $note->id)}}" method="POST">
                        @csrf
                        @method("put")
                        <div class="">
                                <label for="valeur" class="block mb-3">valeur</label>
                                <input type="number" step="0.25" value="{{ $note->valeur  }}" name="valeur" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('valeur') is-invalid @enderror" />
                                @error('valeur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="idstagiere" class="block mb-3">stagiaire</label>
<<<<<<< HEAD
                            <select name='idstagiere' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                                @foreach($stagieres as $stagiaire)
                                    <option value="{{$stagiaire->id}}"   {{ $note->stagieres->id == $stagiaire->id ? "selected" : "" }} >{{$stagiaire->nom . " " . $stagiaire->prenom}}</option> 
=======
                            <select name='idstagiere' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                                @foreach($stagiaires as $stagiaire)
                                    <option value="{{$stagiaire->id}}"   {{ $note->stagieres->id == $stagiaire->id ? "selected" : "" }} >{{$stagiaire->nom . " " . $stagiaire->prenom}}</option>
>>>>>>> roles
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
                                    <option value="{{$exam->id}}" {{ $note->exam->id = $exam->id ? "selected" : "" }} >{{$exam->libelle}}</option>
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
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

