@extends('welcome')

@section('content')
<div class="container">
    <h2>Registro de Usuario</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
            <label for="photo">Foto (opcional)</label>
            <input type="file" name="photo" class="form-control">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    
        <div class="form-group">
            <label for="rol">Rol</label>
            <select name="rol" class="form-control">
                <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                <option value="user" {{ old('ro') == 'user' ? 'selected' : '' }}>Usuario</option>
                
            </select>
            @error('rol') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
