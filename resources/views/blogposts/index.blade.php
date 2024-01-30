<x-layout>
    @foreach ($blogposts as $blogpost)
        <x-card class="mb-4">
            {{ $blogpost->title }}
        </x-card>
    @endforeach

</x-layout>