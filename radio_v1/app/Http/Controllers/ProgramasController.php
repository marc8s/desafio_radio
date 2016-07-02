<?php

namespace App\Http\Controllers;
use DB;
use App\Programa;
use Illuminate\Http\Request;
use Redirect;

class ProgramasController extends Controller
{
    //lista todos os programas
	public function getIndex(){
		$programas = Programa::get();
		//DB::table('programas')->get();		
		return view('indexProgramas', compact('programas'));
	}	
	//formulário de criação do programa
	public function getCreate(){
		return view('create-editPrograma');
	}
	//armazena o programa
	public function postStore(Request $request){
		$programa = new Programa();
		$programa = $programa -> create($request->all());
		//var_dump($request);
		//return $programa;
		\Session::flash('mensagem_sucesso', 'Programa cadastrado com sucesso!');
		
		return Redirect::to('programas/create');
	}
	//mostra um programa especifico
	public function getShow($idProg){
		return "Mostra o programa -> {$idProg}";
	}
	//carregar um programa especifico pra edição
	public function getEdit($idProg){
		$programa = Programa::findOrFail($idProg);
		return view('create-editPrograma', ['idProg' => $idProg]);
	}
	//alterar um programa especifico 
	public function update(Request $request, $idProg){
		
	}
	//deletar um programa especifico 
	public function getDestroy($idProg){
		
	}
	public function missingMethod($params = array()){
		return view('erro404');
	}
		
}
