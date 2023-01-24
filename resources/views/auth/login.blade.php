@extends('layouts.auth-master')
@section('content')
        <form action="/login" method="POST">
            @csrf
            <h1>Login</h1>
            @include('layouts.partials.messages')
            <div class="mb-3" >
              <label for="exampleInputEmail1" class="form-label">Username/email</label>
              <input type="text" class="form-control" name="username" id="">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="">
            </div>
            <div class="">
                <a href="/register">Crea tu cuenta</a>
            </div>
              <input type="submit"  class="form-control"  name="Login" value="Entrar">
          </form>

@endsection
