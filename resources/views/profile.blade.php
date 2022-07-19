<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <x-main-card>
        <x-profile-card/>
    </x-main-card>

    <x-slot name="footer">
         <h2 class="font-semibold text-center text-sm text-gray-800 leading-tight">
            {{ __('Copyright @2022') }}
        </h2>
    </x-slot>
</x-app-layout>
