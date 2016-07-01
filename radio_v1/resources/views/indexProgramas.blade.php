<h1>Programas</h1>

@forelse($programas as $programa)
	<p>
		<b>Programa:</b> {{$programa -> nome}}
	</p>
@empty	
	<p>Nenhum programa na programação!</p>
@endforelse