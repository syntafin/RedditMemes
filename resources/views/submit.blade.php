<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form method="post" action="{{ route('submitmeme') }}">
                @csrf
                    <div>
                        <x-jet-label for="url" value="Reddit URL" />
                        <x-jet-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url')" required autofocus />
                    </div>

                    <x-jet-button class="ml-4 mt-4">
                        Speichern
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>