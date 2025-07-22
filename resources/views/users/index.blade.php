<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wifi Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <x-section-title>
                        <x-slot name="title">
                            <div class="text-gray-600">
                                <h1>Wifi Users</h1>
                            </div>
                        </x-slot>
    
                        <x-slot name="aside">
                            
                        </x-slot>
                        <x-slot name="description">
                            
                        </x-slot>
                    </x-section-title>
    
                    <hr>

                     @livewire('wifi-users.show-wifi-users')
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>