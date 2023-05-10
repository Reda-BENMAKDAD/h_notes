 <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('créer Stagiere ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('stagiaire.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                                <label for="nom" class="block mb-1">Nom</label>
                                <input type="text" name="nom" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('nom') is-invalid @enderror" />
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mt-5">
                            <label for="prenom " class="block mb-1">Prenom</label>
                            <input type="text" name="prenom" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('prenom') is-invalid @enderror" />
                            @error('prenom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="email" class="block mb-1">Email</label>
                            <input type="email" name="email" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('email') is-invalid @enderror" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="password " class="block mb-1">Password</label>
                            <input type="password" name="password" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('password') is-invalid @enderror" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="confirmPassword " class="block mb-1">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('confirmPassword') is-invalid @enderror" />
                            @error('confirmPassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="pt-3 mt-3">
                        <label for="infos" class="block">Groupe: </label>
                        <select name='idgroupe' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($groupes as $groupe)
                                <option value="{{$groupe->id}}">{{$groupe->libelle}}</option>
                            @endforeach
                        </select>
                        @error('idgroupe')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pt-3 mt-3">
                        <label for="pp_path" class="block">Photo de profile:  </label>
                        <input type="file" name="pp_path" class="px-3 py-1 bg-gray-200 dark:bg-gray-600 rounded-lg @error('pp_path') is-invalid @enderror" />
                        @error('pp_path')
                            <div class="text-red-600">{{ $message }}</div>
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
</x-admin-layout>

