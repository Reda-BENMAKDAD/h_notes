<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier Groupe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('groupes.update', $groupes->id) }}" method="POST"
                        style="max-width: 600px; margin: auto;">
                        @method('put')
                        @csrf

                        <label for="infos" class="block">filiere:</label>
                        <select name='idFilliere' class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg">
                            @foreach ($groupes as $filiere)
                                <option value="{{ $filiere->id }}"
                                    {{ $groupes->idFilliere == $filiere->id ? 'selected' : '' }}>{{ $filiere->nom }}
                                </option>
                            @endforeach

                        </select><br>
                        <label for="nom" class="block mt-4">libelle:</label>
                        <input name="libelle" id="nom"
                            class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg block"
                            value="{{ $groupes->libelle }}" required>

                            <div class="flex justify-center">
                                <button type="submit" class="btn btn-primary mt-6 text-white bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg px-3 py-1 ">Valider</button>
                            </div>
                        </form>

                    @if (session('message'))
                        <div
                            style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; margin-top: 10px;">
                            {{ session('message') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
