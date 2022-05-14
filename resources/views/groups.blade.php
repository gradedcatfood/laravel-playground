<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Groups') }}
            </h2>
            <x-button
                x-data="{}"
                x-on:click="window.livewire.emitTo('user-group-modal', 'show')"
            >
                Add Group
            </x-button>
        </div>

        <livewire:user-group-modal/>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    MAH GROUPS
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
