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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 20);
            $table->string('StazioneDiPartenza', 30);
            $table->string('StazioneDiArrivo', 30);
            $table->dateTime('OrarioDiPartenza');
            $table->dateTime('OrarioDiPartenza');
            $table->string('CodiceTreno', 15)->unique();
            $table->integer('NumeroCarrozze')->unsigned();
            $table->boolean('InOrario');
            $table->boolean('Cancellato');


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
        Schema::dropIfExists('trains');
    }
};