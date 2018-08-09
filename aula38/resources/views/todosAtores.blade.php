@if(isset($edicaoSucesso) && $edicaoSucesso)
    Ator atualizado com sucesso!
@endif

<br><br>

@foreach($atores as $Ator)
{{$Ator->nomeAtor}} - <a href="/ator/edit/{{ $atores->id }}">Editar</a> - <a href="">Remover</a>
@endforeach