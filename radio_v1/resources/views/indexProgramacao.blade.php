@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Programação
					<a href="programas" class="pull-right">Inserir Novo Programa</a><br/>
				</div>
				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
                    <h2>Segunda-feira</h2><br/>
					<table class="table">
						<th>Nome</th>						
						<th>Horário</th>	
						<th>Ações</th>
						<tbody>
							@forelse($programacaos as $programacao)
							<?php $idprograma_programacao = $programacao -> idprograma; ?>
								@foreach($programas as $programa)
								<?php $idprograma = $programa -> id; ?>
									@if($idprograma_programacao == $idprograma)
										<?php $nome = $programa -> nome; ?>
										@break;
									@endif
								@endforeach
							<tr>
								<td>{{$nome}}</td>	
								<td>{{$programacao -> horario}}</td>	
								<td>								
									<a href="programacao/edit/{{ $programacao-> id }}/{{ $programa-> id }}" class="btn btn-default btn-sm">Editar</a>									
									<a href="radialistas/associar/{{ $programacao-> id }}" class="btn btn-default btn-sm">Associar Radialista</a>
									{{ Form::open(['method'=>'DELETE', 'url' => 'programacao/destroy/'.$programacao-> id, 'style' => 'display: inline;']) }}
									<button type="submit" class="btn btn-sm">Remover da Programação</button>		
									{{ Form::close() }}
								</td>									
							</tr>
							@empty	
							<p>Nenhum programa escalado!</p>							
							@endforelse
						</tbody>
					</table>
					
					
					<h2>Terça-feira</h2><br/>
					<h2>Quarta-feira</h2><br/>
					<h2>Quinta-feira</h2><br/>
					<h2>Sexta-feira</h2><br/>
					<h2>Sabado</h2><br/>
					<h2>Domingo</h2><br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection