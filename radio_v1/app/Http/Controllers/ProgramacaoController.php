<?php

namespace App\Http\Controllers;
use DB;
use App\Programacao;
use App\Programa;
use Illuminate\Http\Request;
use Redirect;

class ProgramacaoController extends Controller
{
    //lista programacao
	public function getIndex(){
		$programacaos = Programacao::get();			
		return view('indexProgramacao', compact('programacaos'));
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
		return Redirect::to('programacao/create');
	}
	//mostra 
	public function getShow($id){
		return "Mostra a programacao -> {$id}";
	}
	//carregar uma programacao pra edição
	public function getEdit($id){
		$programacao = Programacao::findOrFail($id);		
		return view('create-editProgramacao', ['programacao' => $programacao]);
	}
	//alterar 
	public function patchUpdate($id, Request $request){
		$programacao = Programacao::findOrFail($id);
		$programacao->update($request->all());
		\Session::flash('mensagem_sucesso', 'Programacao atualizada com sucesso!');
		return Redirect::to('programacao/edit/'.$programacao->id);
	}
	//deletar um programa especifico 
	public function deleteDestroy($id){
		$programacao = Programacao::findOrFail($id);
		$programacao->delete();
		\Session::flash('mensagem_sucesso', 'Programacao deletada com sucesso!');
		return Redirect::to('programacao');
	}
	public function missingMethod($params = array()){
		return view('erro404');
	}
		
}
