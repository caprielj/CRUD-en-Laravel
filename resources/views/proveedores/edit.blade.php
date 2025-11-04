@extends('proveedores.layout')

@section('title', 'Editar Proveedor')
@section('header', 'Editar Proveedor')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre *</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $proveedor->nombre) }}" required>
                    @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">NIT *</label>
                    <input type="text" name="nit" class="form-control" value="{{ old('nit', $proveedor->nit) }}" required>
                    @error('nit') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $proveedor->telefono) }}">
                    @error('telefono') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $proveedor->direccion) }}">
                    @error('direccion') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" value="{{ old('correo', $proveedor->correo) }}">
                    @error('correo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button class="btn btn-primary">Actualizar</button>
                <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
