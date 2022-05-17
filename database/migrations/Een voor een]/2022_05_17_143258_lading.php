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
        Schema::create('Lading', function (Blueprint $table) {
            $table->increments('Lading-ID')->unique()->primary();
            $table->date('DatumAankomst');
            $table->string('LeverancierVoorNaam');
            $table->string('LeverancierNaam');
            $table->string('Bedrijf');
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
        Schema::dropIfExists('Lading');

    }
};
