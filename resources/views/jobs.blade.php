<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul>
        @forelse ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong><li>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year </li>
            </a>
        @empty
            <h1>No current jobs listed</h1>
        @endforelse
    </ul>
</x-layout>