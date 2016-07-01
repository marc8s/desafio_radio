@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Programas</div>

                <div class="panel-body">
                    @forelse($programas as $programa)
						<p>
							<b>Programa:</b> {{$programa -> nome}} <a href="#">Adicionar a Programação</a><br/>
						</p> 	
					@empty	
						<p>Nenhum programa cadastrado!</p>
					@endforelse
						
					<a href="create">Novo Programa</a><br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection