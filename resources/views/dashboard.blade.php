<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16">
        <h2 class="text-center font-bold max-w-8xl mx-4 sm:px-6 lg:px-8 px-16 py-4 my-3 shadow-2xl" style="color:steelblue; background-color:lightcyan;">My Todos List</h2>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 px-16">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <livewire:add-todos />
                <br />
                <livewire:all-todos />
            </div>
        </div>
    </div>
</x-app-layout>
