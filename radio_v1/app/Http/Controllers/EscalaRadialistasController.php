<?php

namespace App\Http\Controllers;
use DB;
use App\Radialista;
use App\Programacao;
use App\Programa;
use Illuminate\Http\Request;
use Redirect;

class EscalaRadialistasController extends Controller
{
    
	//associar a uma programacao
	public function getIndex($idprogramacao){		
		$radialistas = Radialista::get();		
		return view('indexAssociarRadialista', compact('radialistas', 'idprogramacao'));
	}
	
	
}
