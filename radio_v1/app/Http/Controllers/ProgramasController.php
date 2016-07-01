<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProgramasController extends Controller
{
    //lista todos os programas
	public function index(){
		return view('indexProgramas');
	}	
	//formulário de criação do programa
	public function create(){
		return view('create-editPrograma');
	}
	//armazena o programa
	public function store(){
		
	}
	//mostra um programa especifico
	public function show($id){
		return "Mostra o programa -> {$id}";
	}
	//carregar um programa especifico pra edição
	public function edit($id){
		return view('create-editPrograma');
	}
	//alterar um programa especifico 
	public function update(Request $request, $id){
		
	}
	//deletar um programa especifico 
	public function destroy($id){
		
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
