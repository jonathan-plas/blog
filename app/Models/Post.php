<?php
/* relaciones entre modelos */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //relacion uno a muchos  (inversa)
    public function user(){
        /*nombre del modelo*/
        return $this->belongsTo(User::class);
    }
    //relacion uno a muchos  (inversa)
    public function category(){
        /*nombre del modelo*/
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //Relacion 1 a 1 Polimorfica
    public function image(){
        //Aqui pasamos 2 parametros (El nombre del modelo ; y el nombre de la funcion en Image "imageable")
        return $this->morphOne(Image::class,'imageable');
    }
} 
