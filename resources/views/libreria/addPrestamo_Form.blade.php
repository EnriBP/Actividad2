@extends('app')

@section('title', "Formulario prestar libro")

@section('content')
    <form action="{{ route('addPrestamo') }}" method="POST">
        @csrf
        <label for="fecha_prestamo">Fecha préstamo</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" required>
        <input type="submit" value="Enviar">
    </form>
@endsection