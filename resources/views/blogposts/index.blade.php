<x-layout>
    @foreach ($blogposts as $blogpost)
        <x-blogpost-card class="mb-4" :$blogpost>
            <div class="mt-4">
                <x-link-button :href="route('blogposts.show', $blogpost) ">
                    View More
                </x-link-button>
            </div>
        </x-blogpost-card>
    @endforeach

</x-layout>