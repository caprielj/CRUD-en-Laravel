<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    // GET /proveedores - Lista de proveedores
    public function index()
    {
        // Obtenemos todo (en producción podrías paginar)
        $proveedores = Proveedor::orderBy('id', 'desc')->get();

        // Pasamos datos a la vista 'proveedores.index'
        return view('proveedores.index', compact('proveedores'));
    }

    // GET /proveedores/create - Formulario de creación
    public function create()
    {
        return view('proveedores.create');
    }

    // POST /proveedores - Guarda un nuevo proveedor
    public function store(Request $request)
    {
        // Validación del formulario antes de crear
        $validated = $request->validate([
            'nombre'    => ['required', 'string', 'max:150'],
            'nit'       => ['required', 'string', 'max:50', 'unique:proveedores,nit'],
            'telefono'  => ['nullable', 'string', 'max:50'],
            'direccion' => ['nullable', 'string', 'max:255'],
            'correo'    => ['nullable', 'string', 'max:150', 'email'],
        ]);

        // Crea el registro usando asignación masiva ($fillable)
        Proveedor::create($validated);

        // Redirige con mensaje flash de éxito
        return redirect()
            ->route('proveedores.index')
            ->with('success', 'Proveedor creado correctamente.');
    }

    // GET /proveedores/{id} - Detalle de un proveedor
    public function show($id)
    {
        // findOrFail: 404 si no existe
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.show', compact('proveedor'));
    }

    // GET /proveedores/{id}/edit - Formulario de edición
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    // PUT/PATCH /proveedores/{id} - Actualiza datos
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);

        // Validación: unique NIT excepto el actual (ignore id)
        $validated = $request->validate([
            'nombre'    => ['required', 'string', 'max:150'],
            'nit'       => ['required', 'string', 'max:50', 'unique:proveedores,nit,' . $proveedor->id],
            'telefono'  => ['nullable', 'string', 'max:50'],
            'direccion' => ['nullable', 'string', 'max:255'],
            'correo'    => ['nullable', 'string', 'max:150', 'email'],
        ]);

        // Actualizamos con update()
        $proveedor->update($validated);

        return redirect()
            ->route('proveedores.index')
            ->with('success', 'Proveedor actualizado correctamente.');
    }

    // DELETE /proveedores/{id} - Elimina el registro
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()
            ->route('proveedores.index')
            ->with('success', 'Proveedor eliminado correctamente.');
    }
}
