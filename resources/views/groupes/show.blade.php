<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('groupes Details') }}
        </h2>
    </x-slot>

<div class="w-full flex justify-center">
    <div class="p-6 text-gray-900 dark:text-gray-100 w-[60%]">
        <div class="px-10 flex items-center w-full">

            <div class="p-3 bg-gray-300 dark:bg-gray-700 rounded-lg  w-full border-gray-600 ml-3">
                <table>
                    <tr class="">
                        <td class="py-2">Groupe Nom: </td>
                        <td class="pl-3">{{$groupes->libelle}} </td>
                    </tr>
                    <tr class="">
                        <td class="py-2">filiere: </td>
                        <td class="pl-3">{{$groupes->filliere->nom}} </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="px-10">
    <div class="flex justify-center my-4 space-x-4">
        <a href="{{ route('groupes.show', [$groupes->id, 'section' => 'Stagieres']) }}"
            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'Stagieres') font-bold @endif">
            Stagieres
        </a>
        <a href="{{ route('groupes.show', [$groupes->id, 'section' => 'modules']) }}"
            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'modules') font-bold @endif">
            modules
        </a>
        <a href="{{ route('groupes.show', [$groupes->id, 'section' => 'Profs']) }}"
            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 @if(request()->section == 'Profs') font-bold @endif">
            Profs
        </a>
    </div>
    @if(request()->section == 'Stagieres')
<div class="px-10">
    <div class="mb-4">
        <h2 class="dark:text-gray-200 text-xl font-medium">
            Stagieres
        </h2>
    </div>
    <div class="rounded-lg overflow-hidden">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nom
                    </th>
                    <th>
                        prenom
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stagiere as $stagieres)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $stagieres->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $stagieres->nom   }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $stagieres->prenom }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@elseif(request()->section == 'modules')
<div class="px-10">
    <div class="mb-4">
        <h2 class="dark:text-gray-200 text-xl font-medium">
            modules
        </h2>
    </div>
    <div class="rounded-lg overflow-hidden">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nom
                    </th>
                    <th>
                        masseHorraire
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $modules)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $modules->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $modules->nom   }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $modules->masseHorraire }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@elseif(request()->section == 'Profs')

<div class="px-10">
    <div class="mb-4">
        <h2 class="dark:text-gray-200 text-xl font-medium">
            Profs
        </h2>
    </div>
    <div class="rounded-lg overflow-hidden">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nom
                    </th>
                    <th>
                        prenom
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profs as $prof)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $prof->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $prof->nom   }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $prof->prenom }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endif
</x-admin-layout>
