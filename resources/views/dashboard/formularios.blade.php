@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre del formulario</th>
                        <th>Habilitado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formularios as $formulario)
                        <tr>
                            <td>{{ $formulario->nombre }}</td>
                            <td>{{ $formulario->habilitado ? 'Sí' : 'No' }}</td>
                            <td>
                                <form action="{{ route('dashboard.formularios.toggle', $formulario->id_formulario) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">{{ $formulario->habilitado ? 'Deshabilitar' : 'Habilitar' }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
