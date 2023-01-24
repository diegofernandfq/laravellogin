@extends('layouts.auth-master')
@section('content')
        <form action="/register" method="POST">
            @csrf
            <h1>Crea tu cuenta</h1>
            @include('layouts.partials.messages')
            <div class="form-floating mb-3">
                Username<br>
                <input type="text" name="username">
            </div>
            <div class="form-floating mb-3">
                Email<br>
                <input type="email" name="email">
            </div>
            <div class="form-floating mb-3">
                Password<br>
                <input type="password" name="password">
            </div>
            <div class="form-floating mb-3">
                Confirmar password<br>
                <input type="password" name="password_confirmation">
            </div>
            <div class="form-floating mb-3">
                <a href="/login">Iniciar sesión</a><br>
                <input type="submit" class="btn btn-primary"  name="registrarse" value="Registrarse">
            </div>
        </form>
@endsection

