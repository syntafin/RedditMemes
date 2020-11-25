<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $meme->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">              
                    <div class="mt-8 text-2xl">
                        Hinzugefügt von: {{ $meme->user->name }}<br />
                        Hingzugefügt am: {{ $meme->created_at->format('d.m.Y H:i:s')}}
                    </div>
                
                    <div class="mt-6 text-gray-500">
                        <img src="{{ $meme->image }}" alt="image" />
                        <a href="{{ $meme->url }}" target="_blank" class="text-center mt-2">Original öffnen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>