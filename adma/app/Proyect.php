<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    const DISENIO = 1;
    const CONTRUCCION = 2;
    const TERMINADO = 3;

    protected $table = "proyects";

    protected $fillable = ['nombre', 'descripcion', 'creado' , 'status', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images() 
    {
        return $this->hasMany('App\Image');
    }
}
