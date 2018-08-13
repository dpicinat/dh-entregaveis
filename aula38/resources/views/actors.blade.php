@if (Request::is('atores'))
    @foreach ($atores as $ator)
        <b>Nome:</b> <a href={{ url('/ator/'.$ator['id']) }}>{{$ator->first_name}} {{$ator->last_name}}</a><b> - Created Date: {{$ator->created_date}}</b><br>
        <b>Filme Favorito: {{$ator->title}}<b> - Release Date: {{$ator->release_date}}</b><br>
        <a href={{url('/ator/edit/'.$ator['id'])}}>Editar</a> <a href={{url('/ator/delete/'.$ator['id'])}}>Excluir</a><br>
        <hr>
    @endforeach
@elseif(Request::is('atores/procurar'))
    {{$ator}}
@endif