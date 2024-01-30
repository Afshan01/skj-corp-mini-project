<x-layout>
    <nav class="mb-4 ml-4 mr-4">
        <ul class="flex space-x-4 text-slate-500">
           <li>
              <a href="/">Home</a>
           </li>
           <li>-></li>
           <li>
              <a href="{{ route('blogposts.index') }}">
                 All BlogPosts
              </a>
           </li>
        </ul>
     </nav>
    <x-blogpost-card :$blogpost/> 
</x-layout>