<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioApiController extends Controller
{
    public function __construct(Usuario $usuario,Request $request)
    {
        $this->Usuario = $usuario;
        $this->Request = $request;
    }

    public function index()
    {
        $dados = $this->Usuario->all();
        return response()->json($dados);
    }
}
