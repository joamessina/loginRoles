<!-- resources/views/home.blade.php -->

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

                    <h2>Lista de Usuarios</h2>
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
                    <div class="mt-4">
                        <h2>Formularios</h2>
                        
                            <a href="{{ route('formularios.index') }}" class="btn btn-primary">Acceder a los formularios</a>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection