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
					
					<?php
						function programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia)
						{?>
							<table class="table">
								<th>Nome</th>						
								<th>Horário</th>
								<th>Radialista</th>
								<th>Ações</th>
								<tbody>
									@forelse($programacaos as $programacao)								
										<?php 
											$idprograma_programacao = $programacao -> idprograma; 
											$programacao_dia = $programacao -> dia;
										?>
										@if($programacao_dia == $dia)
											@foreach($programas as $programa)
											<?php $idprograma = $programa -> id; ?>
												@if($idprograma_programacao == $idprograma)
													<?php $nomeprograma = $programa -> nome; ?>
													@break;
												@endif
											@endforeach					
																			
											<tr>
												<td>{{$nomeprograma}}</td>
												<td>{{$programacao -> horario}}</td>
												<td>
													<?php $idprogramacao = $programacao -> id; ?>
													@foreach($escalacao as $escala)	
														<?php $idprogramacao_escala = $escala -> idprogramacao; ?>
														@if($idprogramacao == $idprogramacao_escala)
															<?php $idradialista_escala = $escala -> idradialista; ?>
															@foreach($radialistas as $radialista)
																<?php $idradialista = $radialista -> id;?>														
																@if($idradialista_escala == $idradialista)
																	<?php $nomeradialista = $radialista -> nome;?>														
																	{{$nomeradialista }} 
																	<a href="http://localhost/desafio_radio/radio_v1/public/escalaradialista/destroy/{{ $escala-> id }}" class="btn btn-default btn-sm">x</a>
																	@break
																@endif
															@endforeach
														@endif
													@endforeach
												</td>										
												<td>								
													<a href="programacao/edit/{{ $programacao-> id }}/{{ $programa-> id }}" class="btn btn-default btn-sm">Mover</a>									
													<a href="http://localhost/desafio_radio/radio_v1/public/escalaradialista/index/{{ $programacao-> id }}/{{ $programa-> id }}" class="btn btn-default btn-sm">Associar Radialista</a>	
														
													{{ Form::open(['method'=>'DELETE', 'url' => 'programacao/destroy/'.$programacao-> id, 'style' => 'display: inline;']) }}
													<button type="submit" class="btn btn-sm">Remover da Programação</button>		
													{{ Form::close() }}
												</td>									
											</tr>
										@endif
									@empty	
										<p>Nenhum programa escalado!</p>							
									@endforelse
								</tbody>
							</table>
				<?php	}?>
					
                    <h2>Segunda-feira</h2><br/>					
					<?php 
						$dia = 'Segunda-feira';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>					
					<h2>Terça-feira</h2><br/>
					<?php 
						$dia = 'Terça-feira';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>	
					<h2>Quarta-feira</h2><br/>
					<?php 
						$dia = 'Quarta-feira';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>
					<h2>Quinta-feira</h2><br/>
					<?php 
						$dia = 'Quinta-feira';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>
					<h2>Sexta-feira</h2><br/>
					<?php 
						$dia = 'Sexta-feira';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>
					<h2>Sabado</h2><br/>
					<?php 
						$dia = 'Sabado';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>
					<h2>Domingo</h2><br/>
					<?php 
						$dia = 'Domingo';
						programacao_do_dia($programacaos, $programas, $radialistas, $escalacao, $dia);
					?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection