@extends('proveedores.layout')

@section('title', 'Detalle de Proveedor')
@section('header', 'Detalle de Proveedor')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $proveedor->id }}</dd>

                <dt class="col-sm-3">Nombre</dt>
                <dd class="col-sm-9">{{ $proveedor->nombre }}</dd>

                <dt class="col-sm-3">NIT</dt>
                <dd class="col-sm-9">{{ $proveedor->nit }}</dd>

                <dt class="col-sm-3">Teléfono</dt>
                <dd class="col-sm-9">{{ $proveedor->telefono }}</dd>

                <dt class="col-sm-3">Dirección</dt>
                <dd class="col-sm-9">{{ $proveedor->direccion }}</dd>

                <dt class="col-sm-3">Correo</dt>
                <dd class="col-sm-9">{{ $proveedor->correo }}</dd>

                <dt class="col-sm-3">Creado</dt>
                <dd class="col-sm-9">{{ $proveedor->created_at }}</dd>

                <dt class="col-sm-3">Actualizado</dt>
                <dd class="col-sm-9">{{ $proveedor->updated_at }}</dd>
            </dl>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
@endsection
