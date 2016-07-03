<?php

namespace App\Http\Controllers;
use DB;
use App\Radialista;
use App\Programacao;
use App\Programa;
use App\EscalaRadialistas;
use Illuminate\Http\Request;
use Redirect;

class EscalaRadialistasController extends Controller
{
    
	//metodos para associar radialista a programa
	public function getIndex($idprogramacao, $idprograma){		
		$radialistas = Radialista::get();		
		return view('indexRadialistas', compact('radialistas', 'idprogramacao', 'idprograma'));
	}
	public function getCreate($idprogramacao, $idprograma, $idradialista){		
		$programacao = Programacao::findOrFail($idprogramacao);
		$programa = Programa::findOrFail($idprograma);
		$radialista = Radialista::findOrFail($idradialista);
		return view('create-editRadialista', compact('programacao', 'programa', 'radialista'));		
	}
	public function postStore(Request $request){
		$escala = new EscalaRadialistas();
		$escala = $escala -> create($request->all());		
		\Session::flash('mensagem_sucesso', 'Radialista escalado na programacao!');		
		return Redirect::to('programacao');
	}
	
}
