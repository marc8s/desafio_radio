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
		\Session::flash('mensagem_sucesso', 'Programa cadastrado com sucesso!');		
		return Redirect::to('programas/create');
	}
	//mostra um programa especifico
	public function getShow($id){
		return "Mostra o programa -> {$id}";
	}
	//carregar um programa especifico pra edição
	public function getEdit($id){
		$programa = Programa::findOrFail($id);		
		return view('create-editPrograma', ['programa' => $programa]);
	}
	//alterar um programa especifico 
	public function patchUpdate($id, Request $request){
		$programa = Programa::findOrFail($id);
		$programa->update($request->all());
		\Session::flash('mensagem_sucesso', 'Programa atualizado com sucesso!');
		return Redirect::to('programas/edit/'.$programa->id);
	}
	//deletar um programa especifico 
	public function deleteDestroy($id){
		$programa = Programa::findOrFail($id);
		$programa->delete();
		\Session::flash('mensagem_sucesso', 'Programa deletado com sucesso!');
		return Redirect::to('programas');
	}
	public function missingMethod($params = array()){
		return view('erro404');
	}
		
}
