<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @forelse ($notes as $note)
                <div class="bg-white p6 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl text-indigo-600">{{ __($note->title) }}</h2>
                    <p class="mt-2">{{ Str::limit(__($note->text), 200, '...') }}</p>
                    <span>{{ $note->updated_at->diffForHumans() }}</span>
                </div>
            @empty
            <p>You have no notes yet</p>
            @endforelse
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>