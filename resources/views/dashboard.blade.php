<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Veprime') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/produkt">Shiko Produktet</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="/porosi">Shiko Porosi</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
