@extends('layouts.app-master')

@section('content')
<h1 class="container"> Sericat S A </h1>
        @auth
            <p>Bievenido {{ auth()->user()->name ?? auth()->user()->username }}, estás autenticado a la página</p>
            <p>
                <a href="/logout">Logout</a>
            </p>
        @endauth
        @guest
            <p>Para ver el contenido <a href="/login">inicia sesión</a></p>
        @endguest
@endsection



