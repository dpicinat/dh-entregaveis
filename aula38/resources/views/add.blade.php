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
    Ator cadastrado com sucesso!
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
      <h1 align="center">Adicionar Atores</h1>
      <form id="adicionarAtor" name="adicionarAtor" method="POST" action="/actors/add">
        {{csrf_field()}}
        <div class="form-group col-6 m-auto">
              <label for="first_name">Nome Ator</label>
              <input type="text" class="form-control" name="first_name" id="first_name" value"{{ old('first_name') }}"/>
          </div>
          <div class="form-group col-6 m-auto">
              <label for="last_name">Sobrenome Ator</label>
              <input type="text" class="form-control" name="last_name" id="last_name" value"{{ old('last_name') }}"/>
          </div>
          <div class="form-group col-6 m-auto">
              <label for="rating">Classificação</label>
              <input type="text" class="form-control" name="rating" id="rating" value"{{ old('rating') }}"/>
          </div>
          <div class="form-group col-6 m-auto">
            <label for="rating">Data Criação</label>
            <input type="date" class="form-control" name="created_at" id="rating" value"{{ old('created_at') }}"/>
          </div>
    
          <select class="form-control" name="favorite_movie_id" >
                @foreach($favorite_movie_id as $key => $value)
                    <option value="$Ator->id">{{$ator->favorite_movie_id}}</option>
                @endforeach
            </select>
          <br>
          <div class="form-group col-6 m-auto">
            <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
          </div>
          <br>
          <div class="form-group col-6 m-auto">
            <input type="submit" value="Excluir Ator" name="submit" class="btn btn-primary"/>
          </div>
      </form>
  </body>
</html>
