<!-- resources/views/dashboard/formularios_usuarios.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Formularios y Usuarios</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                @foreach ($formularios as $formulario)
                    <th scope="col">{{ $formulario->nombre }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    @foreach ($formularios as $formulario)
                        <td>
                            @php
                                $userFormulario = \App\Models\UserFormulario::where('user_id', $user->id)->where('formulario_id', $formulario->id_formulario)->first();
                                $habilitado = $userFormulario ? $userFormulario->habilitado : false;
                            @endphp
                            <form action="{{ route('user_formulario.toggle', [$user->id, $formulario->id_formulario]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn {{ $habilitado ? 'btn-success' : 'btn-danger' }}">
                                    {{ $habilitado ? 'Habilitado' : 'Deshabilitado' }}
                                </button>
                            </form>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
