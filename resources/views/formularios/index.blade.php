@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Nueva sección para agregar formularios -->
    <div class="row mb-4">
        <div class="col-md-12">
            @if(auth()->user()->rol === 'Admin')
                <a href="{{ route('formularios.formulario_nuevo') }}" class="btn btn-success">Agregar nuevo formulario</a>
            @endif
        </div>
    </div>

    <div class="row">
        @foreach ($formularios as $formulario)
            @php
                $userFormulario = \App\Models\UserFormulario::where('user_id', auth()->user()->id)->where('formulario_id', $formulario->id_formulario)->first();
                $habilitado = $userFormulario ? $userFormulario->habilitado : false;
            @endphp
            @if ($habilitado)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{ $formulario->nombre }}
                            @if(auth()->user()->rol === 'Admin')
                                <form action="{{ route('formulario_nuevo.destroy', $formulario->id_formulario) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                                <a href="{{ route('formularios.edit', $formulario->id_formulario) }}" class="btn btn-warning btn-sm">Actualizar</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <p>{{ $formulario->descripcion }}</p> <!-- Nueva línea para mostrar la descripción -->    
                            @php
                                $ruta = $formulario->enlace ? $formulario->enlace : route('formularios.show', $formulario->nombre_formulario);
                            @endphp
                            <a href="{{ $ruta }}" class="btn btn-primary">Acceder al formulario</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
