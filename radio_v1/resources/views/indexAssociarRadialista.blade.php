@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Radialistas {{$id}}
					<a href="radialistas/create" class="pull-right">Novo Radialista</a><br/>
				</div>

                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					<table class="table">
						<th>Nome</th>						
						<th>Ações</th>
						<tbody>
							@forelse($radialistas as $radialista)
							<tr>
								<td>{{$radialista -> nome}}</td>								
								<td>									
									<button class="btn btn-sm">Adicionar a Programação</button>
									<a href="radialistas/edit/{{ $radialista-> id }}" class="btn btn-default btn-sm">Editar</a>
									{{ Form::open(['method'=>'DELETE', 'url' => 'radialistas/destroy/'.$radialista-> id, 'style' => 'display: inline;']) }}
									<button type="submit" class="btn btn-sm">Excluir</button>		
									{{ Form::close() }}
								</td>									
							</tr>
							@empty	
							<p>Nenhum radialista cadastrado!</p>							
							@endforelse
						</tbody>
					</table>
                    
						
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection