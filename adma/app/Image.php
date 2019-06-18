<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = ['nombre', 'proyect_id'];

    public function Proyect()
    {
        return $this->belongsTo('App\Proyect');
    }
}
