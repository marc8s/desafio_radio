@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Formulário de gestão de radialista						
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					
					@if(Request::is("escalaradialista/*"))
						<p>Nome do programa: {{$programa-> nome}}</p><br/>
						<p>Nome do radialista: {{$radialista-> nome}}</p><br/>
						<p>Horario da programacao: {{$programacao-> horario}}</p><br/>
						
						{{ Form::open(['url' => 'escalaradialista/store']) }}
						{{ Form::hidden('idradialista', $radialista-> id) }}
						{{ Form::hidden('idprogramacao', $programacao-> id) }}
						
						{{Form::submit('Escalar Radialista', ['class' => 'btn btn-primary'] )}}
						
						{{ Form::close() }}
					@else
						@if(Request::is("radialistas/edit/*"))
							{{Form::model($radialista, [ 'method' => 'PATCH', 'url' => 'radialistas/update/'.$radialista->id])}}
						@else
							{{ Form::open(['url' => 'radialistas/store']) }}
						@endif					
						
						{{Form::label('nome', 'Nome')}}
						{{Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Radialista'])}}
																
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
							
						{{ Form::close() }}
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection