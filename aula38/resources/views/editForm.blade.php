<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>

@if (count($errors) > 0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif


@if (isset($sucesso) && $sucesso)
    Filme cadastrado com sucesso!
@endif
@if (isset($ocorreuErro) && $ocorreuErro)
    Ops, ocorreu um erro, tente novamente!
@endif

{{-- 
 <form method="post" action="/adicionar">

{{csrf_field()}}

 <input name="title" value"{{old('Title')}}"/>
<input name="awards" value"{{old('awards')}}"/>

<button type="submit">Enviar</button>  --}}


<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Adicionar Ator</title>
  </head>
  <body>
      <h1 align="center">Formulário Editar Atores</h1>
      <form id="adicionarAtor" name="adicionarAtor" method="POST" action="/ator/edit/{{ $ator->id }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group col-6 m-auto">
              <label for="first_name">Nome Ator</label>
              <input type="text" class="form-control" name="first_name"  value="{{ $ator->first_name }}">
          </div>
          <div class="form-group col-6 m-auto">
              <label for="last_name">Sobrenome</label>
              <input type="text" class="form-control" name="last_name" value="{{ $ator->last_name}}">
          </div>
          <div class="form-group col-6 m-auto">
              <label for="rating">Classificação</label>
              <input type="text" class="form-control" name="rating"  value="{{ $ator->rating }}"/>
          </div>
          <div class="form-group col-6 m-auto">
            <label for="rating">Filme Favorito do Ator</label>
            {{-- Exerc aula39 Ex1S --}}
            <select class="form-control" name="favorite_movie_id" id="">
                @foreach($tabela_movies as $key => $value)
                    <option value="$tabela_movies [$key]['title']">{{$tabela_movies [$key]['title']}}</option>
                @endforeach
            </select>
            
            
          </div>
          
          
          <br>
          <div class="form-group col-6 m-auto">
            <input type="submit" value="Editar Ator" name="submit" class="btn btn-primary"/>
          </div>
          
      </form>
  </body>
</html>
