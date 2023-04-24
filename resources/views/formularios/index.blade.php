<!-- resources/views/formularios/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Nueva sección para agregar formularios -->
    <div class="row mb-4">
        <div class="col-md-12">
            <a href="{{ route('formularios.formulario_nuevo') }}" class="btn btn-success">Agregar nuevo formulario</a>
        </div>
    </div>

    <div class="row">
        @foreach ($formularios as $formulario)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ $formulario->nombre }}
                    </div>
                    <div class="card-body">
                        <a href="{{ route('formularios.show', $formulario->id_formulario) }}" class="btn btn-primary">Acceder al formulario</a>
                        <form action="{{ route('formulario_nuevo.destroy', $formulario->id_formulario) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
