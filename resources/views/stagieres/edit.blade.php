  <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edite Stagiere ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('stagieres.update',$stagieres->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="">
                                <label for="nom" class="block mb-1">Nom</label>
                                <input type="text" name="nom" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('nom') is-invalid @enderror" value="{{ $stagieres->nom }}"/>
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mt-5">
                            <label for="prenom " class="block mb-1">Prenom</label>
                            <input type="text" name="prenom" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('prenom') is-invalid @enderror" value="{{ $stagieres->prenom }}"/>
                            @error('prenom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="pt-3 mt-3">
                        <label for="infos" class="block">Groupe: </label>
                        <select name='idgroupe' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($groupes as $groupe)
                                <option value="{{$groupe->id}}" {{ $stagieres->idgroupe == $groupe->idgroupe ? 'selected' : '' }}>{{$groupe->libelle}}</option>
                            @endforeach
                        </select>
                        @error('idgroupe')
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

