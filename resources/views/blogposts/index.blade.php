<x-layout>
    @foreach ($blogposts as $blogpost)
        <div>{{ $blogpost -> title }}</div>
    @endforeach

</x-layout>