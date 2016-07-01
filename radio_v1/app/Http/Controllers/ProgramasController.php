<?php

namespace App\Http\Controllers;
use DB;

class ProgramasController extends Controller
{
    //lista todos os programas
	public function getIndex(){
		$programas = DB::table('programas')->get();		
		return view('indexProgramas', compact('programas'));
	}	
	//formulário de criação do programa
	public function getCreate(){
		return view('create-editPrograma');
	}
	//armazena o programa
	public function store(){
		
	}
	//mostra um programa especifico
	public function getShow($idProg){
		return "Mostra o programa -> {$idProg}";
	}
	//carregar um programa especifico pra edição
	public function getEdit($idProg){
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
	
	public function exibirProgramacao(){		
		return view('programacao');
	}
	public function irParaHome(){		
		return view('welcome');
	}
	public function testarFuncionalidade(){
		return view('testes', [
			'titulo'=> "Programação",
			'checagem' => true,
			'programas' => ['p1', 'p2', 'p3', 'p4']
		]);
	}	
}
