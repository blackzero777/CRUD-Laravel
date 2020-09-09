@extends('layout')

@section('content')
    <div class="descripcion-usuario">
        <h2>Crear usuario</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Por favor corrige los errores debajo:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> - {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="formulario-crear">
            <form method="POST" action="{{ url('usuarios/crear') }}">
                {{ csrf_field() }}

                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" placeholder="Tu nombre" value="{{ old('name') }}">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="luis@example.com" value="{{ old('email') }}">

                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">

                <button type="submit">Crear usuario</button>
            </form>
        </div>

        <p>
            <a href="{{ route('users') }}">Regresar</a>
        </p>
    </div>
@endsection


