<h1>Radialistas</h1>

@forelse($radialistas as $radialista)
	<p>
		<b>Radialista:</b> {{$radialista -> radialista}}
	</p>
@empty	
	<p>Nenhum radialista cadastrado!</p>
@endforelse