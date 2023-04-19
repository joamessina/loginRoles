@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        
        @if($role == 'Admin')
            <h2>Contenido para Administradores</h2>
            // Aquí va el contenido para administradores
        @endif
        
        @if($role == 'Infra')
            <h2>Contenido para Infra</h2>
            // Aquí va el contenido para Infra
        @endif
        
        @if($role == 'Soporte')
            <h2>Contenido para Soporte</h2>
            // Aquí va el contenido para Soporte
        @endif
    </div>
@endsection
