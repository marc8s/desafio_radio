@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Formulário de gestão de programacao						
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					
					@if(Request::is("programacao/edit/*"))
						{{Form::model($programacao, [ 'method' => 'PATCH', 'url' => 'programacao/update/'.$programacao->id])}}
					@else
						{{ Form::open(['url' => 'programacao/store']) }}
					@endif		
					
					<p>Nome do programa: {{$programa-> nome}}</p><br/>
					
					{{Form::label('dia', 'Dia')}}
					{{Form::input('text', 'dia', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Dia do Programa'])}}
					
					{{Form::label('horario', 'Horario')}}
					{{Form::input('text', 'horario', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Horario do Programa'])}}
						
					{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
						
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection