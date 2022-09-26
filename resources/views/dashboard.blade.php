<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Izveidot jaunu CV') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-primary-button class="ml-3 space-x-1.5">
                <a href="/resume/create">
                {{ __('Izveidot jaunu CV') }}
                </a>
            </x-primary-button>
        </div>
    </div>
</x-app-layout>
