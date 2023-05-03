<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

