<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Foto</th>
            <th>Data de Nascimento</th>
            <th>Naturalidade</th>
            <th>Raridade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($figurinhas as $figurinha)
            <tr>
                <td>{{$figurinha->nome}}</td>
                <td>{{$figurinha->foto}}</td>
                <td>{{$figurinha->data_nasc}}</td>
                <td>{{$figurinha->naturalidade}}</td> 
                <td>{{$figurinha->raridade}}</td>  
                <td>
                    <a class="btn btn-warning" href="/figurinhas/{{$figurinha->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/figurinhas/{{$figurinha->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/figurinhas/{{$figurinha->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>