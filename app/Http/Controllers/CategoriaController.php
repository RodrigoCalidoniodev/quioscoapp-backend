<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    public function index() {
        //Forma 1 para retornar datos de la API: return response()->json(['categorias' => Categoria::all()]);

        // Forma 2: Más control sobre los datos que retornamos
        return new CategoriaCollection(Categoria::all());
    }
}
