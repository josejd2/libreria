@extends('layouts.guest')
@section('title', 'Iniciar Sesión')
@section('content')
<div class="card shadow-lg w-100 border-0" style="max-width: 400px;">
    <div class="card-header bg-dark text-white text-center py-4">
        <h2 class="card-title mb-0">Librería Fermín</h2>
    </div>
    <div class="card-body p-5 bg-white">
        <div class="text-center mb-4">
            <p class="text-secondary fw-semibold">ACCESO AL SISTEMA</p>
        </div>
        <form id="loginForm" action="{{ route('login.post') }}" method="POST">
            @csrf
            {{-- Mensajes de error general de la sesión (ej. Credenciales inválidas) --}}
            @if(session('status'))
            <div class="alert alert-danger text-center mb-4 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <div class="mb-4">
                <input
                    type="text"
                    class="form-control form-control-lg border-2 @error('usuario') is-invalid @enderror"
                    placeholder="Usuario"
                    name="usuario"
                    value="{{ old('usuario') }}"
                    required>
                @error('usuario')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input
                    type="password"
                    class="form-control form-control-lg border-2 @error('password') is-invalid @enderror"
                    placeholder="Contraseña"
                    name="password"
                    required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg py-3 fw-bold">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
</div>
@endsection