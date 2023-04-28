<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('modifier la note ') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center ">
                <div class="p-6 text-gray-900 >
                    <form action="{{Route('notes.update', $notes->id)}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="">
                            <label for="valeur" class="block mb-3 dark:text-gray-100">{{ __('Value') }}</label>

                            <div class="col-md-6">
                                <input id="valeur" type="number" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('date') is-invalid @enderror" name="valeur" value="{{ old('valeur', $notes->valeur) }}" required autocomplete="valeur" autofocus>

                                @error('valeur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="idstagiere" class="block mb-3 dark:text-gray-100">{{ __('Stagiere') }}</label>

                            <div class="col-md-6">
                                <select id="idstagiere" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg" name="idstagiere" required>
                                    @foreach($stagieres as $stagiere)
                                        <option value="{{ $stagiere->id }}" {{ (old('idstagiere', $notes->idstagiere) == $stagiere->id) ? 'selected' : '' }}>{{ $stagiere->nom }} {{ $stagiere->prenom }}</option>
                                    @endforeach
                                </select>

                                @error('idstagiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="idexam" class="block mb-3 dark:text-gray-100">{{ __('Exam') }}</label>

                            <div class="col-md-6">
                                <select id="idexam" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg" name="idexam" required>
                                    @foreach($exams as $exam)
                                        <option value="{{ $exam->id }}" {{ (old('idexam', $notes->idexam) == $exam->id) ? 'selected' : '' }}>{{ $exam->libelle }}</option>
                                    @endforeach
                                </select>

                                @error('idexam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="flex justify-center gap-2">
                                <button type="submit" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">
                                    {{ __('Save') }}
                                </button>
                                <!-- <a href="{{ route('notes.index') }}" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">
                                    {{ __('Cancel') }}
                                </a> -->
                            </div>
                        
                    </form>
                    @if(session('message'))
                        <span>{{session('message')}}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
