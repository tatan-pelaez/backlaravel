<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('PK_PAIS')->autoIncrement();
            $table -> softDeletes();
            $table->string('TX_NOMBRE', 100);
            $table->string('TX_CODIGO', 10);
            $table->string('TX_CODIGO_MONEDA', 10);
            $table->boolean('BL_ESTADO')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
        $table -> dropColumn('deleted_at');
    }
}
