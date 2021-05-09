<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Relacion Polimorfica
    //decirle que acepte relaciones polimorficas
    // El nombre del metodo debe ser igual al campo que esta en la tabla "imageable"
    public function imageable(){
        //Le decimos que nos retorne una relacion polimorfica
        return $this->morphTo();
    }
}
