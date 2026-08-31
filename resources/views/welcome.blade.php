<x-layout title="Home">

    @forelse($tasks as $task)

        <li>{{ $task }}</li>

    @empty

        <p>There no tasks.</p>

    @endforelse

</x-layout>