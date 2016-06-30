<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RadioController extends Controller
{
    public function exibirProgramacao(){
		//echo "Hello controller";
		return view('programacao');
	}
	public function irParaHome(){
		//echo "Hello controller";
		return view('welcome');
	}
	public function testarFuncionalidade(){
		return view('testes', ['texto'=> "Hello World Testes"]);
	}
	
	/*public function getIndex(){
		
	}*/
}
