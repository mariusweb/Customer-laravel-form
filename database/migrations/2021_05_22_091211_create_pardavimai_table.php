<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePardavimaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'pardavimai', function (Blueprint $table) {
                $table->id();
                $table->foreignId('darbuotojas_id')->constrained('darbuotojai');
                $table->bigInteger('sutarties_nr');
                $table->integer('rekomendacija');
                $table->integer('greitis');
                $table->integer('aptarnavimas');
                $table->longText('pastabos');
                $table->boolean('sutikimas');
                // $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pardavimai');
    }
}
