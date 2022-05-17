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
        Schema::create('LadingDetails', function (Blueprint $table) {
            $table->integer('Lading-ID');
            $table->text('SerieNummer',20);
            $table->text('ProductNaam');
            $table->text('ProductOmschrijving',150);     
            $table->string('RekNummer')->unique()->primary();
            $table->integer('InkoopAantal');
            $table->double('InkoopPrijs');
            $table->date('InkoopDatum');
            $table->date('VervalDatum');
            $table->double('VerkoopPrijs');




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
        Schema::dropIfExists('LadingDetails');
    }
};
