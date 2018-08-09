@if (Request::is('atores'))
@foreach ($atores as $ator)
<a href={{ url('/ator/'.$ator['id']) }}>{{$ator->first_name}} {{$ator->last_name}}</a>
<a href={{url('/ator/edit/'.$ator['id'])}}>Editar</a> <a href={{url('/ator/delete/'.$ator['id'])}}>Excluir</a><br>
@endforeach
@elseif(Request::is('atores/procurar'))
{{$ator}}
@endif