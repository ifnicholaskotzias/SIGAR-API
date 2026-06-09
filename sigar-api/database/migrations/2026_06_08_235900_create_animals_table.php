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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('especie', 100);
            $table->string('raca', 100)->nullable();
            $table->enum('sexo', ['M', 'F', 'N/A'])->nullable();
            $table->date('data_nascimento')->nullable();
            $table->decimal('peso_atual', 5, 2)->nullable();
            $table->text('alergia')->nullable();
            $table->enum('status', ['RESGATADO','ADOTADO','OBITO'])->default('RESGATADO');
            $table->string('foto_path')->nullable();
            $table->text('observacoes_gerais')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
