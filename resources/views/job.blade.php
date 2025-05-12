<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <ul>
       <h2 class="font-bold text-2xl">{{$job['title']}}</h2>
       <p class="font-medium text-lg">Salário: {{$job['salary']}} por ano</p>
    </ul>
</x-layout>
