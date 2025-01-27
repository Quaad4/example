<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div>
        <a href='/jobs/{{$job->id}}/edit'>
            <h2 class="font-bold text-lg">{{ $job->title }}</h2>
            <p>This job pays {{ $job->salary}} per year.</p>
        </a>
    </div>
</x-layout>