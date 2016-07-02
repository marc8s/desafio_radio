@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Formulário de associação de radialista a programação					
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					
					<p>Nome do programa: {{$programa-> nome}}</p><br/>
					
					@if(Request::is("escalaradialista/edit/*"))
						{{Form::model($radialista, [ 'method' => 'PATCH', 'url' => 'radialistas/update/'.$radialista->id])}}
					@else
						{{ Form::open(['url' => 'escalaradialista/store']) }}
					@endif					
					
					{{Form::label('nome', 'Nome')}}
					{{Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Radialista'])}}
															
					{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
						
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection