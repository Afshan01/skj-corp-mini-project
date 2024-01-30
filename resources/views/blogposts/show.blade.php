<x-layout>
    <x-navigation class="mb-4 ml-4 mr-4" :links="['All BlogPosts' => route('blogposts.index'), ('Post No: ').$blogpost->id => '#']" />
    <x-blogpost-card :$blogpost/> 
</x-layout>