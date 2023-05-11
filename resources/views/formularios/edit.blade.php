@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar formulario</div>

                <div class="card-body">
                    <form action="{{ route('formularios.update', $formulario->id_formulario) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre del formulario:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $formulario->nombre }}" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción del formulario:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $formulario->descripcion }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="link">Enlace del formulario (opcional):</label>
                            <input type="text" name="link" id="link" class="form-control" value="{{ $formulario->enlace }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
