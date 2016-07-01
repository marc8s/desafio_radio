<h1>Programas</h1>

@forelse($programas as $programa)
	<p>
		<b>Programa:</b> {{$programa -> nome}} <a href="#">Adicionar a Programação</a><br/>
	</p> 	
@empty	
	<p>Nenhum programa cadastrado!</p>
@endforelse
	
<a href="create">Novo Programa</a><br/>