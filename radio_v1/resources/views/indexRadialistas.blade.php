@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Radialistas</div>

                <div class="panel-body">
                    @forelse($radialistas as $radialista)
						<p>
							<b>Radialista:</b> {{$radialista -> radialista}}
						</p>
					@empty	
						<p>Nenhum radialista cadastrado!</p>
					@endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection