<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
            
        </x-slot>
        <div class="text-xl font-bold text-center">WiFi Access</div> 
        <div class="mb-4 text-sm text-center">Please register for free to access to our WiFi Network </div> 

        <x-validation-errors class="mb-4" />
        
        <form wire:submit.prevent="save" >
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email"  required autofocus  wire:model.defer="form.email" />
            </div>

            <div class="mt-4">
                <x-label for="bane" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required  wire:model.defer="form.name" />
            </div>

            <div class="block mt-4">
                <label for="terms" class="flex items-center">
                    <x-checkbox id="terms" name="terms" wire:model.defer="form.terms" required />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Yes, I accept the') }}
                        <a href="" target="_blank" class="text-blue-600 hover:underline dark:text-blue-400">
                            {{ __('Terms of Service') }}
                        </a>
                    </span>
                    
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
          
                <x-button class="ms-4">
                    {{ __('Connect') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
