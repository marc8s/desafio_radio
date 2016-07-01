<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProgramasController extends Controller
{
    public function exibirProgramacao(){		
		return view('programacao');
	}
	public function irParaHome(){		
		return view('welcome');
	}
	public function testarFuncionalidade(){
		return view('testes', [
			'titulo'=> "Programação",
			'checagem' => true,
			'programas' => ['p1', 'p2', 'p3', 'p4']
		]);
	}	
}
