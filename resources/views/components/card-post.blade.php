@props(['post'])
<article class="mb-8 bg-gradient-to-r bg-white hover:from-green-400 hover:to-pink-400 shadow-2xl">
                <img class="h-72 w-full object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                <div class="px-6 py-4">
                    <div class="flex">
                        <h1 class="font-bold text-2xl mb-2 text-red-600">
                            <a href="{{route('posts.show',$post)}}">{{$post->name}}</a>
                        </h1>
                        @foreach ($post->tags as $tag )
                            <a class="mr-3 ml-3 uppercase text-sm inline-block bg-{{$tag->color}}-500 font-bold rounded-full px-3 py-2 " 
                            href=" {{route('posts.tag',$tag)}}"> {{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="font-bold text-xl">
                        {{$post->extract}}
                    </div>
                </div>
                <div class="px-6 pt-4 pb-2">
                   
                </div>
</article>