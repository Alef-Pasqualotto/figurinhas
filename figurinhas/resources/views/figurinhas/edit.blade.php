@extends('base.index')

@section('container')
<form action='/figurinhas/update' method='get'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{$figurinhas->id}}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => $figurinhas->nome])
    @include('components.field', ['type' => 'text', 'name' => 'data_nasc', 'label' => 'Data de Nascimento', 'value' => $figurinhas->data_nasc])
    @include('components.field', ['type' => 'text', 'name' => 'cidade', 'label' => 'Cidade', 'value' => $figurinhas->cidade])
    @include('components.field', ['type' => 'text', 'name' => 'raridade', 'label' => 'Raridade', 'value' => $figurinhas->raridade])
    <a class="btn btn-danger" href="/figurinhas">Voltar</a>
    <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection