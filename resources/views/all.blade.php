<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alle Reddit Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    {{ $data->links() }}
                    @foreach($data as $meme)
                        <div class="flex">
                            <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <img src="{{ $meme->thumbnail }}" alt="thumbnail" />    
                            </div>
                            </div>
                            <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                <a href="{{ route('show', ['id' => $meme->id]) }}">{{ $meme->name }}</a>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                {{ $meme->user->name }} am {{ $meme->created_at->format('d.m.Y') }}
                            </dd>
                            </div>
                        </div>
                    @endforeach
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>