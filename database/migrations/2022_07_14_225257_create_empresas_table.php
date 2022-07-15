<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao_social',100);
            $table->string('nome_fantasia',100);
            $table->string('cnpj',20);
            $table->string('ie',20)->nullable();
            $table->string('im',20)->nullable();
            $table->string('fone',15);
            $table->string('email',100);
            $table->string('email_contabilidade',100)->nullable();
            $table->string('cep',15);
            $table->string('logradouro',100);
            $table->string('complemento',100)->nullable();
            $table->string('numero',15);
            $table->string('uf',2);
            $table->string('cidade',100);
            $table->string('bairro',100);
            $table->string('cnae',20);
            $table->string('regime_tributario',50);
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
        Schema::dropIfExists('empresas');
    }
}
