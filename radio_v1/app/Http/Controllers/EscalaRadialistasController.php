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
	public function getIndex($idprogramacao, $idprograma){		
		$radialistas = Radialista::get();		
		return view('indexAssociarRadialista', compact('radialistas', 'idprogramacao', 'idprograma'));
	}
	
	public function getCreate($idprogramacao, $idprograma, $idradialista){		
		$programacao = Programacao::findOrFail($idprogramacao);
		$programa = Programa::findOrFail($idprograma);
		$radialista = Radialista::findOrFail($idradialista);
		return view('create-editAssociaRadialista', compact('programacao', 'programa', 'radialista'));
	}
	
}
