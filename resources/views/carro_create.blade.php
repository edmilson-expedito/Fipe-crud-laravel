@extends('master')

@section('content')

<h2>Criar novo carro</h2>

@if (session()->has('success'))
    {{ session()->get('success')}}
@elseif (session()->has('error'))
    {{ session()->get('error')}}
@endif

<form action="{{ route('carros.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="Fipe" class="form-label">Código Fipe</label>
        <input type="text" class="form-control" id="Fipe" name="Fipe" placeholder="Código Fipe">
    </div>
    <div class="mb-3">
        <label for="Marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Marca">
    </div>
    <div class="mb-3">
        <label for="Modelo" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="Modelo" name="Modelo" placeholder="Modelo">
    </div>
    <div class="mb-3">
        <label for="Ano" class="form-label">Ano</label>
        <input type="text" class="form-control" id="Ano" name="Ano" placeholder="Ano">
    </div>
    <div class="mb-3">
        <label for="Preco" class="form-label">Preço</label>
        <input type="text" class="form-control" id="Preco" name="Preco" placeholder="Preço">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<hr>
<a href="{{ route('carros.index') }}" class="btn btn-primary">Back</a>

@endsection
