<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyect;

class PortafolioController extends Controller
{
    //
    public function all()
    {   
        $proyects = Proyect::orderBy('id', 'ASC')->paginate(10);
        return view('proyects')->with('proyects', $proyects);
    }

    public function detail($id)
    {
        $proyect = Proyect::find($id);
        $proyect->category;
        $proyect->images;

        return view('detail', ['proyect' => $proyect]);
        dd($proyect);
    }
}
