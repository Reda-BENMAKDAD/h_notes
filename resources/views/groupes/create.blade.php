  <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Groupe ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('groupes.store') }}" method="POST">
                        @csrf

                        <label for="infos" class="block">filiere:</label>
                        <select name='idFilliere' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($filiere as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->nom}}</option>
                            @endforeach
                        </select>
                        <label for="nom" class="block mt-4">libelle:</label>
                        <input name="libelle" id="nom" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg block" required>
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

