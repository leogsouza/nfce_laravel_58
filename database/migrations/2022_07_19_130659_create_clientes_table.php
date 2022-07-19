<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('nome_fantasia',100)->nullable();
            $table->string('cpf',20)->nullable();
            $table->string('cnpj',20)->nullable();
            $table->string('celular',15)->nullable();
            $table->string('email',100)->nullable();
            $table->string('cep',15);
            $table->string('logradouro',100);
            $table->string('numero',15);
            $table->string('complemento',100)->nullable();
            $table->string('uf',2);
            $table->string('cidade',100);
            $table->string('bairro',100);
            $table->string('ie',20)->nullable();
            $table->string('im',20)->nullable();
            $table->string('rg',20)->nullable();
            $table->string('suframa',20)->nullable();
            $table->string('idEstrangeiro',20)->nullable();
            $table->string('indIEDest',20)->nullable();
            $table->string('ibge',40);

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
        Schema::dropIfExists('clientes');
    }
}
