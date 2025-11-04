@extends('proveedores.layout')

@section('title', 'Listado de Proveedores')
@section('header', 'Listado de Proveedores')

@section('content')
    <div class="mb-3 text-end">
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Agregar Proveedor</a>
    </div>

    <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>NIT</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th style="width: 200px;">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($proveedores as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->nit }}</td>
                <td>{{ $p->telefono }}</td>
                <td>{{ $p->correo }}</td>
                <td>
                    <a href="{{ route('proveedores.show', $p->id) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('proveedores.edit', $p->id) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('proveedores.destroy', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Eliminar proveedor?')" class="btn btn-sm btn-danger">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No hay proveedores registrados.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
