<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->unsignedBigInteger('PK_HISTORIAL')->autoIncrement();
            $table->timestamps();
            $table -> softDeletes();
            $table->string('CIUDADDESTINO', 100);
            $table->string('CONVERSION', 50);
            $table->unsignedBigInteger('HUMEDAD');
            $table->string('IPCONSULTA', 50);
            $table->decimal('LATITUD', 10, 7);
            $table->decimal('LONGITUD', 10, 7);
            $table->string('MONEDAREPRESENTACION', 10);
            $table->string('NOMBREMONEDA', 100);
            $table->string('NOMBREPC', 200);
            $table->string('PAISDESTINO', 50);
            $table->string('ORIGEN', 10);
            $table->string('PRECIO', 100);
            $table->unsignedBigInteger('PRESUPUESTO');
            $table->decimal('TEMPERATURA', 10, 7);
            $table->decimal('TEMPERATURAMAXIMA', 10, 7);
            $table->decimal('TEMPERATURAMINIMA', 10, 7);
            $table->unsignedBigInteger('FK_CIUDAD');
            $table->foreign('FK_CIUDAD')->references('PK_CIUDAD')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
        $table -> dropColumn('deleted_at');
    }
}
