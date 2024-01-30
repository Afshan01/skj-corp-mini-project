<x-layout>
    <x-navigation class="mb-4 ml-4 mr-4" :links="['All BlogPosts' => route('blogposts.index')]" />
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