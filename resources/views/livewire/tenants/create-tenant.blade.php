<div class="w-1/2 p-4 mx-auto space-y-4 shadow">

    <h2 class="text-sm text-indigo-500 uppercase">
        Create Tenant
    </h2>

    <form wire:submit='save' class="space-y-4">
        {{-- ID --}}
        <div class="space-y-4">
            <x-label for="id" value="{{ __('Name') }}" />
            <x-input wire:model.live="id" class="block mt-1 w-full" type="text" autofocus autocomplete="id" />
        </div>

        {{-- Domain --}}
        <div class="space-y-4">
            <x-label for="domain" value="{{ __('Domain') }}" />
            <x-input wire:model.live="domain" class="block mt-1 w-full" type="text" autofocus autocomplete="domain" />
        </div>

        <x-validation-errors />

        {{-- Submit --}}
        <x-secondary-button wire:target='save' type="submit">
            {{ __('Create') }}
        </x-secondary-button>
    </form>

</div>
