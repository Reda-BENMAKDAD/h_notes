@if($role == "admin")
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('modifier Exam ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('exam.update', $exam->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="">
                                <label for="nom " class="block mb-3">libelle</label>
                                <input type="text" value="{{ $exam->libelle }}"" name="libelle" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('nom') is-invalid @enderror" />
                                @error('libelle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="nom " class="block mb-3">date</label>
                            <input type="date" value="{{ $exam->date }}" name="date" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('date') is-invalid @enderror" />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="">
                        <label for="idModule " class="block mb-3">idModule</label>
                        <select name='idModule' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}" {{ $exam->module->id == $module->id ? "selected" : "" }} > {{$module->nom}} </option>
                            @endforeach
                        </select>
                        @error('idModule')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="">
                        <label for="type " class="block mb-3">type</label>
                        <select name='type' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
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


@else
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('modifier Exam ') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{Route('exam.update', $exam->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="">
                                <label for="nom " class="block mb-3">libelle</label>
                                <input type="text" value="{{ $exam->libelle }}"" name="libelle" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('nom') is-invalid @enderror" />
                                @error('libelle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="">
                            <label for="nom " class="block mb-3">date</label>
                            <input type="date" value="{{ $exam->date }}" name="date" class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg @error('date') is-invalid @enderror" />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="">
                        <label for="idModule " class="block mb-3">idModule</label>
                        <select name='idModule' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}" {{ $exam->module->id == $module->id ? "selected" : "" }} > {{$module->nom}} </option>
                            @endforeach
                        </select>
                        @error('idModule')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="">
                        <label for="type " class="block mb-3">type</label>
                        <select name='type' class="px-3 py-2 bg-gray-200 dark:bg-gray-600 w-[50%] rounded-lg">
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
</x-app-layout>


@endif
