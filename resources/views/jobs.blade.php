<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <h1>This is jobs page</h1>
    @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title']  }}</strong> earns {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>