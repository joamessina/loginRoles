@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo formulario</div>

                <div class="card-body">
                    <form action="{{ route('formularios.formulario_nuevo') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre del formulario:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="link">Enlace del formulario (opcional):</label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción del formulario:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
                        </div>


                        <input type="hidden" name="nombre_formulario_hidden" id="nombre_formulario_hidden">

                        <button type="submit" class="btn btn-primary">Crear formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


