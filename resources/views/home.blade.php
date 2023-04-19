@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h2>Lista de usuarios</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rol }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Nueva sección para los formularios -->
                    <div class="formularios">
                        <h1>Formularios</h1>
                        @if (auth()->user()->rol == 'Admin' || auth()->user()->rol == 'infra')
                            @include('formularios.formulario_infra')
                        @endif
                        @if (auth()->user()->rol == 'Admin' || auth()->user()->rol == 'soporte')
                            @include('formularios.formulario_soporte')
                        @endif
                        @if (auth()->user()->rol == 'Admin')
                            @include('formularios.formulario_admin')
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
