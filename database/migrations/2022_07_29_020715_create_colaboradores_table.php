<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id()->index();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->nullable()->default(NULL);
            $table->string('nascimento')->nullable()->default(NULL);
            $table->string('salario')->nullable()->default(NULL);
            $table->string('celular')->nullable()->default(NULL);
            $table->string('email')->unique();
            $table->string('cep')->nullable()->default(NULL);
            $table->string('logradouro')->nullable()->default(NULL);
            $table->string('numero')->nullable()->default(NULL);
            $table->string('complemento')->nullable()->default(NULL);
            $table->string('bairro')->nullable()->default(NULL);
            $table->string('cidade')->nullable()->default(NULL);
            $table->string('uf')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }
};
