<!-- resources/views/formularios/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Formulario 1 (Infra)
                </div>
                <div class="card-body">
                    <a href="{{ route('formularios.infra') }}" class="btn btn-primary">Acceder al formulario</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Formulario 2 (Soporte)
                </div>
                <div class="card-body">
                    <a href="{{ route('formularios.soporte') }}" class="btn btn-primary">Acceder al formulario</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Formulario 3 (Admin)
                </div>
                <div class="card-body">
                    <a href="{{ route('formularios.admin') }}" class="btn btn-primary">Acceder al formulario</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
