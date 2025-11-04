<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // up() crea la tabla al migrar
    public function up(): void
    {
        Schema::create('proveedores', function (Blueprint $table) {
            // PK autoincremental tipo bigint (equivalente a bigIncrements)
            $table->id();

            // Campos del enunciado (con tamaños sugeridos)
            $table->string('nombre', 150);     // Nombre del proveedor
            $table->string('nit', 50)->unique(); // NIT único para evitar duplicados
            $table->string('telefono', 50)->nullable(); // Tel. puede quedar vacío
            $table->string('direccion', 255)->nullable(); // Dirección opcional
            $table->string('correo', 150)->nullable();    // Correo opcional

            // Timestamps: created_at y updated_at
            $table->timestamps();
        });
    }

    // down() revierte la migración (borra la tabla)
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
