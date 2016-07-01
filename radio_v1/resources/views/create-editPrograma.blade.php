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
						<p>novo</p>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection