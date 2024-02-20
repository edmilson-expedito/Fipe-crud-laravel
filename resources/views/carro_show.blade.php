@extends('master')

@section('content')

<h2>Show information for - {{ $carro->Modelo }}</h2>

<table class="table">
    <tr>
        <th scope="col">Fipe</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Preco</th>
        <th scope="col"></th>
    </tr>
    <tr>
        <td>{{ $carro->Fipe }}</td>
        <td>{{ $carro->Marca }}</td>
        <td>{{ $carro->Modelo }}</td>
        <td>{{ $carro->Ano }}</td>
        <td>{{ $carro->Preco }}</td>
        <td>
            <form action="{{ route('carros.destroy', ['carro' => $carro->id]) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-primary">DELETE</button>
            </form>
        </td>
    </tr>
</table>
<hr>
<a href="{{ route('carros.index') }}" class="btn btn-primary">Back</a>

@endsection
