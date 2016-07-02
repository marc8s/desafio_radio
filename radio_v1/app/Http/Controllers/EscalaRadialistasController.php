<?php

namespace App\Http\Controllers;
use DB;
use App\Radialista;
use App\Programacao;
use Illuminate\Http\Request;
use Redirect;

class EscalaRadialistasController extends Controller
{
    
	//associar a uma programacao
	public function getIndex($id){		
		$radialistas = Radialista::get();			
		return view('indexAssociarRadialista', compact('radialistas', 'id'));
	}
	public function getCreate($id){
		//$programa = Programa::findOrFail($id);
		return 'associar';
	}
}
