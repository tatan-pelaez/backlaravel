<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->unsignedBigInteger('PK_CIUDAD')->autoIncrement();
            $table->timestamps();
            $table -> softDeletes();
            $table->string('TX_CIUDAD', 100);
            $table->unsignedBigInteger('NU_CODIGO');
            $table->boolean('BL_ESTADO')->default(true);
            $table->unsignedBigInteger('FK_PAIS');
            $table->foreign('FK_PAIS')->references('PK_PAIS')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
        $table -> dropColumn('deleted_at');
    }
}
