<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("unidade_id")->unsigned();
            $table->integer('tributacao_id')->nullable();
            $table->string("produto",100);
            $table->decimal("preco",10,2)->default(0);
            $table->integer("cfop")->nullable();
            $table->string("gtin",40)->nullable();
            $table->string("ncm",40)->nullable();
            $table->string("cest",40)->nullable();
            $table->string("cbenef",40)->nullable();
            $table->string("extipi",40)->nullable();
            $table->string("mva",40)->nullable();
            $table->string("nfci",40)->nullable();
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign("unidade_id")->references("id")->on("unidades");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
