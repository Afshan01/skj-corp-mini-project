<x-layout>
    @foreach ($blogposts as $blogpost)
        <x-card class="mb-4 mr-4 ml-4">
            <div class="mb-4 flex justify-between">
                <h2 class="text-lg font-medium">{{ $blogpost->title }}</h2>
            </div>
            <div class="mb-4 justify-between">
                <div class="text-sm text-dark-500">Blog Published on: {{ $blogpost->created_at->format('d-m-Y') }}</div>
            </div>
            <div class="mb-4 justify-between">
                <h2 class="text-sm font-medium">Author: Author Name
                    {{-- {{ $blogpost->title }} --}}
                </h2>
            </div>

            <p class="text-sm text-slate-500">{!!  nl2br($blogpost->content)  !!}</p>
        </x-card>
    @endforeach

</x-layout>