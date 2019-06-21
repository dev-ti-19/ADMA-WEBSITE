<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class ServiciosController extends Controller
{
    //

    public function all()
    {
        $servicios = Servicio::all();

        return view('about')->with('servicios', $servicios);
    }
}
