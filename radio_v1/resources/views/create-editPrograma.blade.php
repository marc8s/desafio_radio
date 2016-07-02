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
                    @if(isset($idProg))
						<p>Exibe o programa {{$idProg}}</p>
					@else						
						{{ Form::open(['url' => 'programas/store']) }}
					
						{{Form::label('nome', 'Nome')}}
						{{Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Programa'])}}
						
						{{Form::label('descricao', 'Descrição')}}
						{{Form::input('text', 'descricao', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descrição do Programa'])}}
						
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
						
						{{ Form::close() }}
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection