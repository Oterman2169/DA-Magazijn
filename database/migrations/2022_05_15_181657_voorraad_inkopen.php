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
        //
        Schema::create('Inkopen', function (Blueprint $table) {
            $table->increments('Lading-ID')->unique()->primary();
            $table->increments('Serienummer')->unique();
            $table->integer('Rek-nummer')->unique();
            $table->integer('InkoopAantal');
            $table->double('InkoopPrijs');
            $table->date('DatumInkoop');
            $table->double('VerkoopPrijs');
            $table->string('ProductNaam');
            $table->string('ProductOmschrijving');
            $table->date('VervalDatum');
            $table->string('LeverancierNaam');
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
        //
    }
};
