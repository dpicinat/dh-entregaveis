<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Listagem de Filmes</title>
    </head>
    {{csrf_field()}}
    <body>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>



        <div class="form-group col-12 m-auto">
                <h1 align="center">Listagem de Filmes</h1>
                {{-- <table>
                <tr>
                    <th>Filme</th>
                    <th>Classificacao</th>
                    <th>Premios</th>
                    <th>Duracao</th>
                    <th>Release Date</th>
                    <th>Genero</th>
                    <th>Atores</th>
                </tr>
                @foreach($filmes as $filme)
                    <tr>                       
                        <td>{{$filme['title']}}</td>
                        <td>{{$filme['rating']}}</td>
                        <td>{{$filme['awards']}}</td>
                        <td>{{$filme->length}}</td>
                        <td>{{$filme->getFormatDate($filme->release_date)}}</td>
                        <td>{{$filme['genre_id']}}</td>                       
                    </tr>
                @endforeach --}}
                <div class="content">
                    <div class="m-b-md" align="center">
                        @foreach($filmes as $filme)
                        
                        {{$filme['title']}} - Duração: {{$filme['length']}} - Rating: {{$filme['rating']}}  <br>
                        @endforeach
                    </div>
                </div> 
        </div>
    </body>
</html>
