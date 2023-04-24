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

                        <input type="hidden" name="nombre_formulario_hidden" id="nombre_formulario_hidden">

                        <button type="submit" class="btn btn-primary">Crear formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        const nombre = document.getElementById('nombre').value;
        document.getElementById('nombre_formulario_hidden').value = nombre;
    });
</script>

