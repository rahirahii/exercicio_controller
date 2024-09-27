<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('Marca')->nullable(false);
            $table->string('Modelo')->nullable(false);
            $table->string('Ano')->nullable(false);
            $table->string('Placa')->nullable(false);
            $table->string('Tipo_de_veiculo')->nullable(false);
            $table->string('Valor_de_venda')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
