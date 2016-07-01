<?php

namespace App\Http\Controllers;
//use DB;

class ProgramacaoController extends Controller
{
    //imprime programacao
	public function getIndex(){				
		return view('indexProgramacao');
	}	
}
