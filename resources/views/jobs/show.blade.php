<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div>
        <h2 class="font-bold text-lg">{{ $job->title }}</h2>
        <p>This job pays {{ $job->salary}} per year.</p>
    </div>
    @can('edit', $job)
        <div class="mt-2">
            <a href='/jobs/{{$job->id}}/edit'>
                <x-form-button>Edit</x-form-button>
            </a>
        </div>
    @endcan
</x-layout>