<x-app-layout>
    <div class="contaniner py-8">
        <h1 class="shadow-xl text-4xl rounded-t-lg text-center py-8 font-bold bg-green-300 text-gray-600" >
            {{$post->name}}
        </h1>

        <div class="text-lg py-8  font-bold text-gray-400 mb-2">
            {{$post->extract}}
        </div>
        <!-- creamos una grid con grid-cols-3 -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 rounded-t-lg mx-0.5 ">
                <figure>
                <!--llamamos a nuestra imagen para poder mostrarla -->
                    <img  class="rounded-t-lg shadow-2xl   w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url) }}"  alt="">
                    
                </figure>
                <div>
                  <p class="text-justify font-bold mr-4 mt-4 "> 
                  {{$post->body}}
                  </p>  
                </div>
            </div>

            <aside class="rounded-t-lg pl  ">
                <h1 class="text-2xl font-bold text-gray-500 mb-4 ">
                    Mas en {{$post->category->name}}
                </h1>

                <ul>
                    @foreach ($similares as $similar )
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show',$similar)}}">
                                <img class="w-40 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                <span class="ml-2 text-gray-500">   {{$similar->name}} </span>
                            </a>
                        </li>
                    @endforeach
                </ul>


            </aside>
        </div>
    </div>

</x-app-layout>