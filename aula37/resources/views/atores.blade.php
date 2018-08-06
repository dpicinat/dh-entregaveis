
{{-- Ex2 --}}
{{-- @foreach ($atores as $ator)
{{$ator->getNomeCompleto()}}<br>
@endforeach --}}

{{-- Ex3g --}}

@if (Request::is('atores'))
@foreach ($atores as $ator)
<a href={{ url('/ator/'.$ator['id']) }}>{{$ator->first_name}}<br></a>
@endforeach
@elseif(Request::is('atores/procurar'))
{{$ator}}
@endif

<form action={{ url('/atores/procurar/') }} method="post">
   @csrf
    <input type="text" name="encontrar_nomes" placeholder="Digite o Ator" id="">
    <button type="submit">Enviar</button>
</form>

<form action={{ url('/atores') }} method="get">
    @csrf
     <button type="submit">Limpar</button>
 </form>


