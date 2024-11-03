<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if ($notes->isEmpty())
            <b>No notes found</b>
            @else
                @foreach ($notes as $note)
                    <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl text-indigo-600">{{ $note->title }}</h2>
                        <p class="mt-2">{{ Str::limit($note->text, 200, '...') }}</p>
                        <span class="block mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
                    </div>               
                @endforeach
                {{ $notes->links() }}
            @endif
        </div>
    </div>
</x-app-layout>
