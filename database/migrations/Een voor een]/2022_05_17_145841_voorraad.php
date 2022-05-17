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
        Schema::create('Voorraad', function (Blueprint $table) {
            $table->integer('Lading-ID');
            $table->string('SerieNummer')->unique()->primary();
            $table->double('InkoopAantal');
            $table->double('InkoopPrijs');
            $table->double('VerkoopPrijs');
            $table->double('GemiddeldePrijs'); 
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
        Schema::dropIfExists('Voorraad');
    }
};
