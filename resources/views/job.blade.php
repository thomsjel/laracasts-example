<x-layout>
    <x-slot:heading>Job</x-slot>
  
   <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
   <p>Salary: {{ $job['salary'] }}</p>

</x-layout>