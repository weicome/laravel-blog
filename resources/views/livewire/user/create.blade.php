<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <form wire:submit="store">
        <x-input-lable>名称</x-input-lable>
        <x-text-input wire:model="name" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></x-text-input>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        <
    </form>
</div>
