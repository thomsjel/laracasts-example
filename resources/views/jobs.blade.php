<x-layout>
    <x-slot:heading>Job Listings</x-slot>
  
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>