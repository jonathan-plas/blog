<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /*funcion para mostrar todos los posts activos */
    public function index(){
        // El estatus 2 significa activo y 1 inactivo
        $posts= Post::where('status',2)
        ->latest('id')
        //paginacion de 8 resultados en nuestro index
        ->paginate(8);

        return view('posts.index',compact('posts'));
    }
    /* Funcion  para mostrar el listado de los posts al dar click en uno especifico*/
    public function show(Post $post){
        //recuperamoes el listado de posts

        $similares=Post::where('category_id', $post->category_id)
                        ->where('status',2)
                        //que no me muestre el mismo post en la lista de opciones
                        ->where('id','!=',$post->id)
                        //que ordene los datos de forma descendente dependiendo de su id
                        ->latest('id')
                        //cantidad de datos que me va mostrar 
                        ->take(5)
                        ->get();

        return view('posts.show',compact('post','similares'));
    }

    public function category(Category $category){
            $posts= Post::where('category_id',$category->id)
            ->where('status',2)
            ->latest('id')
            ->paginate(5);

        return view('posts.category',compact('posts','category'));
    }

    public function tag(tag $tag){
        
    }
}
