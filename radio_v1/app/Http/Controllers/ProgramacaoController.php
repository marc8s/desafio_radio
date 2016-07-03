<?php

namespace App\Http\Controllers;
use DB;
use App\Programacao;
use App\Programa;
use App\Radialista;
use App\EscalaRadialistas;
use Illuminate\Http\Request;
use Redirect;

class ProgramacaoController extends Controller
{
    //lista programacao
	public function getIndex(){
		$programacaos = Programacao::get();	
		$programas = Programa::get();
		$radialistas = Radialista::get();
		$escalacao = EscalaRadialistas::get();
		return view('indexProgramacao', compact('programacaos', 'programas', 'radialistas', 'escalacao'));
	}	
	//formulário de criação 
	public function getCreate($id){
		$programa = Programa::findOrFail($id);
		return view('create-editProgramacao', ['programa' => $programa]);
	}
	//armazena 
	public function postStore(Request $request){
		$programacao = new Programacao();
		$programacao = $programacao -> create($request->all());		
		\Session::flash('mensagem_sucesso', 'Programação atualizada com sucesso!');		
		return Redirect::to('programacao');
	}
	//mostra 
	public function getShow($id){
		return "Mostra a programacao -> {$id}";
	}
	//carregar uma programacao pra edição
	public function getEdit($id, $idprograma){
		$programacao = Programacao::findOrFail($id);
		$programa = Programa::findOrFail($idprograma);	
		$escalacao = EscalaRadialistas::get();
		$radialistas = Radialista::get();
		return view('create-editProgramacao', compact('programacao', 'programa' , 'escalacao', 'radialistas'));		
		
	}
	//alterar 
	public function patchUpdate($id, Request $request){
		$programacao = Programacao::findOrFail($id);
		$programacao->update($request->all());
		\Session::flash('mensagem_sucesso', 'Programacao atualizada com sucesso!');
		return Redirect::to('programacao');
	}
	//deletar um programa especifico 
	public function deleteDestroy($id){
		$programacao = Programacao::findOrFail($id);
		$programacao->delete();
		\Session::flash('mensagem_sucesso', 'Programa removido da programação!');
		return Redirect::to('programacao');
	}
	public function missingMethod($params = array()){
		return view('erro404');
	}
		
}
