<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <h1>This is jobs page</h1>
    @foreach ($jobs as $job)
        <li>
            <strong>{{ $job['title']  }}</strong> earns {{ $job['salary'] }} per year.
        </li>
    @endforeach
</x-layout>