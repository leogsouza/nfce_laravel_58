<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unidade',50);
            $table->string("abrev",10);
            $table->timestamps();
        });

        \App\Unidade::create(['unidade' => 'UNIDADE', 'abrev' => 'UNID']);
        \App\Unidade::create(['unidade' => 'LITRO', 'abrev' => 'LITRO']);
        \App\Unidade::create(['unidade' => 'QUILOGRAMA', 'abrev' => 'KG']);
        \App\Unidade::create(['unidade' => 'SACO', 'abrev' => 'SACO']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
}
