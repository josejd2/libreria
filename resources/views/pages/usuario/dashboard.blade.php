@extends('layouts.app')

@section('title', 'Mis Alquileres')

@section('content')
<h2 class="text-center mb-4">Libros alquilados por {{ $usuario->login ?? $usuario->usuario }}</h2>

<div class='table-responsive mt-4 mx-4'>
    @if($alquileres->count() > 0)
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope='col'>Libro</th>
                <th scope='col'>Temática</th>
                <th scope='col'>Autor</th>
                <th scope='col'>Precio del Alquiler</th>
                <th scope='col'>Fecha de Devolución</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alquileres as $a)
            <tr>
                <td>{{ $a->libro->titulo ?? 'N/A' }}</td>
                <td>{{ $a->libro->tematica ?? 'N/A' }}</td>
                <td>{{ $a->libro->autor->nombre ?? 'N/A' }} {{ $a->libro->autor->apellidos ?? '' }}</td>
                <td>{{ number_format($a->precio ?? 0) }}€</td> 
                <td>{{ isset($a->fecha_devolucion) ? \Carbon\Carbon::parse($a->fecha_devolucion)->format('d/m/Y') : 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <!-- Mensaje si no hay datos -->
    <div class='alert alert-info text-center mt-4 mx-4'>
        <h4>No hay alquileres registrados</h4>
    </div>
    @endif
</div>
@endsection