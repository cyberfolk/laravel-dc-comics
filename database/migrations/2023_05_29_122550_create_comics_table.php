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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 1000);
            $table->string('thumb', 200);
            $table->string('price', 10);
            $table->string('series', 100);
            $table->string('sale_date', 100);
            $table->string('type', 100);
            $table->string('artists', 100)->nullable();
            $table->string('writers', 100)->nullable();
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
        Schema::dropIfExists('comics');
    }
};
