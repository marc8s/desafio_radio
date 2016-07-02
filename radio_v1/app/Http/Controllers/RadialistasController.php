<?php

namespace App\Http\Controllers;
use DB;
use App\Radialista;
use App\Programacao;
use Illuminate\Http\Request;
use Redirect;

class RadialistasController extends Controller
{
    //lista todos os radialistas
	public function getIndex(){
		$radialistas = Radialista::get();			
		return view('indexRadialistas', compact('radialistas'));
	}	
	//formulário de criação do radialista
	public function getCreate(){
		return view('create-editRadialista');
	}
	//armazena o radialista
	public function postStore(Request $request){
		$radialista = new Radialista();
		$radialista = $radialista -> create($request->all());		
		\Session::flash('mensagem_sucesso', 'Radialista cadastrado com sucesso!');		
		return Redirect::to('radialistas/create');
	}
	//mostra um radialista especifico
	public function getShow($id){
		return "Mostra o radialista -> {$id}";
	}
	//carregar um radialista especifico pra edição
	public function getEdit($id){
		$radialista = Radialista::findOrFail($id);		
		return view('create-editRadialista', ['radialista' => $radialista]);
	}
	//alterar um radialista especifico 
	public function patchUpdate($id, Request $request){
		$radialista = Radialista::findOrFail($id);
		$radialista->update($request->all());
		\Session::flash('mensagem_sucesso', 'Radialista atualizado com sucesso!');
		return Redirect::to('radialistas/edit/'.$radialista->id);
	}
	//deletar um programa especifico 
	public function deleteDestroy($id){
		$radialista = Radialista::findOrFail($id);
		$radialista->delete();
		\Session::flash('mensagem_sucesso', 'Radialista deletado com sucesso!');
		return Redirect::to('radialistas');
	}
	
	//associar a uma programacao
	public function getAssociar($id){		
		$radialistas = Radialista::get();			
		return view('indexAssociarRadialista', compact('radialistas', 'id'));
	}
	public function missingMethod($params = array()){
		return view('erro404');
	}
		
}
