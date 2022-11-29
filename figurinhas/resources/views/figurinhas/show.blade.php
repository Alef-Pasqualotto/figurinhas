<style>
        div.containermostrar{
            height: calc(100vh - 90px);
        }
        div.mostrar {
            width: 100%;
        }
        #borderimg {
            border-radius: 2%;
            border: 2px solid black;
        }
</style>

@extends('base.index')

@section('container')

<div class="containermostrar d-flex">
    <div class="mostrar align-self-center text-center">
        <img id="borderimg"  src="{{url('/figurinhasTurma/')}}/{{$figurinhas->foto}}" width="300" height="400">
        <ul style="list-style-type:none;">
            <li>Nome: {{$figurinhas->nome}}</li>
            <li>Data de nascimento: {{$figurinhas->data_nasc}}</li>
            <li>Cidade: {{$figurinhas->cidade}}</li>
            <li>Número: {{$figurinhas->numero}}</li>
            <li>Raridade: {{$figurinhas->raridade}}</li>
        </ul>
        <a class="btn btn-danger" href="/figurinhas">Voltar</a>
    </div>
</div>

@endsection