@extends('welcome')

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Listado de Usuarios</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-user-plus"></i> Registrar Nuevo
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>
                                @if($user->photo)
                                    <img src="{{ asset('storage/' . $user->photo) }}" width="50" height="50" class="img-circle">
                                @else
                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" width="50" height="50" class="img-circle">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->rol == 'admin' ? 'Administrador' : 'Usuario' }}</td>
                            <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay usuarios registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
