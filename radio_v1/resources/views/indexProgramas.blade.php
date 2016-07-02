@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Programas 
					<a href="programas/create" class="pull-right">Novo Programa</a><br/>
				</div>

                <div class="panel-body">
					<table class="table">
						<th>Nome</th>
						<th>Descrição</th>
						<th>Ações</th>
						<tbody>
							@forelse($programas as $programa)
							<tr>
								<td>{{$programa -> nome}}</td>
								<td>{{$programa -> descricao}}</td>
								<td>									
									<button class="btn btn-sm">Adicionar a Programação</button>
									<a href="programas/edit/{{ $programa-> id }}" class="btn btn-default btn-sm">Editar</a>
									<button class="btn btn-sm">Excluir</button>									
								</td>									
							</tr>
							@empty	
							<p>Nenhum programa cadastrado!</p>							
							@endforelse
						</tbody>
					</table>
                    
						
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection