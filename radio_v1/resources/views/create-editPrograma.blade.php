@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Formulário de gestão de programa						
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					
					@if(Request::is("programas/edit/*"))
						{{Form::model($programa, [ 'method' => 'PATCH', 'url' => 'programas/update/'.$programa->id])}}
					@else
						{{ Form::open(['url' => 'programas/store']) }}
					@endif					
					
					{{Form::label('nome', 'Nome')}}
					{{Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Programa'])}}
						
					{{Form::label('descricao', 'Descrição')}}
					{{Form::input('text', 'descricao', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descrição do Programa'])}}
						
					{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
						
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection