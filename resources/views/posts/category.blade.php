<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-6">
        <h1 class="mb-3  uppercase  text-4xl rounded-t-lg text-center py-8 font-bold  text-gray-600" >
            Categoria: {{$category->name}}
        </h1>
        
        
    @foreach ( $posts as $post )
    
            <x-card-post :post="$post"  />
    @endforeach

    <div class="mt-4 mb-5 max-w-5xl mx-auto px-2 sm:px-6 lg:px-8contaniner ">
            {{$posts->links()}}
    </div>
        
    </div>
    

</x-app-layout>
