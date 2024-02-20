@extends('master')

@section('content')

<h2>Carros FIPE</h2>

<hr>

<a href="{{ route('carros.create') }}" class="btn btn-primary">Create</a>

<hr>

<ul class="list-group">
    @foreach ($carros as $carro)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $carro->Modelo }}
            <div class="btn-group" role="group" aria-label="Carro Actions">
                <a href="{{ route('carros.edit', ['carro' => $carro->id] ) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('carros.show', ['carro' => $carro->id] ) }}" class="btn btn-info">Show</a>
            </div>
        </li>
    @endforeach
</ul>

@endsection
