<h1>Radialistas</h1>

@forelse($programas as $programa)
	<p>
		<b>Radialista:</b> {{$programa -> radialista}}
	</p>
@empty	
	<p>Nenhum radialista cadastrado!</p>
@endforelse