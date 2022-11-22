<!DOCTYPE html>
<html lang="pt-b">

<head>
@include('base.header', ['title' => $title]) 
    
</head>
<body>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Foto</th>
            <th>Data de Nascimento</th>
            <th>Cidade</th>
            <th>Numero</th>
            <th>Raridade</th>
            <th>Ações</th>
        </tr>
    </thead>    
    <tbody>
        @foreach($figurinhas as $figurinha)
            <tr>
                <td>{{$figurinha->nome}}</td>
                <td><img src="{{url('/figurinhasTurma/')}}/{{$figurinha->foto}}" width="45" height="40"></td>
                <td>{{$figurinha->data_nasc}}</td>
                <td>{{$figurinha->cidade}}</td> 
                <td>{{$figurinha->numero}}</td> 
                <td>{{$figurinha->raridade}}</td>  
                <td>
                    <a class="btn btn-warning" href="/figurinhas/{{$figurinha->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/figurinhas/{{$figurinha->id}}/show">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
@include('base.footer')
</html>