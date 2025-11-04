@extends('proveedores.layout')

@section('title', 'Agregar Proveedor')
@section('header', 'Agregar Proveedor')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('proveedores.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre *</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                    @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">NIT *</label>
                    <input type="text" name="nit" class="form-control" value="{{ old('nit') }}" required>
                    @error('nit') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    @error('telefono') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                    @error('direccion') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                    @error('correo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button class="btn btn-success">Guardar</button>
                <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
@endsection
